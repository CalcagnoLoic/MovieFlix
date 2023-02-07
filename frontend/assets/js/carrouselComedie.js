/***
 * =============================================
 * Connexion à l'API
 * =============================================
 */
const data_fetch_film_comedie = async () => {
    const data_comedie = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=35", {cache: "no-cache"});
    return data_comedie.json();
}

/**
 * ======================================================
 * Création de tableaux contenant les infos de l'API
 * ======================================================
 */
let title_comedie = [];
let synopsis_comedie = [];
let rate_comedie = [];
let image_comedie = [];
const image_path_comedie = "https://image.tmdb.org/t/p/original";

let get_data_comedie = (arr) => {
    return arr.results.forEach(element => {
        title_comedie.push(element.title);
        synopsis_comedie.push(element.overview);
        rate_comedie.push(element.vote_average);
        image_comedie.push(element.poster_path);
    });
}

/**
 * =========================
 * Promesse de l'API
 * =========================
 */

data_fetch_film_comedie()
    .then(res => {
        get_data_comedie(res)
        
        /**
         * Manipulation du DOM
         */
        let container_comedie = document.getElementById("slider-comedie");
        let g_comedie = document.getElementById("g-comedie");
        let d_comedie= document.getElementById("d-comedie");

        /**
         * Initialisation du carrousel
         */
        let container_length = title_comedie.length;
        let position = 0;
        container_comedie.style.width=(container_length*245)+"px";

        /**
         * Création des balises img
         */
        for (let i = 0; i < container_length; i++) {
            let img_comedie = document.createElement("img");
            img_comedie.src = image_path_comedie + image_comedie[i];
            img_comedie.alt = "Poster du film";
            img_comedie.style.width=245+"px";
            img_comedie.style.height=281+"px";
            img_comedie.className = "photo";
            container_comedie.appendChild(img_comedie);
        }
        
        /**
         * Comportement des flèches
         */
        let comportementFleche = () => {
            if(position == 0) {
                d_comedie.style.visibility="hidden";
            } else {
                d_comedie.style.visibility="visible";
            }
            if(position > -19) {
                g_comedie.style.visibility="visible";
            } else {
                g_comedie.style.visibility="hidden";
            }
        }

        comportementFleche();

        g_comedie.onclick = () => {
            if (position > -19) {
                position--;
                container_comedie.style.transform="translate("+ position*245 +"px)";
                container_comedie.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }

        d_comedie.onclick = () => {
            if (position < 0) {
                position++;
                container_comedie.style.transform="translate(" + position*245 + "px)";
                container_comedie.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }
    })