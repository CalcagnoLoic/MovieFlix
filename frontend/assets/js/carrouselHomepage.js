const data_fetch_homepage = async () => {
    const data_homepage = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&sort_by=popularity.desc");
    return data_homepage.json();
}

let movies = [];
const image_path = "https://image.tmdb.org/t/p/original";

let get_data_movies = (arr) => {
    return arr.results.forEach(elem => {
        movies.push(elem.poster_path);
    });
};

data_fetch_homepage()
    .then(res => {
        get_data_movies(res)

        let slider = document.getElementById("slider");
        let g_chevron = document.getElementById("g-chevron");
        let d_chevron = document.getElementById("d-chevron");

        let slider_size = movies.length;
        let position = 0;
        slider.style.width=(slider_size*245)+"px";

        for(i=0; i<slider_size; i++) {
            let img_poster = document.createElement('img');
            img_poster.src = image_path+movies[i];
            img_poster.alt = "Poster du film";
            img_poster.style.width=245+"px";
            img_poster.style.height= 300+"px";
            img_poster.className="photo";
            slider.appendChild(img_poster);
        }

        d_chevron.onclick = () => {
            if(position > -19) {
                position--;
                slider.style.transform="translate("+position*245+"px)";
                slider.style.transition="all ease 0.3s"
            }
        }

        g_chevron.onclick = () => {
            if(position < 0) {
                position++;
                slider.style.transform="translate("+position*245+"px)";
                slider.style.transition="all ease 0.3s"
            }
        }
    })

