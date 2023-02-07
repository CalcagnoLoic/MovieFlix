/***
 * =============================================
 * Connexion à l'API
 * =============================================
 */
const data_fetch_film_policier = async () => {
    const data_policier = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=80", {cache: "no-cache"});
    return data_policier.json();
}

/**
 * ======================================================
 * Création de tableaux contenant les infos de l'API
 * ======================================================
 */
let title_policier = [];
let synopsis_policier = [];
let rate_policier = [];
let image_policier = [];
const image_path_policier = "https://image.tmdb.org/t/p/original";

let get_data_policier = (arr) => {
    return arr.results.forEach(element => {
        title_policier.push(element.title);
        synopsis_policier.push(element.overview);
        rate_policier.push(element.vote_average);
        image_policier.push(element.poster_path);
    });
}

/**
 * =========================
 * Promesse de l'API
 * =========================
 */

data_fetch_film_policier()
    .then(res => {
        get_data_policier(res)
        
        /**
         * Manipulation du DOM
         */
        let container_policier = document.getElementById("slider-policier");
        let g_policier = document.getElementById("g-policier");
        let d_policier= document.getElementById("d-policier");

        /**
         * Initialisation du carrousel
         */
        let container_length = title_policier.length;
        let position = 0;
        container_policier.style.width=(container_length*245)+"px";

        /**
         * Création des balises img
         */
        for (let i = 0; i < container_length; i++) {
            let img_policier = document.createElement("img");
            img_policier.src = image_path_policier + image_policier[i];
            img_policier.alt = "Poster du film";
            img_policier.style.width=245+"px";
            img_policier.style.height=281+"px";
            img_policier.className = "photo";
            container_policier.appendChild(img_policier);
        }
        
        /**
         * Comportement des flèches
         */
        let comportementFleche = () => {
            if(position == 0) {
                d_policier.style.visibility="hidden";
            } else {
                d_policier.style.visibility="visible";
            }
            if(position > -19) {
                g_policier.style.visibility="visible";
            } else {
                g_policier.style.visibility="hidden";
            }
        }

        comportementFleche();

        g_policier.onclick = () => {
            if (position > -19) {
                position--;
                container_policier.style.transform="translate("+ position*245 +"px)";
                container_policier.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }

        d_policier.onclick = () => {
            if (position < 0) {
                position++;
                container_policier.style.transform="translate(" + position*245 + "px)";
                container_policier.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }
    })