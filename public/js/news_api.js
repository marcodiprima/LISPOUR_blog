function clickNews(event){
    event.preventDefault();

    const text = document.querySelector("#testo");
    console.log(text.value);
    const encodedText = encodeURIComponent(text.value);
    console.log('Eseguo ricerca: ' + encodedText)

    fetch(API_ROUTE+"news/news_api/"+text.value).then(onResponse).then(jsonNews);
}
function onResponse(response) {
    console.log(response);
    return response.json();
}

function jsonNews(json){
    const risultati = json.articles;
    const libreria = document.querySelector('#contenitore')
    libreria.innerHTML = '';

    let num_res = risultati.length
    if(num_res>12) num_res=12
    for(let i=0;i<num_res;i++){
        const articoli =risultati[i];
        const contenitore = document.createElement('div');
        const autore = articoli.author;
        const titolo = articoli.title;
        const log = articoli.content;
        const selected_img = articoli.urlToImage;

        contenitore.classList.add('visualizza');

        const author1 = document.createElement('h5');
        author1.textContent = autore;
        const argomento = document.createElement('h1');
        argomento.textContent = titolo;
        const descrizione = document.createElement('p');
        descrizione.textContent = log;
        const img = document.createElement('img');
        img.src = selected_img;
  
        contenitore.appendChild(img);
        contenitore.appendChild(argomento);
        contenitore.appendChild(author1);
        contenitore.appendChild(descrizione);
        libreria.appendChild(contenitore);
    }

}

const form = document.querySelector("#cerca_news");
form.addEventListener('submit', clickNews);