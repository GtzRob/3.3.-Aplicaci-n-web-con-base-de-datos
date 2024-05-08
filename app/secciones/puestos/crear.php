<?php
 include("../../bd.php");

if($_POST){
  print_r($_POST);
    //recolectamos los datos del metodo post//
    $nombrepuesto = (isset($_POST["nombrepuesto"]) ? $_POST["nombrepuesto"] : "");

    // Preparar la inserción de los datos
    $sentencia = $conexion->prepare("INSERT INTO tbl_puestos (id, nombrepuesto) VALUES (null, :nombrepuesto)");
    
    // Asignar los valores que vienen del método POST
    $sentencia->bindParam(":nombrepuesto", $nombrepuesto, PDO::PARAM_STR); // Asegúrate de especificar el tipo de dato
    
    if ($sentencia->execute()) {
        header("Location: index.php");
    } else {
        echo "Error al insertar el registro en la base de datos";
    }
}
?>


<?php include("../../templates/header.php"); ?>

<div class="card">
  <div class="card-header">Puestos</div>
  <div class="card-body">
<form action="" method="post" enctype="multipart/form-data">

<div class="mb-3">
  <label for="nombrepuesto" class="form-label">Nombre del puesto</label>
  <input
    type="text"
    class="form-control"
    name="nombrepuesto"
    id="nombrepuesto"
    aria-describedby="helpId"
    placeholder="Nombre del puesto"
  />
  
</div>


<button
  type="submit"
  class="btn btn-primary"
>
  Agregar
</button>
<a
  name=""
  id=""
  class="btn btn-primary"
  href="index.php"
  role="button"
  >Cancelar</a
>



</form>



</div>
</div>
  


      <?php include("../../templates/footer.php"); ?>
     
