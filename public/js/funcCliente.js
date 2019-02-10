function addNew(CI,Nombre, Profesion,Telefono,Edad,NombreEmpresa,Correo,id) {
   var ci = $("<td/>", {
      html: CI
    });
    var nombre = $("<td/>", {
      html: Nombre
    });
    var profesion = $("<td/>", {
      html: Profesion
    });
    var telefono = $("<td/>", {
      html: Telefono
    });
    var edad = $("<td/>", {
      html: Edad
    });
    var nombreempresa = $("<td/>", {
      html: NombreEmpresa
    });
    var correo = $("<td/>", {
      html: Correo
    });
    var eliminar =$("<a/>",{
      "id":"eliminar",
      "class":"btn btn-small btn-success",
      "name":id,
      html: "Eliminar"
    });

    var row = $( "<tr/>");
    
    ci.appendTo(row);
    nombre.appendTo(row);
    profesion.appendTo(row);
    telefono.appendTo(row);
    edad.appendTo(row);
    nombreempresa.appendTo(row);
    correo.appendTo(row);
    eliminar.appendTo(row);
    row.appendTo( "#clientes" );
}

$(document).ready(function(){
     $.ajax({
        url: 'http://localhost/api/clientes',//+ resource 
        dataType:'json',
        type: 'get',
        success:function(data){
            console.log(data);
	    $.each(data, function(index, element) {
		id=data[index].id;
		CI=data[index].CI;
		Nombre=data[index].Nombre;
		Profesion=data[index].Profesion;
		Telefono=data[index].Telefono;
		Edad=data[index].Edad;
		NombreEmpresa=data[index].NombreEmpresa;
		Correo=data[index].Correo;
		addNew(CI,Nombre, Profesion,Telefono,Edad,NombreEmpresa,Correo,id)               
		/*$('body').append($('<div>', {
                text: element.name
            }));*/
            });
        }
    });

    $("#clientes").on("click", "a#eliminar", function(){//magia xD
	$.ajax({
            type: 'delete',
	    url: 'http://localhost/api/clientes/'+ $(this).attr("name"),//api/clientes',+ resource 
            success: function () {  
                alert("Se ha eliminado un Usuario");   
            },  
            error: function () {
                alert('Error in Operation');   
            }	
	});	
    });
});
