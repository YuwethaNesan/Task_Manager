<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>TASK MANAGER</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">Add Today Task</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
    <a href="records.php">View Records</a>

      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $insert = $model->insert();

          ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="">Task Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Task No</label>
              <input type="text" name="no" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Task Description</label>
              <textarea name="description" id="" cols="" rows="3" class="form-control"><?php echo $row['instruction']; ?></textarea>

            </div>
            <div class="form-group">
              <label for="">Task Instruction</label>
              <textarea name="instruction" id="" cols="" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>