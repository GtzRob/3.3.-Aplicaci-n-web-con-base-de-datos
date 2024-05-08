<?php include("../../templates/header.php"); ?>

<div class="card">
  <div class="card-header">
    Datos del empleado</div>
  <div class="card-body">
  
  <form action="" method="post">
<div class="mb-3">
  <label for="nombre" class="form-label">Nombre/s</label>
  <input
    type="text"
    class="form-control"
    name="nombre"
    id="nombre"
    aria-describedby="helpId"
    placeholder="nombre"
  />
</div>

<div class="mb-3">
  <label for="apellido" class="form-label">Apellido</label>
  <input
    type="text"
    class="form-control"
    name="apellido"
    id="apellido"
    aria-describedby="helpId"
    placeholder="apellido"
  />
  
</div>
<div class="mb-3">
  <label for="" class="form-label">Email</label>
  <input
    type="email"
    class="form-control"
    name=""
    id=""
    aria-describedby="emailHelpId"
    placeholder="abc@mail.com"
  />
  
</div>

 
<div class="mb-3">
  <label for="idpuesto" class="form-label">Puesto:</label>
  <select
    class="form-select form-select-sm"
    name="idpuesto"
    id="idpuesto"
  >
    <option selected>Select one</option>
    <option value="">New Delhi</option>
    <option value="">Istanbul</option>
    <option value="">Jakarta</option>
  </select>
</div>
 
<button
  type="submit"
  class="btn btn-success"
>
  agregar registro
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
  <div class="card-footer text-muted">
    </div>
</div>

    


      <?php include("../../templates/footer.php"); ?>
     
