<!DOCTYPE html>
<html>
<head>
  <title>IMG</title>


   
    </head>
<body>
  
   
   
    <form class="alert btn-theme03 top-center" action="<?php echo base_url()?>Imagen_Controller/subirimagen" method='POST' enctype="multipart/form-data" >
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <br>
            <center><h2>Subida de imagenes</h2></center>
            <br>
           
            <div class="upload-btn-wrapper">
                  <button class="img">Subir Imagen</button>
                  <input type="file" id="files" name="imagen" style="cursor: pointer;" accept="image/*" >
            </div>
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
           
        <input type="submit" class="btn btn-theme02" name="enviar" value="Guardar" style="cursor: pointer;" />
               
        </div>

    </form>

<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo base_url()?>assets1/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets1/plugins/jquery-ui/jquery-ui.min.js"></script>
 Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="<?php echo base_url()?>assets1/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets1/plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>
<script src="<?php echo base_url()?>assets1/plugins/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url()?>assets1/plugins/tinymce/jquery.tinymce.min.js"></script>-->
<script>
        $.backstretch("<?php echo base_url()?>assets/img/MD.jpg", {speed: 500});
    </script>
</body>
<br><br><br><br><br>