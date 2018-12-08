<!DOCTYPE html>
<html>
<head>
  <title>IMG</title>


   
    </head>
<body>
  
   <div>
   	 <a href="<?php echo base_url('ver-imagen') ?>">Ver imagenes</a>
   </div>
   
    <form  action="<?php echo base_url()?>Imagen_Controller/subirimagen" method='POST' enctype="multipart/form-data" >
        
         
            <center><h2>Subida de imagenes</h2></center>
            <br>
           
            <div align="center">
                  
                  <input type="file" id="files" name="imagen" style="cursor: pointer;" accept="image/*" >
            
             <!--<input type="file" id="files" name="files[]" />-->
        <br />
        <output id="list"></output>
        
        <script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
            
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
            
                    var reader = new FileReader();
            
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
            
                    reader.readAsDataURL(f);
                  }
              }
            
              document.getElementById('files').addEventListener('change', archivo, false);
      </script>
           <br><br><br>
        <input type="submit" class="btn btn-theme02" name="enviar" value="Guardar" style="cursor: pointer;" />
               
        </div>

    </form>




<script>
        $.backstretch("<?php echo base_url()?>assets/img/MD.jpg", {speed: 500});
    </script>
</body>
<br><br><br><br><br>
