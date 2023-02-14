const data_fetch_film_mystere = async () => {
    const data_mystere = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=9648", {cache: "no-cache"});
    return data_mystere.json();
}
