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
        image_fantastique.push(element.posterpath);
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
        console.log(title_fantastique);
    })