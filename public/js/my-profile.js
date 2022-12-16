let element = document.getElementsByClassName("slider");
let Summary = document.getElementsByClassName("slider");


function changementauclick(){
    
    for(let i = 0 ; i < Summary.length; i++ )
    Summary[i].addEventListener("click", function(){
        let selectionElement = document.getElementsByClassName("active");
        PreviousSummarySelected = selectionElement.item(0);

       console.log(PreviousSummarySelected);
        
            let summaryActive = Summary[i].classList.contains('active');

            let generaltext = document.getElementsByClassName("test");
            let textactuel = document.getElementById("personnal-infos"+i);
           


        if(summaryActive == true){

            // Style Text changement when is the summary was active
            generaltext[i].classList.remove("hidden");
            
            

        }else{

            for(let i = 0 ; i < generaltext.length; i++ )
            // Style Text changement when is the summary was inactive
            generaltext[i].classList.add("hidden");
            textactuel.classList.remove("hidden");
            
            Summary[i].classList.add("active");
            PreviousSummarySelected.classList.remove("active");
        }
        
    })
    }

let ButtonPersonnalInfo = document.getElementById("ButtonPersonnalInfo");
let infoPersonnal = document.getElementById("infoPersonnal");
let inputPersonnal = document.getElementById("inputPersonnal");


ButtonPersonnalInfo.addEventListener("click",function(){
    infoPersonnal.style.display="none";
    inputPersonnal.style.display="block"
})