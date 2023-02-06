/***
 * =============================================
 * Connexion à l'API
 * =============================================
 */

const data_fetch_film_action = async () => {
    const data_action = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=28", {cache: "no-cache"});
    return data_action.json();
}

/**
 * ======================================================
 * Création de tableaux contenant les infos de l'API
 * ======================================================
 */
let title_action = [];
let synopsis_action = [];
let rate_action = [];
let image_action = [];
const image_path_action = "https://image.tmdb.org/t/p/original";

let get_data_action = (arr) => {
    return arr.results.forEach(element => {
        title_action.push(element.title);
        synopsis_action.push(element.overview);
        rate_action.push(element.vote_average);
        image_action.push(element.poster_path);
    });
}

/**
 * =========================
 * Promesse de l'API
 * =========================
 */

data_fetch_film_action()
    .then(res => {
        get_data_action(res)

        console.log(image_action);

        /**
         * Récupération des éléments du DOM
         */
        const slider = document.getElementById("slider-action");
        const left = document.getElementById("g-action");
        const right = document.getElementById("d-action");

        /**
         * Initialisation du carrousel
         */
        let number_of_movies = title_action.length;
        let position = 0;
        slider.style.width = (245*number_of_movies)+"px";

        /**
         * Création des tags images pour le carrousel
         */
        for (let i = 0; i < number_of_movies; i++) {
            img = document.createElement('img')
            img.className = "photo";
            img.src = image_path_action + image_action[i];
            img.alt = "Poster du film";
            img.style.width = "245px";
            img.style.height = "281px";
            slider.appendChild(img);
        }

        /**
         * Comportement des flèches 
         */
        let carrouselFleche = () => {
            if (position == (-number_of_movies+1)) {
                left.style.visibility="hidden";
            } else {
                left.style.visibility="visible";
            }
            if (position==0) {
                right.style.visibility="hidden";
            } else {
                right.style.visibility="visible";
            }
        }

        carrouselFleche();

        left.onclick = () => {
            if (position > -19) {
                position --;
                slider.style.transform="translate("+position*245+"px)";
                slider.style.transition="all 0.3s ease";
            }
            carrouselFleche();
        }

        right.onclick = () => {
            if (position < 0) {
                position ++;
                slider.style.transform="translate("+position*245+"px)";
                slider.style.transition="all 0.3s ease";
            }
            carrouselFleche();
        }
    })