/***
 * =============================================
 * Connexion à l'API
 * =============================================
 */
const data_fetch_film_drame = async () => {
    const data_drame = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=18", {cache: "no-cache"});
    return data_drame.json();
}

/**
 * ======================================================
 * Création de tableaux contenant les infos de l'API
 * ======================================================
 */
let title_drame = [];
let synopsis_drame = [];
let rate_drame = [];
let image_drame = [];
const image_path_drame = "https://image.tmdb.org/t/p/original";

let get_data_drame = (arr) => {
    return arr.results.forEach(element => {
        title_drame.push(element.title);
        synopsis_drame.push(element.overview);
        rate_drame.push(element.vote_average);
        image_drame.push(element.poster_path);
    });
}

/**
 * =========================
 * Promesse de l'API
 * =========================
 */

data_fetch_film_drame()
    .then(res => {
        get_data_drame(res)
        
        /**
         * Manipulation du DOM
         */
        let container_drame = document.getElementById("slider-drame");
        let g_drame = document.getElementById("g-drame");
        let d_drame= document.getElementById("d-drame");

        /**
         * Initialisation du carrousel
         */
        let container_length = title_drame.length;
        let position = 0;
        container_drame.style.width=(container_length*245)+"px";

        /**
         * Création des balises img
         */
        for (let i = 0; i < container_length; i++) {
            let img_drame = document.createElement("img");
            img_drame.src = image_path_drame + image_drame[i];
            img_drame.alt = "Poster du film";
            img_drame.style.width=245+"px";
            img_drame.style.height=281+"px";
            img_drame.className = "photo";
            container_drame.appendChild(img_drame);
        }
        
        /**
         * Comportement des flèches
         */
        let comportementFleche = () => {
            if(position == 0) {
                d_drame.style.visibility="hidden";
            } else {
                d_drame.style.visibility="visible";
            }
            if(position > -19) {
                g_drame.style.visibility="visible";
            } else {
                g_drame.style.visibility="hidden";
            }
        }

        comportementFleche();

        g_drame.onclick = () => {
            if (position > -19) {
                position--;
                container_drame.style.transform="translate("+ position*245 +"px)";
                container_drame.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }

        d_drame.onclick = () => {
            if (position < 0) {
                position++;
                container_drame.style.transform="translate(" + position*245 + "px)";
                container_drame.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }
    })