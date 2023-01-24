let images = [ "public/imgs/SliderHeaderImgs/HomeBackground.png","public/imgs/SliderHeaderImgs/img-01.jpg","public/imgs/SliderHeaderImgs/img-02.jpg" ];


// On définit l'élément HTML qui va contenir notre diaporama
var slideshowContainer = document.getElementById("slideshow");

// On définit un compteur pour connaître l'image courante
var compteur = 0;

// On définit une fonction pour afficher l'image suivante avec un effet de transition de dégradé
function nextImage() {
  // On incrémente notre compteur
  compteur++;
  // Si on est à la dernière image, on revient à la première
  if (compteur >= images.length) {
    compteur = 0;
  }
  // On met à jour l'image courante dans notre HTML
  var newImage = document.createElement("img");
  newImage.src = images[compteur];

  
  
  setTimeout(function(){
    // On retire l'image précédente
    slideshowContainer.innerHTML = "";
    // On retire la class pour l'effet de dégradé
 
    
    // On ajoute la nouvelle image
    slideshowContainer.appendChild(newImage);
    
  }, 1000);
}

// On appelle notre fonction pour afficher la première image
nextImage();


// On définit un interval pour que notre diaporama avance tout seul toutes les 3 secondes
setInterval(nextImage, 3000);





// function nextSlide() {
//     images[currentIndex].src = imagesArray[currentIndex].src;
//     console.log(images);
//     images[currentIndex].classList.add('fade-out');
//     setTimeout(function(){ images[currentIndex].classList.remove('fade-out') }, 500);
//     currentIndex = (currentIndex + 1) % imagesArray.length;
//   }


    
//   setInterval(nextSlide, 30000);

   

    