var contrasena = document.getElementById("contrasena")
  , confirm_password = document.getElementById("confirm_password");

function validatecontrasena(){
  if(contrasena.value != confirm_password.value) {
    confirm_password.setCustomValidity("Confirme la clave");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatecontrasena;
confirm_password.onkeyup = validatecontrasena;