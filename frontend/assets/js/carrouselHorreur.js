/***
 * =============================================
 * Connexion à l'API
 * =============================================
 */
const data_fetch_film_horreur = async () => {
    const data_horreur = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=27", {cache: "no-cache"});
    return data_horreur.json();
}

/**
 * ======================================================
 * Création de tableaux contenant les infos de l'API
 * ======================================================
 */
let title_horreur = [];
let synopsis_horreur = [];
let rate_horreur = [];
let image_horreur = [];
const image_path_horreur = "https://image.tmdb.org/t/p/original";

let get_data_horreur = (arr) => {
    return arr.results.forEach(element => {
        title_horreur.push(element.title);
        synopsis_horreur.push(element.overview);
        rate_horreur.push(element.vote_average);
        image_horreur.push(element.poster_path);
    });
}

/**
 * =========================
 * Promesse de l'API
 * =========================
 */

data_fetch_film_horreur()
    .then(res => {
        get_data_horreur(res)
        
        /**
         * Manipulation du DOM
         */
        let container_horreur = document.getElementById("slider-horreur");
        let g_horreur = document.getElementById("g-horreur");
        let d_horreur= document.getElementById("d-horreur");

        /**
         * Initialisation du carrousel
         */
        let container_length = title_horreur.length;
        let position = 0;
        container_horreur.style.width=(container_length*245)+"px";

        /**
         * Création des balises img
         */
        for (let i = 0; i < container_length; i++) {
            let img_horreur = document.createElement("img");
            img_horreur.src = image_path_horreur + image_horreur[i];
            img_horreur.alt = "Poster du film";
            img_horreur.style.width=245+"px";
            img_horreur.style.height=281+"px";
            img_horreur.className = "photo";
            container_horreur.appendChild(img_horreur);
        }
        
        /**
         * Comportement des flèches
         */
        let comportementFleche = () => {
            if(position == 0) {
                d_horreur.style.visibility="hidden";
            } else {
                d_horreur.style.visibility="visible";
            }
            if(position > -19) {
                g_horreur.style.visibility="visible";
            } else {
                g_horreur.style.visibility="hidden";
            }
        }

        comportementFleche();

        g_horreur.onclick = () => {
            if (position > -19) {
                position--;
                container_horreur.style.transform="translate("+ position*245 +"px)";
                container_horreur.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }

        d_horreur.onclick = () => {
            if (position < 0) {
                position++;
                container_horreur.style.transform="translate(" + position*245 + "px)";
                container_horreur.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }
    })