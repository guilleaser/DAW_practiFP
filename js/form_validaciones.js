/************* VALIDACIONES ESTUDIANTES ***************/

function validar_estudiante() {
  var nombre, apellidos, clave, confirmacionClave, expresionTexto, codPostal, dni, usuario, movil, expresionCorreo, correo, direccion, expresion_regular_dni, expresionNumero,expresionUser, localidad, municipio; 
  nombre = document.getElementById("name-c13e").value; 
  apellidos = document.getElementById("text-de88").value; 
  clave = document.getElementById("text-8cf5").value; 
  confirmacionClave = document.getElementById("text-65ef").value; 
  correo=document.getElementById("email-c13e").value;
  codPostal=document.getElementById("text-8b1a").value;
  dni=document.getElementById("text-6291").value;
  usuario=document.getElementById("text-aa37").value;
  movil=document.getElementById("phone-e71e").value;
  direccion=document.getElementById("address-36d6").value;
  localidad=document.getElementById("text-6868").value;
  municipio=document.getElementById("text-6868m").value;

  expresionTexto = /[a-z]|[A-Z]|[ ]/; 
  expresionNumero = /[0-9]/;
  expresionCorreo = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  expresion_regular_dni = /^[XYZ]?\d{5,8}[A-Z]$/;
  expresionUser = /[a-z]|[A-Z]|[0-9]/; 

  
  
  
  
  if(!expresionTexto.test(nombre)) {
      var info = document.getElementById("errores");
      info.innerHTML ="El nombre NO puede contener números y no puede estar vacío";
      return false;
  }
  else if(usuario.length>10) {
    var info = document.getElementById("errores");
    info.innerHTML ="El usuario no puede tener una longitud mayor de 10";
    return false;
}
  else if(usuario == "") {
    var info = document.getElementById("errores");
    info.innerHTML ="El usuario no puede estar vacío";
    return false;
  }
  else if(!expresionUser.test(usuario)) {
    var info = document.getElementById("errores");
    info.innerHTML ="El usuario solo puede contener letras y números";
    return false;
}
  else if(nombre.length>15) {
    var info = document.getElementById("errores");
    info.innerHTML ="El nombre no puede tener una longitud mayor de 15";
    return false;
}
else if(nombre == "") {
  var info = document.getElementById("errores");
  info.innerHTML ="El nombre no puede estar vacío";
  return false;
}
else if(apellidos == "") {
  var info = document.getElementById("errores");
  info.innerHTML ="El campo apellidos no puede estar vacío";
  return false;
}
  else if(!expresionTexto.test(apellidos)) {
      var info = document.getElementById("errores");
      info.innerHTML ="Los apellidos NO puede contener números y no puede estar el campo vacío";
      return false;
  }
  else if(apellidos.length>40) {
    var info = document.getElementById("errores");
    info.innerHTML ="Los apellidos no pueden tener una longitud mayor a 40 caracteres";
    return false;
}

  else if(clave!==confirmacionClave) {
      var info = document.getElementById("errores");
      info.innerHTML ="Las contraseñas deben coincidir";
      return false;
  }
  else if(clave == "") {
    var info = document.getElementById("errores");
    info.innerHTML ="El campo contraseña no puede estar vacío";
    return false;
  }
  else if(confirmacionClave == "") {
    var info = document.getElementById("errores");
    info.innerHTML ="El campo comprobación contraseña  no puede estar vacío";
    return false;
  }

else if(!expresionNumero.test(movil)) {
  var info = document.getElementById("errores");
  info.innerHTML ="El teléfono móvil solo puede contener números y no puede estar vacío";
  return false;
}


else if(movil.length!=9) {
var info = document.getElementById("errores");
info.innerHTML ="Introdúzca un teléfono móvil válido (9 números)";
return false;
}

  else if(codPostal.length!=5) {
    var info = document.getElementById("errores");
    info.innerHTML ="Introduzca un código postal válido (5 números)";
    return false;
}

  else if(!expresion_regular_dni.test(dni)) {
    var info = document.getElementById("errores");
    info.innerHTML ="Introduzca un DNI válido";
    return false;
  }
else if(!expresionCorreo.test(correo)) {
  var info = document.getElementById("errores");
  info.innerHTML ="Introduzca un correo válido";
  return false;
}
else if(direccion.length>40) {
  var info = document.getElementById("errores");
  info.innerHTML ="El campo dirección no puede contener más de 40 carácteres";
  return false;
}
else if(direccion == "") {
  var info = document.getElementById("errores");
  info.innerHTML ="El campo dirección no puede estar vacío";
  return false;
}
else if(localidad == "") {
  var info = document.getElementById("errores");
  info.innerHTML ="El campo localidad no puede estar vacío";
  return false;
}

else if(localidad.length>40) {
  var info = document.getElementById("errores");
  info.innerHTML ="El campo localidad no puede contener más de 40 carácteres";
  return false;
}
else if(municipio == "") {
  var info = document.getElementById("errores");
  info.innerHTML ="El campo municipio no puede estar vacío";
  return false;
}

else if(municipio.length>40) {
  var info = document.getElementById("errores");
  info.innerHTML ="El campo municipio no puede contener más de 40 carácteres";
  return false;
}
}
 

/************* VALIDACIONES EMPRESA ***************/

function validar_empresa() {
  var nombre_empresa,nombre_contacto, apellidos, clave, confirmacionClave, expresionTexto, codPostal, cif, usuario, movil, expresionCorreo, correo, direccion, localidad, tipo_industria, expresionNumero, municipio, expresionUser,expresionCIF; 
  nombre_empresa = document.getElementById("name-c13em").value;
  nombre_contacto = document.getElementById("text-4c9a").value; 
  apellidos = document.getElementById("text-de88em").value; 
  clave = document.getElementById("text-0ddd").value; 
  confirmacionClave = document.getElementById("text-7df1").value; 
  correo=document.getElementById("email-c13em").value;
  codPostal=document.getElementById("text-8b1aem").value;
  cif=document.getElementById("text-8c2d").value;
  usuario=document.getElementById("text-29e9").value;

  movil=document.getElementById("phone-e71em").value;
  direccion=document.getElementById("address-36d6em").value;
  localidad=document.getElementById("text-6868e").value;
  municipio=document.getElementById("text-6868em").value;
  tipo_industria=document.getElementById("text-c103").value;

  
  expresionTexto = /[a-z]|[A-Z]|[ ]/; 
  expresionNumero = /[0-9]/;
  expresionCorreo = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  expresionCIF=/(^[ABCDFGHJKLMNPQRSUVWabcdfghlmnpqrsuvw]([0-9]{7})([0-9A-Ja]$))|(^[0-9]{8}[A-Z]$)/;
  expresionUser = /[a-z]|[A-Z]|[0-9]/;
  
  
  
  
  if(!expresionTexto.test(nombre_contacto)) {
      var info = document.getElementById("errores_empresa");
      info.innerHTML ="El nombre de la persona de contacto NO puede contener números y no puede estar vacío";
      return false;
  }

  else if(!expresionCIF.test(cif)) {
    var info = document.getElementById("errores_empresa");
    info.innerHTML ="Introduzca un CIF válido";
    return false;
  }

else if(usuario.length>10) {
  var info = document.getElementById("errores_empresa");
  info.innerHTML ="El usuario no puede tener una longitud mayor de 10";
  return false;
}
else if(usuario == "") {
  var info = document.getElementById("errores_empresa");
  info.innerHTML ="El usuario no puede estar vacío";
  return false;
}
else if(!expresionUser.test(usuario)) {
  var info = document.getElementById("errores_empresa");
  info.innerHTML ="El usuario solo puede contener letras y números";
  return false;
}
else if(nombre_empresa == "") {
  var info = document.getElementById("errores_empresa");
  info.innerHTML ="El nombre de la empresa no puede estar vacío";
  return false;
  }
else if(nombre_empresa.length>40) {
  var info = document.getElementById("errores_empresa");
  info.innerHTML ="El nombre de la empresa no puede tener una longitud mayor de 40";
  return false;
}


else if(nombre_contacto.length>40) {
  var info = document.getElementById("errores_empresa");
  info.innerHTML ="El nombre de la persona de contacto no puede tener una longitud mayor de 40";
  return false;
}
else if(nombre_contacto == "") {
var info = document.getElementById("errores_empresa");
info.innerHTML ="El nombre de la persona de contacto no puede estar vacío";
return false;
}
else if(apellidos == "") {
var info = document.getElementById("errores_empresa");
info.innerHTML ="El campo apellidos de la persona de contacto no puede estar vacío";
return false;
}
else if(!expresionTexto.test(apellidos)) {
    var info = document.getElementById("errores_empresa");
    info.innerHTML ="El campo apellidos de la persona de contacto NO puede contener números y no puede estar el campo vacío";
    return false;
}
else if(apellidos.length>40) {
  var info = document.getElementById("errores_empresa");
  info.innerHTML ="Los apellidos no pueden tener una longitud mayor a 40 caracteres";
  return false;
}

else if(clave!==confirmacionClave) {
    var info = document.getElementById("errores_empresa");
    info.innerHTML ="Las contraseñas deben coincidir";
    return false;
}
else if(clave == "") {
  var info = document.getElementById("errores_empresa");
  info.innerHTML ="El campo contraseña no puede estar vacío";
  return false;
}
else if(confirmacionClave == "") {
  var info = document.getElementById("errores_empresa");
  info.innerHTML ="El campo comprobación contraseña  no puede estar vacío";
  return false;
}

else if(!expresionNumero.test(movil)) {
var info = document.getElementById("errores_empresa");
info.innerHTML ="El teléfono móvil solo puede contener números y no puede estar vacío";
return false;
}


else if(movil.length!=9) {
var info = document.getElementById("errores_empresa");
info.innerHTML ="Introdúzca un teléfono móvil válido (9 números)";
return false;
}

else if(codPostal.length!=5) {
  var info = document.getElementById("errores_empresa");
  info.innerHTML ="Introduzca un código postal válido (5 números)";
  return false;
}

else if(!expresionCorreo.test(correo)) {
var info = document.getElementById("errores_empresa");
info.innerHTML ="Introduzca un correo válido";
return false;
}
else if(direccion.length>40) {
var info = document.getElementById("errores_empresa");
info.innerHTML ="El campo dirección no puede contener más de 40 carácteres";
return false;
}
else if(direccion == "") {
var info = document.getElementById("errores_empresa");
info.innerHTML ="El campo dirección no puede estar vacío";
return false;
}
else if(localidad == "") {
var info = document.getElementById("errores_empresa");
info.innerHTML ="El campo localidad no puede estar vacío";
return false;
}

else if(localidad.length>40) {
var info = document.getElementById("errores_empresa");
info.innerHTML ="El campo localidad no puede contener más de 40 carácteres";
return false;
}
else if(municipio == "") {
var info = document.getElementById("errores_empresa");
info.innerHTML ="El campo municipio no puede estar vacío";
return false;
}

else if(municipio.length>40) {
var info = document.getElementById("errores_empresa");
info.innerHTML ="El campo municipio no puede contener más de 40 carácteres";
return false;
}
else if(tipo_industria == "") {
  var info = document.getElementById("errores_empresa");
  info.innerHTML ="El campo tipo de industria no puede estar vacío";
  return false;
  }
else if(tipo_industria.length>40) {
  var info = document.getElementById("errores_empresa");
  info.innerHTML ="El campo tipo de industria no puede contener más de 40 carácteres";
  return false;
  }    

}


function validar_contrasena() {
  var clave, confirmacionClave;
  clave = document.getElementById("name-a6cf").value; 
  confirmacionClave = document.getElementById("name-6953").value; 

  if(clave!==confirmacionClave) {
    var info = document.getElementById("errores_clave");
    info.innerHTML ="Las contraseñas deben coincidir";
    return false;
}
}