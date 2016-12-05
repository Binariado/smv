function publicar() {
  $.ajax({
           type:'POST',
           url:"php/publicar.php",
           dataType:'HTML',
           data:{
            ls:$("#ls").val(),
            ll:$("#ll").val(),
            date:$("#date").val(),
            hora:$("#hora").val(),
            cupo:$("#cupo").val(),
            precio:$("#precio").val()
           },
           beforeSend: function(){

},
           success:function(datos){
             if (datos==0) {
               alert("no se puedo insertar")
             }else {
               alert("Viaje Armado Satisfactoriamente");
               $("#ls").val("");
               $("#ll").val("");
               $("#date").val("");
               $("#hora").val("");
               $("#cupo").val("");
               $("#precio").val("");
             }

           },
           error: function ( jqXHR, textStatus, errorThrown ){
                alert (errorThrown);
           }

     });
}

function mostrarv() {
  $.ajax({
           type:'POST',
           url:"php/mostrarv.php",
           dataType:'HTML',
           data:{

           },
           beforeSend: function(){

          },
           success:function(datos){
             v=$("#Viajes_p").html();
              $("#Viajes_p").html(v+datos);
           },
           error: function ( jqXHR, textStatus, errorThrown ){
                alert (errorThrown);
           }

     });
}
function solicitar() {
  $.ajax({
           type:'POST',
           url:"php/soli.php",
           dataType:'HTML',
           data:{
            ls:$("#lls").val(),
            ll:$("#lll").val(),
            date:$("#ddate").val(),

           },
           beforeSend: function(){

},
           success:function(datos){
             if (datos==0) {
               alert("no se puedo insertar")
             }else {
               alert("solitud echa Satisfactoriamente");
               $("#lls").val("");
               $("#lll").val("");
               $("#ddate").val("");

             }

           },
           error: function ( jqXHR, textStatus, errorThrown ){
                alert (errorThrown);
           }

     });
}
function mostrars() {
  $.ajax({
           type:'POST',
           url:"php/mostrars.php",
           dataType:'HTML',
           data:{

           },
           beforeSend: function(){

          },
           success:function(datos){
              $("#soli").html(datos);
           },
           error: function ( jqXHR, textStatus, errorThrown ){
                alert (errorThrown);
           }

     });
}
