/***
 * =============================================
 * Connexion à l'API
 * =============================================
 */
const data_fetch_film_mystere = async () => {
    const data_mystere = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=9648", {cache: "no-cache"});
    return data_mystere.json();
}

/**
 * ======================================================
 * Création de tableaux contenant les infos de l'API
 * ======================================================
 */
let title_mystere = [];
let synopsis_mystere = [];
let rate_mystere = [];
let image_mystere = [];
const image_path_mystere = "https://image.tmdb.org/t/p/original";

let get_data_mystere = (arr) => {
    return arr.results.forEach(element => {
        title_mystere.push(element.title);
        synopsis_mystere.push(element.overview);
        rate_mystere.push(element.vote_average);
        image_mystere.push(element.poster_path);
    });
}

/**
 * =========================
 * Promesse de l'API
 * =========================
 */

data_fetch_film_mystere()
    .then(res => {
        get_data_mystere(res)
        
        /**
         * Manipulation du DOM
         */
        let container_mystere = document.getElementById("slider-mystere");
        let g_mystere = document.getElementById("g-mystere");
        let d_mystere= document.getElementById("d-mystere");

        /**
         * Initialisation du carrousel
         */
        let container_length = title_mystere.length;
        let position = 0;
        container_mystere.style.width=(container_length*245)+"px";

        /**
         * Création des balises img
         */
        for (let i = 0; i < container_length; i++) {
            let img_mystere = document.createElement("img");
            img_mystere.src = image_path_mystere + image_mystere[i];
            img_mystere.alt = "Poster du film";
            img_mystere.style.width=245+"px";
            img_mystere.style.height=281+"px";
            img_mystere.className = "photo";
            container_mystere.appendChild(img_mystere);
        }
        
        /**
         * Comportement des flèches
         */
        let comportementFleche = () => {
            if(position == 0) {
                d_mystere.style.visibility="hidden";
            } else {
                d_mystere.style.visibility="visible";
            }
            if(position > -19) {
                g_mystere.style.visibility="visible";
            } else {
                g_mystere.style.visibility="hidden";
            }
        }

        comportementFleche();

        g_mystere.onclick = () => {
            if (position > -19) {
                position--;
                container_mystere.style.transform="translate("+ position*245 +"px)";
                container_mystere.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }

        d_mystere.onclick = () => {
            if (position < 0) {
                position++;
                container_mystere.style.transform="translate(" + position*245 + "px)";
                container_mystere.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }
    })