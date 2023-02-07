/***
 * =============================================
 * Connexion à l'API
 * =============================================
 */
const data_fetch_film_docu = async () => {
    const data_docu = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=99", {cache: "no-cache"});
    return data_docu.json();
}

/**
 * ======================================================
 * Création de tableaux contenant les infos de l'API
 * ======================================================
 */
let title_docu = [];
let synopsis_docu = [];
let rate_docu = [];
let image_docu = [];
const image_path_docu = "https://image.tmdb.org/t/p/original";

let get_data_docu = (arr) => {
    return arr.results.forEach(element => {
        title_docu.push(element.title);
        synopsis_docu.push(element.overview);
        rate_docu.push(element.vote_average);
        image_docu.push(element.poster_path);
    });
}

/**
 * =========================
 * Promesse de l'API
 * =========================
 */

data_fetch_film_docu()
    .then(res => {
        get_data_docu(res)
        
        /**
         * Manipulation du DOM
         */
        let container_docu = document.getElementById("slider-docu");
        let g_docu = document.getElementById("g-docu");
        let d_docu= document.getElementById("d-docu");

        /**
         * Initialisation du carrousel
         */
        let container_length = title_docu.length;
        let position = 0;
        container_docu.style.width=(container_length*245)+"px";

        /**
         * Création des balises img
         */
        for (let i = 0; i < container_length; i++) {
            let img_docu = document.createElement("img");
            img_docu.src = image_path_docu + image_docu[i];
            img_docu.alt = "Poster du film";
            img_docu.style.width=245+"px";
            img_docu.style.height=281+"px";
            img_docu.className = "photo";
            container_docu.appendChild(img_docu);
        }
        
        /**
         * Comportement des flèches
         */
        let comportementFleche = () => {
            if(position == 0) {
                d_docu.style.visibility="hidden";
            } else {
                d_docu.style.visibility="visible";
            }
            if(position > -19) {
                g_docu.style.visibility="visible";
            } else {
                g_docu.style.visibility="hidden";
            }
        }

        comportementFleche();

        g_docu.onclick = () => {
            if (position > -19) {
                position--;
                container_docu.style.transform="translate("+ position*245 +"px)";
                container_docu.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }

        d_docu.onclick = () => {
            if (position < 0) {
                position++;
                container_docu.style.transform="translate(" + position*245 + "px)";
                container_docu.style.transition="all 0.3s ease";
            }

            comportementFleche();
        }
    })