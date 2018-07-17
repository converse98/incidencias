$(function(){
	$('#state').on('change', onSelectStateChange);  // id == #	
});

function onSelectStateChange() 
{
	var state=$(this).val();
	

	var html_select = '<table class="table table-bordered"> <thead> <tr> <th>Título</th> <th>Descripción</th> <th>Fecha de creación </th> </tr> </thead> <tbody>';

	
   
  	if(state=='Resuelto')
	{
		$.get('/resuelto',function (data){
		
		for (var i=0; i<data.length; ++i){
			html_select += '<tr> <td>'+data[i].title+'</td> <td>'+data[i].description+'</td><td>'+data[i].created_at+'</td></tr> </table>';
		}
			//console.log(data[i]); ver los datos obtenidos de esta consulta jquery get()
		$('#tablita').html(html_select);

		});		
	}

	if(state=='En proceso')
	{
			$.get('/enproceso',function (data){
		
		for (var i=0; i<data.length; ++i){
			html_select += '<tr> <td>'+data[i].title+'</td> <td>'+data[i].description+'</td><td>'+data[i].created_at+'</td></tr> </table>';
		}
			//console.log(data[i]); ver los datos obtenidos de esta consulta jquery get()
		$('#tablita').html(html_select);

		});	
	}

	if(state=='Pendiente')
	{
			$.get('/pendiente',function (data){
		
		for (var i=0; i<data.length; ++i){
			html_select += '<tr> <td>'+data[i].title+'</td> <td>'+data[i].description+'</td><td>'+data[i].created_at+'</td></tr> </table>';
				}
			//console.log(data[i]); ver los datos obtenidos de esta consulta jquery get()
		$('#tablita').html(html_select);

		});
	}


	//html_select += '<td> Hola  </td> <td> Te salió! </td> <td> Eres un crack! </td> </tr> </tbody> </table>';
	//AJAX
	//for (var i=0; i<data.length; ++i)
	//		html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
			//console.log(data[i]); ver los datos obtenidos de esta consulta jquery get()



	//con la intencion de formar un HTML con las opciones y luego poner esto sobre el segundo SELECT

}