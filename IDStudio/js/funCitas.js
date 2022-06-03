var currenttab=0;
showTab(currenttab);

function showTab(n) {
    // primero obtengo todos los tab
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // ... ajusta los botones prev y next:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
      console.log("boton mostrado");
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Reservar";
    } else {
      document.getElementById("nextBtn").innerHTML = "Siguiente";
    }
    // ... ajusta el step los circulitos de arriba:
    fixStepIndicator(n);
  }

  function fixStepIndicator(n) {
    //remueve el activo de los steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... añade la clase active a los steps:
    x[n].className += " active";
  }

//funcion para añadir elemento del servicioSelect  a la lista
function addElement(){
    const select=document.getElementById("servicioSelect");
    var lista=document.getElementById("div-lista-servicios");

    var seleccionTxt=select.options[select.selectedIndex].text;//contiene lo que dice en la opcion txt
    var seleccionVal=select.options[select.selectedIndex].value;//contiene el val
    
    if(seleccionVal!="default"){
        console.log(seleccionTxt);
        var nuevoElemento = `<div></div>
        <div class="notification is-success">`+seleccionTxt+`</div>
        <p class="delete-btn" onclick="removeElement(event)">-</p>`;
        lista.innerHTML+=(nuevoElemento);
    }else{
        alert("Añade un servicio válido");
    }
}
//funcion que remueve elemento de lista
function removeElement(event){
    console.log(event.target.previousElementSibling);
    event.target.previousElementSibling.remove();
    event.target.previousElementSibling.remove();
    event.target.remove();
}
//funcion que selecciona el paso siguiente// n es 1 o -1
function siguienteAnterior(n){
  var x = document.getElementsByClassName("tab");
  if(n==1 && !validarPaso())return false;
  x[currenttab].style.display = "none";
  currenttab = currenttab + n;
  if (currenttab >= x.length) {
    //...the form gets submitted:
    
    window.location="./ticket.php/?servicios="+obtenerServicios()+"&horario="+obtenerHorario()+"&nombre="+document.getElementById("nombre").value+"&paterno="+document.getElementById("paterno").value+"&materno="+document.getElementById("materno").value+"&email="+document.getElementById("email").value+"&tel="+document.getElementById("tel").value+"&fecha="+document.getElementById("fechaN").value;
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currenttab);
} 
//funcion que obtiene los nombres de los servicios en texto concatenado
function obtenerServicios(){
    const lista=document.getElementById("div-lista-servicios");
    
    var servicios="";
    for(var i=0;i<lista.childElementCount;i++){
      if(lista.children[i].innerHTML!="" && lista.children[i].innerHTML!="-")
        servicios+=lista.children[i].innerHTML+"-";
    }
    
    return servicios;
}
//obtener horario
function obtenerHorario(){
  var horario="Hora: ";
  horario+=document.getElementById("horarioInput").value+" Fecha: "+document.getElementById("hora").value;
  return horario;
}
//funcion que valida si una etapa esta completa
function validarPaso(){
  var valido=true;
  var advertencia="";
  if(currenttab==0){
    if(document.querySelector("#div-lista-servicios").childElementCount==0){
      advertencia="Debes seleccionar almenos un servicio<br>";
      valido=false;
    }
  }else if(currenttab==1){
    if(document.querySelector("#horarioInput").value==""){
      advertencia="Debes ingresar un horario de cita<br>";
      valido=false;
    }
    if(document.querySelector("#hora").value==""){
      advertencia+="Debes ingresar un dia de cita";
      valido=false;
    }
  }else if(currenttab==2){
      var x = document.getElementsByClassName("tab");
      var y= x[currenttab].getElementsByTagName("input");
      advertencia="El/los siguientes campos no están llenos: "
      for(var i=0;i<y.length;i++){
        
        if(y[i].value==""){

          if(y[i]!=y[y.length-1])
            advertencia+=" "+y[i].placeholder+",";
          else
            advertencia+=" Fecha de nacimiento";
          valido=false;
        }
      }
      if(!ValidateEmail(document.querySelector("#email").value)){
          if(valido)
            advertencia="El correo es incorrecto"
          else
            advertencia+="<br>El correo es incorrecto"
          valido=false;
      }
      if(!validatePhone(document.querySelector("#tel").value)){
        if(valido)
          advertencia="El teléfono es incorrecto"
        else
          advertencia+="<br>El teléfono es incorrecto"
        valido=false;
    }
  }

  if(!valido){
    document.querySelector("#div-advertencia").innerHTML=advertencia;
    document.querySelector("#div-advertencia").style.display="block";
  }else{
    document.querySelector("#div-advertencia").style.display="none";
  }
  return valido;
}
//valida el email
function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }
    return (false)
}

//valida el telefono
function validatePhone(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if(inputtxt.match(phoneno)){
      return true;
  }else{
      return false;
    }
}