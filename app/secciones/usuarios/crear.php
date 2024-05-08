<?php
 include("../../bd.php");
 if($_POST){

  $usuario = (isset($_POST["usuario"]) ? $_POST["usuario"] : "");
  $password = (isset($_POST["password"]) ? $_POST["password"] : "");
  $email = (isset($_POST["email"]) ? $_POST["email"] : "");


  $sentencia = $conexion->prepare("INSERT INTO tbl_usuarios (id,usuario,password,email)
  VALUES (NULL,:usuario,:password,:email) ");
  //asigna valores que tienen uso de :variable
   $sentencia->bindParam(":usuario", $usuario);
   $sentencia->bindParam(":password", $password);
   $sentencia->bindParam(":email", $email);
   if ($sentencia->execute()) {
    header("Location: index.php");
} else {
    echo "Error al insertar el registro en la base de datos";
}
}
 ?>

<?php include("../../templates/header.php"); ?>


<div class="card">
  <div class="card-header">Datos del Usuario</div>
  <div class="card-body">
<form action="" method="post" enctype="multipart/form-data">

<div class="mb-3">
  <label for="usuario" class="form-label">Nombre del usuario</label>
  <input
    type="text"
    class="form-control"
    name="usuario"
    id="usuario"
    aria-describedby="helpId"
    placeholder="Nombre del usuario"
  />
  
</div>

<div class="mb-3">
     <label for="" class="form-label">Password</label>
     <input
          type="password"
          class="form-control"
          name="password"
          id="password"
          aria-describedby="helpId"
          placeholder="Escriba su contraseña"
     />
</div>

<div class="mb-3">
     <label for="email" class="form-label">Email:</label>
     <input
          type="email"
          class="form-control"
          name="email"
          id="email"
          aria-describedby="helpId"
          placeholder="escriba su Email"
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
     
