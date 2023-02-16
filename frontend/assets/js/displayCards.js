let movie_title = [];
let synopsis_movie = [];
let vote_average = [];
let poster = [];
let date_movies = [];
const image_path_docu = "https://image.tmdb.org/t/p/original";

let display_movies_infos = (arr) => {
    return arr.results.forEach(elem => {
        movie_title.push(elem.title);
        synopsis_movie.push(elem.overview);
        vote_average.push(elem.vote_average);
        poster.push(elem.poster_path);
        date_movies.push(elem.release_date);
    })
};

data_fetch_film()
    .then(res => {
        display_movies_infos(res);

        let cards = document.querySelector('.movie-container');
        let number_of_movies = movie_title.length;

        for(let i = 0; i < number_of_movies; i++) {
            let container = document.createElement('div');
            container.className = "container-cards";
            container.style.marginRight=25+"px";
            container.style.marginBottom=25+"px";
            container.style.width=245+"px";
            
            let cards_movies = document.createElement('img');
            cards_movies.src = image_path_docu + poster[i];
            cards_movies.className = "poster-movies";
            cards_movies.alt = "Film";
            cards_movies.style.width=245 + "px";

            let cards_infos = document.createElement('div');
            cards_infos.style.backgroundColor="white";
            cards_infos.style.padding=5+"px";

            let title = document.createElement('p');
            title.innerHTML = movie_title[i];
            title.className = "title-cards";

            let vote = document.createElement('p');
            vote.innerHTML = vote_average[i];
            vote.className = "vote-cards";

            let date = document.createElement('p');
            date.innerHTML = date_movies[i];
            date.className = "date-cards";

            let synopsis = document.createElement('button');
            synopsis.innerHTML = "Plus d'infos..";
            synopsis.className = "btn-info";

            synopsis.onclick = () => {
                if (synopsis_movie[i] === ""){
                    alert("Synopsis à venir...")
                } else {
                    alert(synopsis_movie[i]);
                }
                
            }

            cards_infos.appendChild(title);
            cards_infos.appendChild(vote);
            cards_infos.appendChild(date);
            cards_infos.appendChild(synopsis);
            container.appendChild(cards_movies);
            container.appendChild(cards_infos);
            cards.appendChild(container);
        }
    })