

document.addEventListener('DOMContentLoaded', function() {

    let formulario2 = document.querySelector("#form2");
    var calendarEl = document.getElementById('agenda');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale:"es",

      headerToolbar:{
        left: 'prev,next today',
        center: 'title',
  
        right: 'listWeek,'
      },

      events: "/mostrarStri",

 
      eventClick:function (info){
        var evento = info.event;
        document.getElementById('btnModificar').style.display = 'inline';
        document.getElementById('btnEliminar').style.display = 'inline';
        document.getElementById('btnGuardar').style.display = 'none';
        

        axios.post("/editarStri/"+info.event.id).
        then(
          (respuesta)=>{

            formulario2.id.value = respuesta.data.id;
            formulario2.title.value = respuesta.data.title;
            formulario2.descripcion.value = respuesta.data.descripcion;
            formulario2.direccion.value = respuesta.data.direccion;
            formulario2.numeroCli.value = respuesta.data.numeroCli;
            formulario2.formaPago.value = respuesta.data.formaPago;
            formulario2.start.value = respuesta.data.start;
            formulario2.end.value = respuesta.data.end;
            formulario2.horaIni.value = respuesta.data.timeStrart;
            formulario2.horaFin.value = respuesta.data.timeEnd;
            $("#evento").modal("show");
          }
        ).catch(
          error=>{
            if(error.response){
              console.log(error.response.data);
            }
          }
        ) 
      }
    });
    calendar.render();

    

    document.getElementById("btnGuardar").addEventListener("click",function(){

       enviarDatos("/agregar"); 
    });

    document.getElementById("btnEliminar").addEventListener("click",function(){
      enviarDatos("/eliminar/"+formulario2.id.value);
    });

    document.getElementById("btnModificar").addEventListener("click",function(){
      enviarDatos("/update/"+formulario2.id.value);
    });

  function enviarDatos(url){
    
    const datos = new FormData(formulario2);
    console.log( formulario2.start.value + formulario2.horaIni.value);
    //console.log( formulario2.horaIni.value);
        axios.post(url, datos).then(
          (respuesta)=>{
            
            if(respuesta.data == "No"){
              console.log("entro");
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'No puede realizar esa acción!',
             
              })
            }
            calendar.refetchEvents();
            $("#evento").modal("hide");
          }
        ).catch(
          error=>{
            if(error.response){
              console.log(error.response.data);
            }
          }
        )
  }


  });