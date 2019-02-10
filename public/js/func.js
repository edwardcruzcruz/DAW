function addNew(Titulo,Objetivo, Descripcion,Categoria,Fecha,Materiales,Id) {
    var title = $("<td/>", {
      html: Titulo
    });
    var objetivo = $("<td/>", {
      html: Objetivo
    });
    var descripcion = $("<td/>", {
      html: Descripcion
    });
    var categoria = $("<td/>", {
      html: Categoria
    });
    var fecha = $("<td/>", {
      html: Fecha
    });
    var materiales = $("<td/>", {
      html: Materiales
    });
    var editar =$("<a/>",{
      "class":"btn btn-small btn-info",
      "id":"modify",
      "name":Id,
      html: "Editar"
    });
    var eliminar =$("<a/>",{
      "class":"btn btn-small btn-success",
      "id":"eliminar",
      "name":Id,
      html: "Eliminar"
    });
    var row = $( "<tr/>",{
	'id':'container'
    });
    title.appendTo(row);
    objetivo.appendTo(row);
    descripcion.appendTo(row);
    categoria.appendTo(row);
    fecha.appendTo(row);
    materiales.appendTo(row);
    editar.appendTo(row);
    eliminar.appendTo(row);
    row.appendTo( "#proyectos" );
}

$(document).ready(function(){
     $.ajax({
        url: 'http://localhost/api/proyectos',//+ resource 
        dataType:'json',
        type: 'get',
        success:function(data){
            
	    $.each(data, function(index, element) {
		Titulo=data[index].Titulo;
		Objetivo=data[index].Objetivo;
		Descripcion=data[index].Descripcion;
		Categoria=data[index].Categoria;
		Fecha=data[index].Fecha;
		Materiales=data[index].Materiales;
		Id=data[index].id;
		addNew(Titulo,Objetivo, Descripcion,Categoria,Fecha,Materiales,Id)               
		/*$('body').append($('<div>', {
                text: element.name
            }));*/
            });
        }
    });
    $("#proyectos").on("click", "a#eliminar", function(){//magia xD
	$.ajax({
            type: 'delete',
	    url: 'http://localhost/api/proyectos/'+ $(this).attr("name"),//api/clientes',+ resource 
            success: function () {  
                alert("Se ha eliminado un Proyecto");   
            },  
            error: function () {
                alert('Error in Operation');   
            }	
	});
	$.ajax({
	    type: 'delete',
	    url: 'http://localhost/api/solicitudes/'+ $(this).attr("name"),//api/clientes',+ resource 
            success: function () {  
                alert("Se ha eliminado un Servicio");   
            },  
            error: function () {
                alert('Error in Operation');   
            }	
	});	
    });
    $("#proyectos").on("click", "a#modify", function(){//magia xD
        //alert($(this).attr("name"));
        window.location = '/editarProyecto/'+ $(this).attr("name");
    });
});

