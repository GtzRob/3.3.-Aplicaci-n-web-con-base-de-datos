<?php
include("../../bd.php");

if(isset($_GET['txtID'])){
      $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";

      $sentencia = $conexion->prepare("SELECT * FROM tbl_puestos WHERE id=:id");
      $sentencia->bindParam(":id",$txtID); 
      $sentencia->execute();
      $registro=$sentencia->fetch(PDO::FETCH_LAZY);
      $nombrepuesto=$registro["nombrepuesto"];

}

if($_POST){
     
      $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
      $nombrepuesto = (isset($_POST["nombrepuesto"]) ? $_POST["nombrepuesto"] : "");
     
     $sentencia = $conexion->prepare("UPDATE tbl_puestos 
     SET nombrepuesto=:nombrepuesto
      WHERE id=:id");

      $sentencia->bindParam(":nombrepuesto", $nombrepuesto); 
      $sentencia->bindParam(":id", $txtID); 
       
      $sentencia->execute();
      header("Location: index.php");
    }

?>
<?php include("../../templates/header.php"); ?>


<div class="card">
  <div class="card-header">Puesto</div>
  <div class="card-body">
<form action="" method="post" enctype="multipart/form-data">

<div class="mb-3">
      <label for="" class="form-label">ID</label>
      <input
            type="text"
            value="<?php echo $txtID; ?>"
            class="form-control"
            readonly
            name="txtID"
            id="txtID"
            aria-describedby="helpId"
            placeholder=""
      />
 </div>



<div class="mb-3">
  <label for="nombrepuesto" class="form-label">Nombre del puesto</label>
  <input
    type="text"
    value="<?php echo $nombrepuesto; ?>"
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
  Actualizar
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
     
