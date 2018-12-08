<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar imagen</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>

</head>
<body>
	<div>
		<br>
		<button class="btn btn-success" onclick="ver_imagen()">Mostrar nueva combinación</button>

		<div class="container" id="padre">
			<div class="row" id="hijo">
				
			</div>
		</div>
	</div>
	<script>
         ver_imagen();


		function ver_imagen(){
			$.ajax({
				dataType: 'json',
				url: '<?php echo base_url()?>imagenes',
				async: false,
				success: function(data){

			    $('#hijo').remove();
			    $('#padre').append('<div class="row" id="hijo"></div>');

                 
				var html = "";
					for (var i = 0; i <data.length; i++) {
						html = html + '<div class="col-md-4">'+
					                       '<a data-fancybox="gallery" href="img/subidas/'+data[i][0].nombre+'"><img width="300" height="300" src="img/subidas/'+data[i][0].nombre+'"></a>'+
			             	          '</div>';
					}
					$('#hijo').append(html);
              
					
				},
				error: function(){
					alert('Ocurrio un error');
				}
			});
		}
	</script>
</body>
</html>
