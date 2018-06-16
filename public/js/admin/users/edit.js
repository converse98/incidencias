$(function(){
	$('#select-project').on('change', onSelectProjectChange);
});

function onSelectProjectChange() 
{
	var project_id=$(this).val();

	if (!project_id) //si no se ha seleccionado nada que  muestre ninguna opcion
	{
		$('#select-level').html('<option value="">Seleccione nivel</option>'); 
		return;
	}

	//AJAX
	$.get('/api/proyecto/'+project_id+'/niveles',function (data){
		var html_select = '<option value="">Seleccione nivel</option>';
		for (var i=0; i<data.length; ++i)
			html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
			//console.log(data[i]); ver los datos obtenidos de esta consulta jquery get()
		$('#select-level').html(html_select);

	});//con la intencion de formar un HTML con las opciones y luego poner esto sobre el segundo SELECT

}