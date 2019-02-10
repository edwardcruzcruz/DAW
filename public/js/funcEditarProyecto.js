$(document).ready(function(){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $("#enviar").on('click',function(e){
	e.preventDefault();
	var oculto=$("input[name=proyecto_id]").val();
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
	    url: 'http://localhost/api/proyectos/'+oculto,//api/clientes',+ resource 
            type: 'put',
	    dataType:'json',
	    data:{Titulo:titulo,Objetivo:objetivo, Descripcion:descripcion,Categoria:categoria,Fecha:fecha,Materiales:materiales},//,RutaImagenes:rutaimagenes,PorcentajeSkills:porcentajeskills,PersonasEncargadas:personasencargadas
	    
            success: function (data, textStatus, xhr) {  
                alert("Se ha modificado un proyecto");   
            },  
            error: function (xhr, textStatus, errorThrown) {
                alert('Error in Operation');   
            }	
	});
	$.ajax({
	    url: 'http://localhost/api/servicios/'+oculto,//api/clientes',+ resource 
            type: 'put',
	    dataType:'json',
	    data:{Descripcion:descripcion,RutaImagenes:rutaimagenes,PorcentajeSkills:porcentajeskills,PersonasEncargadas:personasencargadas},//,RutaImagenes:rutaimagenes,PorcentajeSkills:porcentajeskills,PersonasEncargadas:personasencargadas
            success: function (data, textStatus, xhr) {  
                alert("Se ha modificado un servicio");  
            },  
            error: function (xhr, textStatus, errorThrown) {  
                alert('Error in Operation');  
            }	
	});
    });
});
