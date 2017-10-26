function valida()
{

  var nombre = document.getElementById("nombre").value;
  var apellido = document.getElementById("apellido").value;
  var upass = document.getElementById("upass").value;
  var cpass = document.getElementById("cpass").value;
  var correo = document.getElementById("umail").value;
  var sexo = document.getElementById("sexo").value;
  var edad = document.getElementById("edad").value;
  var expresion = /\w+@\w+\.+[a-z]/;

  if (nombre.length==0)
    {
      alert('Debe llenar el campo de Nombre');
      return false;
    }

  if (apellido.length==0)
    {
      alert('Debe llenar el campo de Apellido');
      return false;
    }
  if (edad.length==0)
    {
      alert('Debe llenar el campo de Edad');
      return false;
    }
  if (upass.length==0)
    {
      alert('Debe llenar el campo de Contraseña');
      return false;
    }
  if (cpass.length==0)
    {
      alert('Debe llenar el campo de Confirmacion de contraseña');
      return false;
    }
  if (correo.length==0)
    {
      alert('Debe llenar el campo de Correo');
      return false;
    }
  if (sexo.length==0)
    {
      alert('Debe llenar el campo de Sexo');
      return false;
    }

  if( isNaN(edad) )
  {
    alert('Ingrese datos numericos en campo Edad');
    return false;
  }

  if (upass.length <= 5)
  {
    alert('La contraseña debe contener mas de 5 caracterés');
    return false;
  }

  if (cpass !== upass)
  {
    alert('Las contraseñas debe coincidir');
    return false;
  }


  if(nombre.length>50)
     {
         alert('Nombre es demasiado Largo');
         return false;
     }
  if (correo.length>50)
     {
         alert("El E-Mail es demasiado Largo");
         return false;
     }
  if(!expresion.test(mail)){
          alert("El E-Mail ingresado no es valido");
         return false;
     }

  if(upass.length>20)
     {
         alert("Su Contraseña es demasiado Larga");
         return false;
      }

  if(cpass.length>20)
     {
         alert("Su Contraseña es demasiado Larga");
         return false;
      }
}
