<?php
include("todo.class.php");
include("controller.php");
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
<div class="container">
  <div class="row">
    <div class="col-4 p-2 rounded bg-white mx-auto mt-5">
    <h3>New Task: </h3>
      <form action="" class="input-group-append" method="post" autocomplete="off">
        <div class="input-group mb-3">
          <input required type="text" value="<?= isset($_GET['action']) && $_GET['action'] == 'edit' ? $_GET['todo'] : ''; ?>" name="task" class="form-control" name id="task" placeholder="write a task ...">
            <div class="input-group-append">
              <input name="<?= isset($_GET['action']) && $_GET['action'] == 'edit' ? 'updateLast' : 'addNew'; ?>" type="submit" value="<?php echo isset($_GET['action']) && $_GET['action'] == 'edit' ? 'Edit' : 'Add'; ?>" class="btn btn-primary" />
                <input type="hidden" type="submit" value="<?= isset($_GET['action']) && $_GET['action'] == 'edit' ? $_GET['id'] : ''; ?>" name="task_id"/>
            </div>
        </div>
      </form>
    </div>

  <div class="col-4 p-2 rounded bg-white mx-auto mt-5">
    <h3>Do: </h3>
    <?php $todo->show_todo(); ?>
    </div>
    
    <div class="col-4 p-2 rounded bg-white mx-auto mt-5">
    <h3>Done: </h3>
    <?php $todo->show_todo(1); ?>
    

  
  </body>

</html>