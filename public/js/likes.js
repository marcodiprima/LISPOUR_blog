
function prendiLike(event){
  const butt = event.currentTarget;
  console.log(butt);

  const tit = butt.querySelector("h1").textContent;
  console.log(tit)
  const image = butt.querySelector("img").src;
  console.log(image);

  const ht = butt.querySelector("#cf");
  ht.classList.remove("like");
  ht.classList.add("liked");

  event.currentTarget.removeEventListener("click", prendiLike);
  event.currentTarget.addEventListener("click", removeLike);  

  fetch(HOME_ROUTE +"likes/add/?&titolo="+tit+"&image=" + image);

}

function removeLike(event){
  const butt = event.currentTarget;
  console.log(butt);

  const tit=butt.querySelector("h1").textContent;
  console.log('titolo eliminato: ' + tit)

  const ht = butt.querySelector("#cf");
  ht.classList.remove("liked");
  ht.classList.add("like");

  event.currentTarget.removeEventListener("click", removeLike);
  event.currentTarget.addEventListener("click", prendiLike); 

  fetch(HOME_ROUTE+"likes/remove/"+encodeURIComponent(tit));

}


const plike = document.querySelectorAll(".post_grid");
for(let i of plike){
  i.addEventListener('click', prendiLike);
}
