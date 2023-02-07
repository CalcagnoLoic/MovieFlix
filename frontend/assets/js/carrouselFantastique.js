/***
 * =============================================
 * Connexion à l'API
 * =============================================
 */
const data_fetch_film_fantastique = async () => {
    const data_fantastique = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=14", {cache: "no-cache"});
    return data_fantastique.json();
}

/**
 * ======================================================
 * Création de tableaux contenant les infos de l'API
 * ======================================================
 */
let title_fantastique = [];
let synopsis_fantastique = [];
let rate_fantastique = [];
let image_fantastique = [];
const image_path_fantastique = "https://image.tmdb.org/t/p/original";

let get_data_fantastique = (arr) => {
    return arr.results.forEach(element => {
        title_fantastique.push(element.title);
        synopsis_fantastique.push(element.overview);
        rate_fantastique.push(element.vote_average);
        image_fantastique.push(element.poster_path);
    });
}

/**
 * =========================
 * Promesse de l'API
 * =========================
 */

data_fetch_film_fantastique()
    .then(res => {
        get_data_fantastique(res)
        
        /**
         * Manipulation du DOM
         */
        let container_fantastique = document.getElementById("slider-fantastique");
        let g_fantastique = document.getElementById("g-fantastique");
        let d_fantastique= document.getElementById("d-fantastique");

        /**
         * Initialisation du carrousel
         */
        let container_length = title_fantastique.length;
        let position = 0;
        container_fantastique.style.width=(container_length*245)+"px";

        /**
         * Création des balises img
         */
        for (let i = 0; i < container_length; i++) {
            let img_fantastique = document.createElement("img");
            img_fantastique.src = image_path_fantastique + image_fantastique[i];
            img_fantastique.alt = "Poster du film";
            img_fantastique.style.width=245+"px";
            img_fantastique.style.height=281+"px";
            img_fantastique.className = "photo";
            container_fantastique.appendChild(img_fantastique);
        }
        
        /**
         * Comportement des flèches
         */
        let comportementFleche = () => {
            if(position == 0) {
                d_fantastique.style.visibility="hidden";
            } else {
                d_fantastique.style.visibility="visible";
            }
            if(position > -19) {
                g_fantastique.style.visibility="visible";
            } else {
                g_fantastique.style.visibility="hidden";
            }
        }

        comportementFleche();

        g_fantastique.onclick = () => {
            if (position > -19) {
                position--;
                container_fantastique.style.transform="translate("+ position*245 +"px)";
                container_fantastique.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }

        d_fantastique.onclick = () => {
            if (position < 0) {
                position++;
                container_fantastique.style.transform="translate(" + position*245 + "px)";
                container_fantastique.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }
    })