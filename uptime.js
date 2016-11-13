$(window).load(function(){ 
  for(i=1;i<=11;i++){ 
  load = servers[i];  
  $.ajax({
    url: 'status.php', 
    type: 'post',
    /*beforeSend: function(){
    $('.load-content').css('display', 'inline');
    },*/
    data: load,
    success:function(datos){
       setTimeout(function(){
       //$("#mostrar_datos").html(datos);
          //console.log("OK #1!");
          $("#status" + i).html(datos);
       }, 500);
     }
  })
  .done(function(){
    setTimeout(function(){
    //console.log("Las operaciones se han realizado con éxito. #" + i);
    }, 1000);
  })
  .fail(function(){
    setTimeout(function(){
    //console.error("ERROR: Las operaciones no se pudieron realizar. #" + i);
    //$('#mostrar_datos').html("<p style='color:#FF0000;'>Error: No se pudo procesar la petición. Por favor, inténtelo de nuevo.</p>");
    }, 1000);
  })
  .always(function(){
    setTimeout(function(){
    //$('.load-content').hide();
    //console.log("Operaciones en proceso ... #" + i);
    }, 500); 
  });
 }


    for(j=1;j<=11;j++){ 
    load = servers[j];  
    $.ajax({
    url: 'time.php', 
    type: 'post',
    /*beforeSend: function(){
    $('.load-content').css('display', 'inline');
    },*/
    data: load,
    success:function(datos){
       setTimeout(function(){
       //$("#mostrar_datos").html(datos);
          console.log("OK #2!");
          $("#time" + j).html(datos);
       }, 1000);
     }
  })
  .done(function(){
    setTimeout(function(){
    console.log("Las operaciones se han realizado con éxito. #" + j);
    }, 1000);
  })
  .fail(function(){
    setTimeout(function(){
    console.error("ERROR: Las operaciones no se pudieron realizar. #" + j);
    //$('#mostrar_datos').html("<p style='color:#FF0000;'>Error: No se pudo procesar la petición. Por favor, inténtelo de nuevo.</p>");
    }, 1000);
  })
  .always(function(){
    setTimeout(function(){
    //$('.load-content').hide();
    console.log("Operaciones en proceso ... #" + j);
    }, 500); 
   });
  }
});