
let MainColor =  "#FFA500";
let SecondaryColor = "#003170";
let ThirdColor =  "#E8810C";
let TextColor = "#FFFFFF";
let TextColor2 = "#000000";
let BackgroundColor = "#252525";


let cards = document.querySelectorAll(".card-style");

for(let i = 0 ; i<cards.length;i++){
cards[i].addEventListener("mouseenter",(e) => {
	
	let image = document.getElementById("img-card"+i);
	image.classList.add("picture");
	
	let text = cards[i].getElementsByClassName("container-text-card").item(0);
	text.classList.add("text-style");
	
})
}

for(let i = 0 ; i<cards.length;i++){
cards[i].addEventListener("mouseleave",() => {
	
	let image = document.getElementById("img-card"+i);
	
	image.classList.remove("picture");

	let text = cards[i].getElementsByClassName("container-text-card").item(0);
	text.classList.remove("text-style");
})
}






























/*

let cards = document.querySelectorAll(".cardanim");
for(let i = 0 ; i<cards.length;i++){
	
	cards[i].addEventListener("mouseover",function() {
		console.log("card"+i);
		
		document.getElementById("img-card").style.filter = "grayscale(0%)";
		document.getElementById("img-card").style.height = "250px";
		document.getElementById("text").style.backgroundColor = MainColor;
		 });
	}

	let outcards = document.querySelectorAll(".cardanim");
for(let i = 0 ; i<outcards.length;i++){
	
	outcards[i].addEventListener("mouseout",function() {
		console.log("card"+i);
		
		document.getElementById("img-card").style.filter = "grayscale(100%)";
		document.getElementById("img-card").style.height = "350px";
		document.getElementById("text").style.backgroundColor = SecondaryColor;
		 });
	}

*/
	
/*
 document.getElementById("card").addEventListener("mouseover", changeCardOver);
 document.getElementById("card").addEventListener("mouseout", backChangeCardOver);


function changeCardOver() {
	// document.getElementById("text").style.color = TextColor2;
  document.getElementById("img-card").style.filter = "grayscale(0%)";
  document.getElementById("img-card").style.height = "250px";
  document.getElementById("text").style.backgroundColor = MainColor;
}

function backChangeCardOver() {
	
	// document.getElementById("text").style.color = TextColor;
  document.getElementById("img-card").style.filter = "grayscale(100%)"
  document.getElementById("text").style.backgroundColor = SecondaryColor;
  document.getElementById("img-card").style.height = "350px"; 
}







/*
let cards = document.querySelectorAll(".cardanim");
for(let i = 0 ; i<cards.length;i++){
	cards[i].addEventListener("mouseover",function() {

		console.log("card0"+i);
		
	 });
	}




























/*

function bgChange(e) {
	var rndCol = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';
	e.target.style.height = "350px";
	console.log(e);
  }
  
  btn.addEventListener('click', bgChange);

var divs = document.querySelectorAll('div');

for (var i = 0; i < divs.length; i++) {
  divs[i].onclick = function(e) {
    e.target.style.backgroundColor = bgChange();
  }
}

/*

const card = document.querySelector(".card-style");

console.log(card);

const test = document.getElementsByClassName("card-style");

if (test.onmouseover="true"){
	console.log="1";
}

if(document.querySelectorAll("card-style").onmouseover){
	console.log("oui");
}








/*
let cardStyle = document.querySelectorAll("card-style");


cardStyle.click(function(event)
{
 //Modifie l'identifiant de l'élément sur lequel l'internaute a cliqué
 $(event.target).attr(id, toto);
 //Modifie l'identifiant de l'élément auquel la fonction est liée
 $(this).attr(id, toto);
});
/*
function change(){
	var paras = document.getElementsByClassName("text-card");
	for(i=0;i<paras.length;i++){
		paras[i].style.color="purple";
	}
}
*/
/*
var cardStyle = document.querySelectorAll('.cardBtn');
var cardDetails = document.querySelectorAll(".card-details");

window.addEventListener('load', () => {
  cardStyle.forEach(cardStyle => {
    cardStyle.addEventListener('click', e => {
      e.target.closest('.card').querySelector('.card-body').classList.toggle('card-open');
    });
  });
});*/













/*
var elements = document.getElementsByClassName('text-card'); // get all elements
	for(var i = 0; i < elements.length; i++){
		elements[i].style.color = TextColor2;
    */

/*
function changeCardOver() {
	var elements = document.getElementsByClassName('text-card'); // get all elements
	for(var i = 0; i < elements.length; i++){
		elements[i].style.color = TextColor2;
	}
  var backcolor = document.getElementsByClassName('container-text-card'); // get all elements
	for(var i = 0; i < backcolor.length; i++){
		backcolor[i].style.backgroundColor = MainColor;
	}

  
  document.getElementById("img-card").style.filter = "grayscale(0%)";
  document.getElementById("img-card").style.height = "250px";
}

function backChangeCardOver() {
	var text = document.getElementsByClassName('text-card'); // get all elements
	for(var i = 0; i < text.length; i++){
		text[i].style.color = TextColor;
	}
  document.getElementById("img-card").style.filter = "grayscale(100%)"
  document.getElementById("text").style.backgroundColor = SecondaryColor;
  document.getElementById("img-card").style.height = "350px"; 
}
*/



