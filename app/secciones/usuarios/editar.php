<?php
include("../../bd.php");

if(isset($_GET['txtID'])){
      $txtID=(isset($_GET['txtID'])) ? $_GET['txtID'] : "";

      $sentencia = $conexion->prepare("SELECT * FROM tbl_usuarios WHERE id=:id");
      $sentencia->bindParam(":id", $txtID); 
      $sentencia->execute();

      $registro = $sentencia->fetch(PDO::FETCH_ASSOC);

      $usuario = $registro["usuario"];
      $password = $registro["password"];
      $email = $registro["email"];
}

if($_POST){

  $txtID = (isset($_POST["txtID"]) ? $_POST["txtID"] : "");
  $usuario = (isset($_POST["usuario"]) ? $_POST["usuario"] : "");
  $password = (isset($_POST["password"]) ? $_POST["password"] : "");
  $email = (isset($_POST["email"]) ? $_POST["email"] : "");

  $sentencia = $conexion->prepare("UPDATE tbl_usuarios SET
  usuario=:usuario,
  password=:password,
  email=:email
  WHERE id=:id ");
  
  //asigna valores que tienen uso de :variable
  $sentencia->bindParam(":id", $txtID);
  $sentencia->bindParam(":usuario", $usuario);
  $sentencia->bindParam(":password", $password);
  $sentencia->bindParam(":email", $email);

  if ($sentencia->execute()) {
    header("Location: index.php");
  } else {
    echo "Error al actualizar el registro en la base de datos";
  }
}  

?>

<?php include("../../templates/header.php"); ?>

<div class="card">
  <div class="card-header">Datos del usuario</div>
  <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">

      <div class="mb-3">
        <label for="txtID" class="form-label">ID</label>
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
        <label for="usuario" class="form-label">Nombre del usuario</label>
        <input
          type="text"
          value="<?php echo $usuario; ?>"
          class="form-control"
          name="usuario"
          id="usuario"
          aria-describedby="helpId"
          placeholder="Nombre del usuario"
        />
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input
          type="text"
          value="<?php echo $password; ?>"
          class="form-control"
          name="password"
          id="password"
          aria-describedby="helpId"
          placeholder="password"
        />
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
          type="text"
          value="<?php echo $email; ?>"
          class="form-control"
          name="email"
          id="email"
          aria-describedby="helpId"
          placeholder="email"
        />
      </div>

      <button type="submit" class="btn btn-primary">Actualizar</button>
      <a class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>
  </div>
</div>

<?php include("../../templates/footer.php"); ?> 