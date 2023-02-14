const data_fetch_film_aventure = async () => {
    const data_aventure = await fetch("https://api.themoviedb.org/3/discover/movie?api_key="+ api_key +"&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&with_genres=12", {cache: "no-cache"});
    return data_aventure.json();
}

