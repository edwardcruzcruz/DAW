function addNew(Nombre,Titulo,Descripcion,Fecha,Estado,Id) {
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

    var row = $( "<tr/>");
    
    title.appendTo(textRes);
    descripcion.appendTo(textRes);
    textRes.appendTo(row);
    fecha.appendTo(row);
    estado.appendTo(row);
    row.appendTo( "#solicitudes" );
}

$(document).ready(function(){
     var name=document.getElementById("nombre_session").textContent;

     $.ajax({
        url: 'http://localhost/api/solicitudes', 
        dataType:'json',
        type: 'get',
        success:function(data){
            console.log(name);
	    $.each(data, function(index, element) {
		Nombre=data[index].Nombre;		
		Titulo=data[index].Titulo;
		Descripcion=data[index].Descripcion;
		Fecha=data[index].Fecha;
		Estado=data[index].Estado;
		Id=data[index].id;
		if(name===Nombre){	    
	addNew(Nombre,Titulo,Descripcion,Fecha,Estado,Id)}               
		/*$('body').append($('<div>', {
                text: element.name
            }));*/
            });
        }
    });

});
