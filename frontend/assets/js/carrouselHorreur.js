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
        image_horreur.push(element.posterpath);
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
        console.log(title_horreur);
    })