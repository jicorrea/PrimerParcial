
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">
<?php 
session_start();
if(isset($_SESSION['registrado'])) {  ?>
    <div class="container">

      <form class="form-ingreso" onsubmit="GrabarVoto();return false;"> <!--GrabarVoto();return false-->
        <h2 class="form-ingreso-heading">Voto</h2>
       
        <label for="provincia" class="sr-only">Provincia</label>
        <input type="text"  id="provincia" title="Escriba una provicia" class="form-control" placeholder="Provincia" required="" autofocus="">
      
        <label for="localidad" class="sr-only">Localidad</label>
        <input type="text"  id="localidad" title="Escriba una localidad" class="form-control" placeholder="Localidad" required="" autofocus="">       
        
        <label for="direccion" class="sr-only">Direccion</label>
        <input type="text"  id="direccion" title="Escriba una direccion" class="form-control" placeholder="Direccion" required="" autofocus="">       

        <select  id="candidato" class="form-control" required="" autofocus="">
          <option value="scioli">Scioli</option>
          <option value="Macri">Macri</option>
          <option value="Massa">Massa</option>
        </select>
       
        <br>
        <label for="sexo" class="sr-only">Sexo</label>
        <!--input type="number"   min="1900" title="Un año entre 1900 y hoy"  max="2099" id="anio" class="form-control" placeholder="año" required="" autofocus=""-->
        <input type="radio" name="sexo" id="sexo"  value="Femenino"  required="">Femenino
        <input type="radio" name="sexo" id="sexo"  value="Masculino" required="">Masculino


       <input readonly   type="hidden"    id="idVoto" class="form-control" >
       
       <input readonly   type="hidden"    id="dni" class="form-control" value ="<?php echo $_SESSION['registrado'];?>">

        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Votar </button>
     
      </form>

    </div> <!-- /container -->

  <?php }else{    echo"<h3>usted no esta logeado. </h3>";?>         
   
  <?php  }  ?>