function validar(){
  var nombre, mail, pass, passConfirm, tipo_Institucion, expresion;
  nombre = document.getElementById("nombre").value;
  mail = document.getElementById("mail").value;
  pass = document.getElementById("pass").value;
  passConfirm = document.getElementById("passConfirm").value;
  tipo_Institucion = document.getElementById("tipo_Institucion").value;
  pais_insti =document.getElementById("pais_insti").value;

  expresion = /\w+@\w+\.+[a-z]/;

       if(nombre === "" || mail === "" || pass === "" || passConfirm === "" || tipo_Institucion === "" || pais_insti === "")
     {
         alert("Debe llenar todos los campos");
         return false;
     }
     else if(nombre.length>50)
     {
         alert("Nombre es demasiado Largo");
         return false;
     }
       else if (mail.length>50)
     {
         alert("El E-Mail es demasiado Largo");
         return false;
     }
     else if(!expresion.test(mail)){
          alert("El E-Mail ingresado no es valido");
         return false;
     }
     else if(pass !== passConfirm){
         alert("Las Contraseñas no Coinciden");
         return false;

     }
       else if(pass.length>20)
     {
         alert("Su Contraseña es demasiado Larga");
         return false;
     }
       else if(passConfirm.length>20)
     {
         alert("La Contrseña es demasiado Larga");
         return false;
     }
       else if(tipo_Institucion.length>25)
     {
         alert("El tipo de Institucion es demasiado Largo");
         return false;
     }

       else if(pais_insti.length>50)
     {
         alert("El Pais es demasiado Largo");
         return false;
     }

}
