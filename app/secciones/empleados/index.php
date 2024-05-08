<?php include("../../templates/header.php"); ?>


     <h2>Empleados</h2>

      <div class="card">
            <div class="card-header">
                  
                  <a
                        name=""
                        id=""
                        class="btn btn-primary"
                        href="crear.php"
                        role="button"
                        >Agregar registro</a>
                  
            </div>
            <div class="card-body">
         <div
            class="table-responsive"
         >
            <table
                  class="table"
            >
                  <thead class="table">
                        <caption>
                              Empleados
                        </caption>
                        <tr>
                              <th >Nombre</th>
                              <th>Apellido</th>
                              <th>puesto</th>
                              <th>Correo electronico</th>
                              <th>acciones</th>

                              
                        </tr>
                  </thead>
                  <tbody class="table-group-divider">
                        <tr
                              class="table-primary"
                        >
                              <td scope="row">Jose Andres</td>
                              <td>Gutierrez</td>
                              <td>Director ejecutivo</td>
                              <td>andes@gmail.com</td>
                              <td><a
                                    name=""
                                    id=""
                                    class="btn btn-info"
                                    href="#"
                                    role="button"
                                    >Editar</a
                              >
                              <a
                                    name=""
                                    id=""
                                    class="btn btn-danger"
                                    href="#"
                                    role="button"
                                    >Eliminar</a
                              >
                              
                              </td>
                        </tr>
                        <tr
                              class="table-primary"
                        >
                              <td scope="row">Item</td>
                              <td>Item</td>
                              <td>Item</td>
                        </tr>
                  </tbody>
                  <tfoot>
                        
                  </tfoot>
            </table>
         </div>
         
      
      </div>
      




      <?php include("../../templates/footer.php"); ?>
     
