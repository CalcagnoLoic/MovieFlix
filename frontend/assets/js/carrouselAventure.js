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
        image_aventure.push(element.posterpath);
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
        
    })