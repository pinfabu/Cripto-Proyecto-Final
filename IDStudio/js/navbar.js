var menu=document.getElementById("menu-toggle");
var hamburguer=document.getElementById("hamburguer");
var menuOpen=false

hamburguer.addEventListener("click",function(event){  
  menuOpen=!menuOpen;
  if(menuOpen){
    menu.style.display="block";
  }else{
    menu.style.display="none";
  } 
  
});


