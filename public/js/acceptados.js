 document.getElementById("btnDetalle").addEventListener("click",function(){
  let formulario2 = document.querySelector("#mostrar");
 
  console.log(formulario2.id.value);
  enviarDatos("/ver/"+formulario2.id.value);
});

 
 function enviarDatos(url){
 
  axios.post(url).
  then(
    (respuesta)=>{
      var img = document.getElementById("img");
      var name = document.getElementById("name");
      var apePat = document.getElementById("apePat");
      var apeMat = document.getElementById("apeMat");
      var email = document.getElementById("email");
      var fechaNa = document.getElementById("fechaNa");
      var apodo = document.getElementById("apodo");
      var genero = document.getElementById("genero");
      
      name.value = respuesta.data.nombre;
      apePat.value = respuesta.data.apePat;
      apeMat.value = respuesta.data.apeMat;
      email.value = respuesta.data.email;
      fechaNa.value = respuesta.data.fechaNa;
      apodo.value = respuesta.data.username;
      var generoP = respuesta.data.genero;
      if(generoP == "M"){
        genero.value = "Masculino";
      }else if(generoP == "F"){
        genero.value = "Femenino";
      }else{
        genero.value = "otro"
      }
      img.src = respuesta.data.foto;

    console.log(name.value);
      $("#detalle").modal("show");
    }
  ).catch(
    error=>{
      if(error.response){
        console.log(error.response.data);
      }
    }
  ) 
}


$('.formulario-eliminar').submit(function(e){
    e.preventDefault();
    Swal.fire({
      title: 'Estas seguro',
      text: "¡No podrás revertir esto!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: '¡Sí, bórralo!',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        this.submit();
      }
    })
});


