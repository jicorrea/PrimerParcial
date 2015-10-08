
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">
<?php 
session_start();
if(isset($_SESSION['registrado'])) {  ?>
    <div class="container">

      <form class="form-ingreso" onsubmit="GrabarVoto();return false;"  method="post"> <!--GrabarVoto();return false-->
        <h2 class="form-ingreso-heading">Voto</h2>
       
        <label for="provincia" class="sr-only">Provincia</label>
        <input type="text"  id="provincia" title="Escriba una provicia" class="form-control" placeholder="Provincia" required="" autofocus="">
       

        <select  id="candidato" class="form-control" required="" autofocus="">
          <option value="scioli">Scioli</option>
          <option value="Macri">Macri</option>
          <option value="Massa">Massa</option>
        </select>
       
        <br>
        <label for="sexo" class="sr-only">Sexo</label>
        <!--input type="number"   min="1900" title="Un año entre 1900 y hoy"  max="2099" id="anio" class="form-control" placeholder="año" required="" autofocus=""-->
        <input type="radio" name="sexo" id="sexo"  value="Femenino" required="" autofocus="">Femenino
        <input type="radio" name="sexo" id="sexo"  value="Masculino" required="" autofocus="">  Masculino


       <input readonly   type="hidden"    id="idVoto" class="form-control" >
       <input readonly   type="hidden"    id="dni" class="form-control" value ="<?php echo $_SESSION['registrado'];?>">

        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon-floppy-save">&nbsp;&nbsp;</span>Votar </button>
     
      </form>

    </div> <!-- /container -->

  <?php }else{    echo"<h3>usted no esta logeado o ya voto. </h3>";?>         
   
  <?php  }  ?>