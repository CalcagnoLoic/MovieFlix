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
        image_drame.push(element.posterpath);
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
        console.log(title_drame);
    })