//dom
let nombre = document.getElementById('tit');
let nombre2 = document.getElementById('email')
console.log(nombre)
console.log(nombre2)


let enla = document.querySelector('a');
let formu = document.querySelector('form')
let textos = document.querySelectorAll('.text-success')
let botones = document.querySelector('#botonClick')
let enlaceFB = document.querySelector('a[href*="facebook"]')
let enlacesSeguros = document.querySelectorAll('a[href^="https"]')

console.log(enla)
console.log(formu)
console.log(textos)
console.log(botones)


const titulo = document.getElementById('tit');
const tituloPagina = document.getElementById('tituloPag');




/*CREAR UN HIJO */
let parrafo = document.getElementById('cajaTexto')
/* HIJOS DEL ELEMENTO*/
console.log(parrafo.childNodes)
console.log(parrafo.children[4].innerText = 'MODIFICO ESTE PARRAFO')








let emailInput = document.getElementById('email');
let nombreInput = document.getElementById('nombre');
let botonEnviar = document.getElementById('botonEnviar');

console.log(emailInput)
console.log(nombreInput)
console.log(botonEnviar)

botonEnviar.addEventListener('click', function() {
    let emailValue = emailInput.value;
    let nombreValue = nombreInput.value;
    console.log('Email:', emailValue);
    console.log('Nombre:', nombreValue);
  });




let boton = document.getElementById('botonClick');

boton.style.backgroundColor = 'blue';
boton.style.color = 'white';


let parrafo1 = document.querySelector('#parrafo1');

parrafo1.style.fontWeight = 'bold';
parrafo1.style.fontSize = '20px';


let miparrafo = document.getElementById('miParrafo');
miparrafo.style.color = 'red';
console.log(miparrafo);


var select = document.getElementById("miSelect");
select.selectedIndex = 1;
select.disabled = true; 

console.log(select);
console.log(miSelect);


var parrafoElement = document.getElementById("parrafo2");
parrafoElement.style.backgroundColor = "yellow";

console.log(parrafo2);









