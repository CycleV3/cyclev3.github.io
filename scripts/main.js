// 	Commentaire 1 ligne

/* 	Commentaire 
	plusieurs lignes */

/* let MonTitre = document.querySelector('h1');
MonTitre.textContent = 'Hello World !'; */

// Changer l'image en cliquant dessus.
var myImage = document.querySelector('img');

myImage.onclick = function() {
    let mySrc = myImage.getAttribute('src');
    if (mySrc === 'images/velo-enfants1.png') {
      myImage.setAttribute('src', 'images/velo-course1.png');
    } else {
      myImage.setAttribute('src', 'images/velo-enfants1.png');
    }
}

// Personnaliser le titre d'accueil avec bouton mon compte.
var myButton = document.querySelector('button');
var myHeading = document.querySelector('h1');

function setUserName() {
  var myName = prompt('Entrez votre login');
  localStorage.setItem('name', myName);
  myHeading.innerHTML = 'Bienvenue ' + myName;
}

if(!localStorage.getItem('name')) {
  setUserName();
} else {
  var storedName = localStorage.getItem('name');
  myHeading.innerHTML = 'Bienvenue ' + storedName;
}

myButton.onclick = function() {
  setUserName();
}





