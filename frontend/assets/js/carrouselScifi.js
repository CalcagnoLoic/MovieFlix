/***
 * =============================================
 * Connexion à l'API
 * =============================================
 */
const data_fetch_film_scifi = async () => {
    const data_scifi = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=878", {cache: "no-cache"});
    return data_scifi.json();
}

/**
 * ======================================================
 * Création de tableaux contenant les infos de l'API
 * ======================================================
 */
let title_scifi = [];
let synopsis_scifi = [];
let rate_scifi = [];
let image_scifi = [];
const image_path_scifi = "https://image.tmdb.org/t/p/original";

let get_data_scifi = (arr) => {
    return arr.results.forEach(element => {
        title_scifi.push(element.title);
        synopsis_scifi.push(element.overview);
        rate_scifi.push(element.vote_average);
        image_scifi.push(element.poster_path);
    });
}

/**
 * =========================
 * Promesse de l'API
 * =========================
 */

data_fetch_film_scifi()
    .then(res => {
        get_data_scifi(res)
        
        /**
         * Manipulation du DOM
         */
        let container_scifi = document.getElementById("slider-scifi");
        let g_scifi = document.getElementById("g-scifi");
        let d_scifi= document.getElementById("d-scifi");

        /**
         * Initialisation du carrousel
         */
        let container_length = title_scifi.length;
        let position = 0;
        container_scifi.style.width=(container_length*245)+"px";

        /**
         * Création des balises img
         */
        for (let i = 0; i < container_length; i++) {
            let img_scifi = document.createElement("img");
            img_scifi.src = image_path_scifi + image_scifi[i];
            img_scifi.alt = "Poster du film";
            img_scifi.style.width=245+"px";
            img_scifi.style.height=281+"px";
            img_scifi.className = "photo";
            container_scifi.appendChild(img_scifi);
        }
        
        /**
         * Comportement des flèches
         */
        let comportementFleche = () => {
            if(position == 0) {
                d_scifi.style.visibility="hidden";
            } else {
                d_scifi.style.visibility="visible";
            }
            if(position > -19) {
                g_scifi.style.visibility="visible";
            } else {
                g_scifi.style.visibility="hidden";
            }
        }

        comportementFleche();

        g_scifi.onclick = () => {
            if (position > -19) {
                position--;
                container_scifi.style.transform="translate("+ position*245 +"px)";
                container_scifi.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }

        d_scifi.onclick = () => {
            if (position < 0) {
                position++;
                container_scifi.style.transform="translate(" + position*245 + "px)";
                container_scifi.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }
    })