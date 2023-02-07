/***
 * =============================================
 * Connexion à l'API
 * =============================================
 */
const data_fetch_film_aventure = async () => {
    const data_aventure = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=12", {cache: "no-cache"});
    return data_aventure.json();
}

/**
 * ======================================================
 * Création de tableaux contenant les infos de l'API
 * ======================================================
 */
let title_aventure = [];
let synopsis_aventure = [];
let rate_aventure = [];
let image_aventure = [];
const image_path_aventure = "https://image.tmdb.org/t/p/original";

let get_data_aventure = (arr) => {
    return arr.results.forEach(element => {
        title_aventure.push(element.title);
        synopsis_aventure.push(element.overview);
        rate_aventure.push(element.vote_average);
        image_aventure.push(element.poster_path);
    });
}

/**
 * =========================
 * Promesse de l'API
 * =========================
 */

data_fetch_film_aventure()
    .then(res => {
        get_data_aventure(res)
        
        /**
         * Manipulation du DOM
         */
        let container_aventure = document.getElementById("slider-aventure");
        let g_aventure = document.getElementById("g-aventure");
        let d_aventure = document.getElementById("d-aventure");

        /**
         * Initialisation du carrousel
         */
        let container_length = title_aventure.length;
        let position = 0;
        container_aventure.style.width=(container_length*245)+"px";

        /**
         * Création des balises img
         */
        for (let i = 0; i < container_length; i++) {
            let img_aventure = document.createElement("img");
            img_aventure.src = image_path_aventure + image_aventure[i];
            img_aventure.alt = "Poster du film";
            img_aventure.style.width=245+"px";
            img_aventure.style.height=281+"px";
            img_aventure.className = "photo";
            container_aventure.appendChild(img_aventure);
        }
        
        /**
         * Comportement des flèches
         */
        let comportementFleche = () => {
            if(position == 0) {
                d_aventure.style.visibility="hidden";
            } else {
                d_aventure.style.visibility="visible";
            }
            if(position > -19) {
                g_aventure.style.visibility="visible";
            } else {
                g_aventure.style.visibility="hidden";
            }
        }

        comportementFleche();

        g_aventure.onclick = () => {
            if (position > -19) {
                position--;
                container_aventure.style.transform="translate("+ position*245 +"px)";
                container_aventure.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }

        d_aventure.onclick = () => {
            if (position < 0) {
                position++;
                container_aventure.style.transform="translate(" + position*245 + "px)";
                container_aventure.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }
    })