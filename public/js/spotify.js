function clickNews(event){
    event.preventDefault();

    const text = document.querySelector("#testo");
    const encodedText = encodeURIComponent(text.value);
    console.log('Eseguo ricerca: ' + encodedText);

    fetch(API_ROUTE+"spotify/searchSpotify/"+encodedText).then(onResponse).then(jsonNews);
}
function onResponse(response) {
    console.log(response);
    return response.json();
}

function jsonNews(json){
    console.log('json' + json);
    const risultati = json.tracks.items;
    console.log(risultati);
    const libreria = document.querySelector('#contenitore')
    libreria.innerHTML = '';

    let num_res = risultati.length
    if(num_res>18) num_res=18

    for(let i=0;i<num_res;i++){
        const results = json.tracks.items[i];
        console.log(results);
        const titolo = results.name;
        const sel_img = results.album.images[0].url;
        const contenitore = document.createElement('div');
        contenitore.classList.add('visualizza');
        const img = document.createElement('img');
        img.src = sel_img;
        const caption = document.createElement('span');
        caption.classList.add('.spantitle');
        caption.textContent = titolo;
  
        contenitore.appendChild(img);
        contenitore.appendChild(caption);
        libreria.appendChild(contenitore);
    }

}

const form = document.querySelector("#cerca_news");
form.addEventListener('submit', clickNews);