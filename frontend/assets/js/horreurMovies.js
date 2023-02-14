const data_fetch_film_horreur = async () => {
    const data_horreur = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=27", {cache: "no-cache"});
    return data_horreur.json();
}
