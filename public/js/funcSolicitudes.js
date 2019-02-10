function addNew(Nombre,Titulo,Descripcion,Fecha,Estado,Id) {
    var nombre = $("<td/>", {
      "class":"view-message dont-show",
      html: Nombre
    });
    var title = $("<h5/>", {
      html: Titulo
    });
    
    var descripcion = $("<p/>", {
      html: Descripcion
    });
    var textRes=$("<td/>",{"class":"view-message"});
    var fecha = $("<td/>", {
      "class":"view-message text-right",
      html: Fecha
    });
    var estado = $("<td/>", {
      html: Estado
    });
    var aceptar =$("<a/>",{
      "id":"aceptar",
      "class":"btn btn-small btn-info",
      "data-id":Id,
      "data-nombre":Nombre,
      "data-titulo":Titulo,
      "data-descripcion":Descripcion,
      "data-fecha":Fecha,
      "data-estado":Estado,
      html: "Aceptar"
    });
    var rechazar =$("<a/>",{
      "id":"rechazar",
      "class":"btn btn-small btn-success",
      "data-id":Id,
      "data-nombre":Nombre,
      "data-titulo":Titulo,
      "data-descripcion":Descripcion,
      "data-fecha":Fecha,
      "data-estado":Estado,
      html: "Rechazar"
    });

    var row = $( "<tr/>");
    
    nombre.appendTo(row);
    title.appendTo(textRes);
    descripcion.appendTo(textRes);
    textRes.appendTo(row);
    fecha.appendTo(row);
    estado.appendTo(row);
    aceptar.appendTo(row);
    rechazar.appendTo(row);
    row.appendTo( "#solicitudes" );
}

$(document).ready(function(){
     $.ajax({
        url: 'http://localhost/api/solicitudes', 
        dataType:'json',
        type: 'get',
        success:function(data){
            
	    $.each(data, function(index, element) {
		Nombre=data[index].Nombre;		
		Titulo=data[index].Titulo;
		Descripcion=data[index].Descripcion;
		Fecha=data[index].Fecha;
		Estado=data[index].Estado;
		Id=data[index].id;
				addNew(Nombre,Titulo,Descripcion,Fecha,Estado,Id)               
		/*$('body').append($('<div>', {
                text: element.name
            }));*/
            });
        }
    });

    $("#solicitudes").on("click", "a#aceptar", function(){//magia xD
	//alert('hola');
	var nombre=$(this).attr("data-nombre");
	var titulo=$(this).attr("data-titulo");
	var descripcion=$(this).attr("data-descripcion");
	var fecha=$(this).attr("data-fecha");
	var Estado="Aceptado";
	$.ajax({
            type: 'put',
	    url: 'http://localhost/api/solicitudes/'+ $(this).attr("data-id"),//api/clientes',+ resource
	    dataType:'json',
	    data:{Nombre:nombre,Titulo:titulo,Descripcion:descripcion,Fecha:fecha,Estado:Estado},
            success: function (data) {  
                var responsive="Se ha rechazado la solicitud"+$(this).attr("data- id");
                alert(responsive);  
            },  
            error: function () {  
                alert('Error in Operation');  
            }	
	});	
    });
    $("#solicitudes").on("click", "a#rechazar", function(){//magia xD
	//alert('bye');
	var nombre=$(this).attr("data-nombre");
	var titulo=$(this).attr("data-titulo");
	var descripcion=$(this).attr("data-descripcion");
	var fecha=$(this).attr("data-fecha");
	var Estado="Rechazado";
	$.ajax({
            type: 'put',
	    url: 'http://localhost/api/solicitudes/'+ $(this).attr("data-id"),//api/clientes',+ resource
	    dataType:'json',
	    data:{Nombre:nombre,Titulo:titulo,Descripcion:descripcion,Fecha:fecha,Estado:Estado}, 
            success: function (data) {  
		var responsive="Se ha rechazado la solicitud"+$(this).attr("data- id");
                alert(responsive);  
            },  
            error: function () {  
                alert('Error in Operation');  
            }	
	});
    });
});

