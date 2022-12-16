




/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */

let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos ) {
    document.getElementById("navbar").style.top = "0";
    document.getElementById("nav-bar-mobile").style.top = "0";
    
  } else if (currentScrollPos<"100"){
    document.getElementById("navbar").style.top = "0";
    document.getElementById("nav-bar-mobile").style.top = "0";
  }
  else {
    document.getElementById("navbar").style.top = "-160px";
    document.getElementById("nav-bar-mobile").style.top = "-160px";
    
  }
  prevScrollpos = currentScrollPos;
}
    

let profile = document.getElementById("profile");
let buttonLogout = document.getElementById("button-logout");
let blockProfile = document.getElementById("block-profile");

profile.addEventListener('mouseenter',function(){
  buttonLogout.style.display="flex";    
})

blockProfile.addEventListener('mouseleave',function(){
  let buttonLogOut = document.getElementById("button-logout");
  
  buttonLogOut.style.display="none";    
})
