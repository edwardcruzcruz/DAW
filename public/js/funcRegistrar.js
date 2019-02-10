$(document).ready(function(){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $("#enviar").on('click',function(e){
	e.preventDefault();
	var ci=$("input[name=CI]").val();
	var nombre=$("input[name=Nombre]").val();
	var profesion=$('#profesion option:selected').val();
	var telefono=$("input[name=Telefono]").val();
	var edad=$("input[name=Edad]").val();
	var nombreempresa=$("input[name=NombreEmpresa]").val();
	var correo=$("input[name=Correo]").val();
	var username=$("input[name=username]").val();
	var password=$("input[name=password]").val();
	var remember = Math.floor((Math.random() * 9999999999) + 1000000000);
	//console.log(categoria);//salio :'D
	/*$.ajax({
	type: "get",
    	url: '/contrahash', // This is what I have updated
    	data: {value:password},
	success: function() {
            alert(data);
        }
	});*/
        $.ajax({
	    url: 'http://localhost/api/clientes',//api/clientes',+ resource 
            type: 'post',
	    dataType:'json',
	    data:{CI:ci,Nombre:nombre, Profesion:profesion,Telefono:telefono,Edad:edad,NombreEmpresa:nombreempresa,Correo:correo},//,RutaImagenes:rutaimagenes,PorcentajeSkills:porcentajeskills,PersonasEncargadas:personasencargadas
	    
            success: function (data, textStatus, xhr) {  
                alert("Se ha creado un nuevo cliente"); 
            },  
            error: function (xhr, textStatus, errorThrown) {
                alert('Error in Operation');    
            }	
	});
	$.ajax({
	    url: 'http://localhost/api/usuarios',//api/clientes',+ resource 
            type: 'post',
	    dataType:'json',
	    data:{CI:ci,username:username, password:password,remember_token:remember},//,RutaImagenes:rutaimagenes,PorcentajeSkills:porcentajeskills,PersonasEncargadas:personasencargadas
            success: function (data, textStatus, xhr) {  
                alert("Se ha creado un nuevo usuario");  
            },  
            error: function (xhr, textStatus, errorThrown) {  
                alert('Error in Operation');  
            }	
	});
    });
});
