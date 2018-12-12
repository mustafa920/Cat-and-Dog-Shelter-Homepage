<!DOCTYPE html>

<html>

<head>

    <title>upload team</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 

</head>

<body>
  
 <?php include_once "includes_admin/navbar.inc.php"; ?>
        <div class="container">
         <center><h2>sponsors Upload</h2></center>
       
        <form action="includes_admin/upload_sponsors.inc.php" method="post" class="my-4">
              <div class="form-group">
                <label for="exampleInputEmail1">sponsors_logo :</label>
                <input type="text"
                class="form-control"
                name="sponsors_logo"
                placeholder="sponsors_logo"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">sponsors_address:</label>
                <input type="text"
                class="form-control"
                name="sponsors_address"
                placeholder="sponsors_address"
                >
              </div>

           <div class="form-group">
                <label for="exampleInputEmail1">sponsors_email :</label>
                <input type="email"
                class="form-control"
                name="sponsors_email"
                placeholder="sponsors_email"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">sponsors_name:</label>
                <input type="text"
                class="form-control"
                name="sponsors_name"
                placeholder="sponsors_name"
                >
              </div>
              <button type="submit" class=" btn btn-warning">
                Insert new sponsor
              </button>

              <a href="users.php">
              <button type="button" class=" btn btn-warning">
                Back
              </button>
                </a>
            </form> 

  </div>
</body>
</html>
