<?php include("conexion-db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="active">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="test" name="title" class="form-control" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" cols="30" rows="2" class="form-control" placeholder="Task Description"></textarea>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table-bordered w-100">
        <thead>
          <tr>
            <th>id</th>
            <th>nombre de mascota</th></th>
            <th>tipo de mascota</th>
            <th>raza</th>
            <th>sexo</th>
            <th>nombre de cliente</th>
            <th>fecha de nacimiento</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM mascota";
          $result_tasks = mysqli_query($conn, $query);

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo$row['id_mascota']; ?></td>
            <td><?php echo$row['nombre']; ?></td>
            <td><?php echo$row['tipo_de_mascota']; ?></td>
            <td><?php echo$row['raza']; ?></td>
            <td><?php echo$row['sexo']; ?></td>
            <td><?php echo$row['nombre_cliente']; ?></td>
            <td><?php echo$row['fecha_nacimiento']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

