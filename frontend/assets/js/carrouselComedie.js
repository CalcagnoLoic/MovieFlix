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
        image_comedie.push(element.posterpath);
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
        console.log(title_comedie);
    })