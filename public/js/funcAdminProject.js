$(document).ready(function(){
     
    /*$.ajax({
        url: 'http://localhost/api/proyectos',//+ resource 
        dataType:'json',
        type: 'get',
        success:function(data){
            console-log();
        }
    });*/
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $("#enviar").on('click',function(e){
	e.preventDefault();
	var titulo=$("input[name=Titulo]").val();
	var objetivo=$("input[name=Objetivo]").val();
	var descripcion=$("input[name=Descripcion]").val();
	var categoria=$('#categoria option:selected').val();
	var fecha=$("input[name=Fecha]").val();
	var materiales=$("input[name=Materiales]").val();
	var rutaimagenes=$("input[name=RutaImagenes]").val();
	var porcentajeskills=$("input[name=PorcentajeSkills]").val();
	var personasencargadas=$("input[name=PersonasEncargadas]").val();
	//console.log(categoria);//salio :'D
        $.ajax({
	    url: 'http://localhost/api/proyectos',//api/clientes',+ resource 
            type: 'post',
	    dataType:'json',
	    data:{Titulo:titulo,Objetivo:objetivo, Descripcion:descripcion,Categoria:categoria,Fecha:fecha,Materiales:materiales},//,RutaImagenes:rutaimagenes,PorcentajeSkills:porcentajeskills,PersonasEncargadas:personasencargadas
	    
            success: function (data, textStatus, xhr) {  
                alert("Se ha creado un nuevo proyecto");   
            },  
            error: function (xhr, textStatus, errorThrown) {
                alert('Error in Operation');   
            }	
	});
	$.ajax({
	    url: 'http://localhost/api/servicios',//api/clientes',+ resource 
            type: 'post',
	    dataType:'json',
	    data:{Descripcion:descripcion,RutaImagenes:rutaimagenes,PorcentajeSkills:porcentajeskills,PersonasEncargadas:personasencargadas},//,RutaImagenes:rutaimagenes,PorcentajeSkills:porcentajeskills,PersonasEncargadas:personasencargadas
            success: function (data, textStatus, xhr) {  
                alert("Se ha creado un nuevo servicio");  
            },  
            error: function (xhr, textStatus, errorThrown) {  
                alert('Error in Operation');  
            }	
	});
    });
});
