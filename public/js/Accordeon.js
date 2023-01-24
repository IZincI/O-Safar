let acc = document.getElementsByClassName("accordion");
let arrow = document.getElementsByClassName("arrow");
let element = document.getElementsByClassName("accordion");

for (let i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");
    /* Toggle between hiding and showing the active panel */
    for (i = 0; i < element.length; i++){
      let active = element[i].classList.contains("active");
      
      if (active != false){
        arrow[i].innerHTML = '<iconify-icon icon="akar-icons:chevron-down" ></iconify-icon>';
      }else{
        arrow[i].innerHTML = '<iconify-icon icon="akar-icons:chevron-right"></iconify-icon>';
      }
      }

let panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}











