/***
 * =============================================
 * Connexion à l'API
 * =============================================
 */
const data_fetch_film_thriller = async () => {
    const data_thriller = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=53", {cache: "no-cache"});
    return data_thriller.json();
}

/**
 * ======================================================
 * Création de tableaux contenant les infos de l'API
 * ======================================================
 */
let title_thriller = [];
let synopsis_thriller = [];
let rate_thriller = [];
let image_thriller = [];
const image_path_thriller = "https://image.tmdb.org/t/p/original";

let get_data_thriller = (arr) => {
    return arr.results.forEach(element => {
        title_thriller.push(element.title);
        synopsis_thriller.push(element.overview);
        rate_thriller.push(element.vote_average);
        image_thriller.push(element.poster_path);
    });
}

/**
 * =========================
 * Promesse de l'API
 * =========================
 */

data_fetch_film_thriller()
    .then(res => {
        get_data_thriller(res)
        
        /**
         * Manipulation du DOM
         */
        let container_thriller = document.getElementById("slider-thriller");
        let g_thriller = document.getElementById("g-thriller");
        let d_thriller= document.getElementById("d-thriller");

        /**
         * Initialisation du carrousel
         */
        let container_length = title_thriller.length;
        let position = 0;
        container_thriller.style.width=(container_length*245)+"px";

        /**
         * Création des balises img
         */
        for (let i = 0; i < container_length; i++) {
            let img_thriller = document.createElement("img");
            img_thriller.src = image_path_thriller + image_thriller[i];
            img_thriller.alt = "Poster du film";
            img_thriller.style.width=245+"px";
            img_thriller.style.height=281+"px";
            img_thriller.className = "photo";
            container_thriller.appendChild(img_thriller);
        }
        
        /**
         * Comportement des flèches
         */
        let comportementFleche = () => {
            if(position == 0) {
                d_thriller.style.visibility="hidden";
            } else {
                d_thriller.style.visibility="visible";
            }
            if(position > -19) {
                g_thriller.style.visibility="visible";
            } else {
                g_thriller.style.visibility="hidden";
            }
        }

        comportementFleche();

        g_thriller.onclick = () => {
            if (position > -19) {
                position--;
                container_thriller.style.transform="translate("+ position*245 +"px)";
                container_thriller.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }

        d_thriller.onclick = () => {
            if (position < 0) {
                position++;
                container_thriller.style.transform="translate(" + position*245 + "px)";
                container_thriller.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }
    })