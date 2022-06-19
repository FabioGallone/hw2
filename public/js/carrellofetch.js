
function onJSON(json){
    let prezzototale=0;
    const session=document.querySelector(".flex_container div");

    const h2_1=document.createElement("h2");
    h2_1.textContent="CARRELLO";
    carrello.appendChild(h2_1);
    
    for(let maglia of json){
  
        const div= document.createElement("div");
        div.classList.add("contenuto");
        const h1= document.createElement("h1");
        const immagine= document.createElement("img");
        const flex= document.createElement("div");
        flex.classList.add("flex");

        const divinformazioni= document.createElement("div");
       

        const h2= document.createElement("h2");
        const h3= document.createElement("h3");
        const a = document.createElement("a");
        const a1=document.createElement("a");

        a1.classList.add("saveforlater");

        h1.textContent=maglia.nome;
        immagine.src=maglia.immagine;
        h2.textContent=maglia.descrizione;
        h3.textContent="€" + maglia.prezzo;

        a.textContent= "Rimuovi dal carrello";
        a1.textContent="Salva per dopo";
        
        a.dataset.id_maglia = maglia.id_prodotto;
        a1.dataset.id_maglia=maglia.id_prodotto;
        
       a.addEventListener("click", eliminaEvento);
       if(session.dataset.sessionId){
       a1.addEventListener("click", SalvaPerdopo);
       a1.addEventListener("click", eliminaEvento);
       }
       else{
        a1.href="login";
       }
  

     
        prezzototale +=+ maglia.prezzo; 


        carrello= document.getElementById("carrello");

        carrello.appendChild(div);
        div.appendChild(h1);
        div.appendChild(flex);
        flex.appendChild(immagine);

        flex.appendChild(divinformazioni);
        divinformazioni.appendChild(h2);
        divinformazioni.appendChild(h3);
        divinformazioni.appendChild(a);
        divinformazioni.appendChild(a1);




        
   


        
    }

    


    const div2= document.createElement("div");
    div2.classList.add("prezzo");
    const h4 = document.createElement("h4");
    h4.textContent= "TOTALE PROVVISORIO: €" + prezzototale;

    carrello.appendChild(div2);
    div2.appendChild(h4);


    const ordine= document.getElementById("ordine");
    const h4_1 = document.createElement("h4");
    h4_1.textContent= "TOTALE PROVVISORIO: €" + prezzototale;


    const form= document.createElement("form");
    form.method="POST";
    const label= document.createElement("label");
    label.placeholder="&nbsp;";

    label.classList.add("button");

    const input= document.createElement("input");
    input.type="submit";
    input.name="completaordine";
    input.value="ORDINA ORA";   

    

    if(prezzototale!=0){
    ordine.appendChild(h4_1);

    ordine.appendChild(form);
    form.appendChild(csrf);
    form.appendChild(label);
    

    label.appendChild(input);
    }




}







function SalvaPerdopo(event){ 
   id_maglia=event.currentTarget.dataset.id_maglia;
    fetch("/saveforlater/" + id_maglia).then(EliminaRimasuglio).then(SalvaPerDopoPermanenti);
 
}


function SalvaPerDopoPermanenti(){
    fetch("/saveforlater").then(onResponse).then(CreaElementiPerDopo);
}




function CreaElementiPerDopo(json){


    for(let maglia of json){
    const id=document.getElementById("ordina_ora");
 

        const div= document.createElement("div");
        div.classList.add("ordina");  
        const immagine= document.createElement("img");
        const h1= document.createElement("h1");

        const a=document.createElement("a");
        const a1=document.createElement("a");
        a.textContent="Rimuovi";
        a1.textContent="Sposta nel carrello";

      
        a.dataset.id_maglia = maglia.id_prodotto;
        a.addEventListener("click", EliminaSalvatoPerDopo);

        a1.dataset.id_maglia= maglia.id_prodotto;
        a1.addEventListener("click", SpostaNelCarrello);

        h1.textContent=maglia.nome_maglia;
        immagine.src=maglia.immagine_maglia;

        id.appendChild(div);
        div.appendChild(immagine);
        div.appendChild(h1);
        div.appendChild(a);
        div.appendChild(a1);
    }
        
}


function SpostaNelCarrello(event){
    const id_maglia = event.currentTarget.dataset.id_maglia;
    EliminaSalvatoPerDopo(event);
    fetch("/createcookie/" + id_maglia).then(EliminaRimasuglio).then(aggiungiMaglietta).then(SalvaPerDopoPermanenti);
}


function EliminaSalvatoPerDopo(event){


    const id_maglia = event.currentTarget.dataset.id_maglia;

    fetch("/saveforlater/delete/" + id_maglia).then(EliminaRimasuglio).then(SalvaPerDopoPermanenti).then(aggiungiMaglietta);
}




function eliminaEvento(event)
{

    const id_maglia = event.currentTarget.dataset.id_maglia;
    
    // Elimina l'evento
    fetch("/cookie/delete/" + id_maglia).then(EliminaRimasuglio).then(aggiungiMaglietta);


    // Previeni il click sul link
    event.preventDefault();

}



function onResponse(response) {
    console.log('Risposta ricevuta');


    return response.json();
  }
  

function EliminaRimasuglio(){
    
    //let carrello = document.querySelectorAll("div.contenuto");
    let ordina_ora=document.getElementById("ordina_ora");
    let carrello= document.getElementById("carrello");
    let ordine= document.getElementById("ordine");

    //let h4= document.querySelectorAll("h4");

   // carrello.innerHTML= "";
   ordina_ora.innerHTML="";
    carrello.innerHTML="";
    ordine.innerHTML="";


    //h4.innerHTML="";
}




function aggiungiMaglietta(){

    fetch("/cookie_get").then(onResponse).then(onJSON);
    
}


const csrf= document.getElementById("csrf");
aggiungiMaglietta();
SalvaPerDopoPermanenti();