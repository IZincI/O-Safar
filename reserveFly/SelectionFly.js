let optionButton = document.getElementsByClassName("button-option");
let inputCheck = document.getElementsByClassName("input-check");
let cards = document.querySelectorAll(".card-option");

for(let i = 0 ; i < optionButton.length ; i++)
optionButton[i].addEventListener("click",function(){
    for(let i = 0 ; i<cards.length;i++);
    let container = document.getElementById("img-card"+i);
    let radio = document.getElementById("check-"+i);
    
for(let i = 0 ; i < inputCheck.length ; i++)

    if (inputCheck[i] === true) { 
       
    }else{
        radio.checked = true;
        cards[i].classList.remove("background-choice");
        container.classList.add("background-choice");
    }
})
            



  
// choice number Bagages 

let optionNumber1 = document.getElementById("option1");
let optionNumber2 = document.getElementById("option2");
let containerOption1 = document.getElementById("optionN1")
let containerOption2 = document.getElementById("optionN2")
let input = document.getElementById

optionNumber1.addEventListener("click",function(){
    containerOption1.classList.add("background-choice");
    containerOption2.classList.remove("background-choice");
    optionNumber2.checked=false
})

optionNumber2.addEventListener("click",function(){
    containerOption1.classList.remove("background-choice");
    containerOption2.classList.add("background-choice");
    optionNumber1.checked=false
})

// additional bagage count


let inputNbrValise= document.getElementById("compteurNbrValise");

let resultat = inputNbrValise.value;

console.log(resultat);
Number(resultat);
parseInt(resultat);





const add = document.getElementById("add");
const sub = document.getElementById("sub");

if (add.addEventListener("click",function () {
    
    if(resultat>=0 && resultat<3){
        resultat++;
        inputNbrValise.value= resultat;
    }
}));

if (sub.addEventListener("click",function () {
    if(resultat>0 && resultat<=3){
        resultat--;
        inputNbrValise.value= resultat;
      }
}));




let buttonAssuranceOption = document.getElementsByClassName("button-option-assurance");
let assuranceCard = document.querySelectorAll(".card-assurance");
let inputAssuranceCheck = document.getElementsByClassName("input-assurance-check");

for(let a = 0 ; a < buttonAssuranceOption.length ; a++)

buttonAssuranceOption[a].addEventListener("click",function(){

    for(let i = 0 ; i<assuranceCard.length;i++){
        let inputAssuranceSelected = document.getElementById("check-assurance-"+a); 
        assuranceCard[i].classList.remove('background-choice');
    if (inputAssuranceSelected.checked == true) {
        inputAssuranceSelected.checked = false ;
        assuranceCard[a].classList.remove('background-choice');
    }else{
        inputAssuranceSelected.checked = true ;
        assuranceCard[a].classList.add('background-choice');
    }}
})

