$(document).ready(function(){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $("#enviar").on('click',function(e){
	e.preventDefault();
	var oculto=$("input[name=invisible]").val();
	var titulo=$("input[name=Titulo]").val();
	var descripcion=$("input[name=Descripcion]").val();
	var fecha=$("input[name=Fecha]").val();
	var estado='En espera';
	//console.log(oculto);//salio :'D
        $.ajax({
	    url: 'http://localhost/api/solicitudes',//api/clientes',+ resource 
            type: 'post',
	    dataType:'json',
	    data:{Nombre:oculto,Titulo:titulo, Descripcion:descripcion,Fecha:fecha,Estado:estado},//,RutaImagenes:rutaimagenes,PorcentajeSkills:porcentajeskills,PersonasEncargadas:personasencargadas
	    
            success: function (data, textStatus, xhr) {  
                alert("Se ha creado una nueva solicitud");   
            },  
            error: function (xhr, textStatus, errorThrown) {
                alert('Error in Operation');   
            }	
	});
    });
});
