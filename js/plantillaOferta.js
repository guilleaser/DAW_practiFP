function cargarPlantilla(){

    var posicion = "Buscamos programador. ";
    var horas = "Horario: de lunes a viernes en horario de 9:00 a 18:00. Teletrabajo.";
    var conocimiento = "Preferible con conocimientos altos de Python y JavaScript. Inglés nivel medio necesario.";
  
    var texto = posicion + "\n" + horas + "\n" + conocimiento;
  
    document.getElementById("textoPlantilla").innerHTML = texto;
  
  }


  function limpiarFormulario() {
    document.getElementById("textoPlantilla").value="";
    document.getElementById("name-ac71").value="";
    document.getElementById("name-ac71").value="";
    document.getElementById("text-29f4").value="";
    document.getElementById("email-ac71").value="";
    document.getElementById("text-46e8").value="";
    document.getElementById("text-3456").value="";
    document.getElementById("text-3456").value="";
    document.getElementById("mail").value="";
  }