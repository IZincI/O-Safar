
let stape = 0 ;
let pictureSlider = document.getElementsByClassName("slider");
let pictureNumber = pictureSlider.length;
let Previous = document.getElementById("slideLeft");
let Next = document.getElementById("slideRight");
let test = '<img id"featured " src="public/imgs/offre/suite.jpeg">';


function changementFeatured(){
    
    let featuredPicture = document.getElementById("bloc-featured");
    
    for(let i = 0 ; i < pictureSlider.length ; i++){
        let active = pictureSlider[i].classList.contains('active');
       
    
        if (active ?? false){
            let imgpath = pictureSlider[i].currentSrc;
            
            featuredPicture.innerHTML = '<img id="featured" src='+ imgpath +'></img>';
        }}
    }


    function deleteActivePicture(){
    for(let i = 0 ; i < pictureNumber ; i++) {
        pictureSlider[i].classList.remove("active");
        
    }
}

Next.addEventListener('click',function() {
    
    stape++;
    if(stape >= pictureNumber){
        stape = 0 ;
    }
    deleteActivePicture();
    pictureSlider[stape].classList.add("active");
    
    changementFeatured();
    
}
)

Previous.addEventListener("click",function() {
    stape--;
    if(stape < 0){
        stape = pictureNumber - 1 ;
        
    }
    deleteActivePicture();
    pictureSlider[stape].classList.add("active");
    changementFeatured();
    
})


    for(let i = 0 ; i < pictureSlider.length ; i++)
    pictureSlider[i].addEventListener("click", function(){
            let active = pictureSlider[i].classList.contains('active');
        if(active ?? true){
                     
        }else{
            news = pictureSlider[i];
            console.log(news);
            for(let i = 0 ; i < pictureSlider.length ; i++){
                pictureSlider[i].classList.remove("active");
            }
            pictureSlider[i].classList.add("active");   
        }
        changementFeatured();
    })
    

 

/* function au click propre */


function changementauclick(){
    
    for(let i = 0 ; i < pictureSlider.length ; i++)
    pictureSlider[i].addEventListener("click", function(){
            let active = pictureSlider[i].classList.contains('active');
        if(active ?? true){
                     console.log("bonjour");
        }else{
            news = pictureSlider[i];
            console.log(news);
            for(let i = 0 ; i < pictureSlider.length ; i++){
                pictureSlider[i].classList.remove("active");
            }
            pictureSlider[i].classList.add("active");
        }
        changementFeatured();
    })
    }





