function onJson(json) {
  console.log('JSON ricevuto');
 
  const box = document.querySelector('.flex_container');
  box.innerHTML = '';
  doc=json[0];
 
 
const nomepiatto = doc.nome;
const image= doc.image;

const carboidrati= doc.carboidrati;

const kcal= doc.kcal;

const grassi= doc.grassi;

const proteine= doc.proteine;


  const span= document.createElement('span');
  const div= document.createElement('div');
  const img = document.createElement('img');
  const h1 = document.createElement('h1');
  const p = document.createElement('p');
  const p1 = document.createElement('p');
  const p2 = document.createElement('p');
  const p3 = document.createElement('p');


  h1.textContent=nomepiatto + " (su 100g)";
  img.src=image;
  p.textContent=kcal + "kcal";
  p1.textContent=carboidrati+ "g di carboidrati";

  p2.textContent=grassi + "g di grassi";
  p3.textContent=proteine + "g di proteine"
  

  box.classList.add("altezza");
  box.appendChild(img);
  box.append(div);
  div.appendChild(span);
  span.appendChild(h1);
  div.appendChild(p);
  div.appendChild(p1);

  div.appendChild(p2);
  div.appendChild(p3);
 
  

  }


function onResponse(response) {
  console.log('Risposta ricevuta');
  
  return response.json();
}

function search(event)
{

  event.preventDefault();

  const valore= document.querySelector('#food');
  const value_correct= encodeURIComponent(valore.value);
  rest_url = '/alimenti';
  url_completo= rest_url + "/" + value_correct;





  fetch(url_completo).then(onResponse).then(onJson);
}

const form = document.querySelector('form');
form.addEventListener('submit', search);


