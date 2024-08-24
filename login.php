<?php
session_start();

$session_id = session_id();

if( isset($_SESSION['sessionName']) && !empty( $_SESSION['sessionName'] ) ) {
  header('Location: welcome.php');
  exit();
}


if( isset( $_POST['submit'] ) ){
  $inputName = $_POST['inputName'];
  $inputEmail = $_POST['inputEmail'];
  $inputPass = $_POST['inputPass'];

  $_SESSION['sessionName'] = $inputName;
  $_SESSION['sessionEmail'] = $inputEmail;
  $_SESSION['sessionPass'] = $inputPass;

  header("Location: welcome.php");
}

?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SESSION</title>
  </head>
  <body>
		
        <div class="container">
            <h2 class="text-center">SESSION</h2>
            <p class="text-center">Session id: <?php echo $session_id; ?></p>
            
            <form  action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" name="inputName">
                </div>
                
                <div class="mb-3">
                <label for="inputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="inputEmail" name="inputEmail">
                </div>

                <div class="mb-3">
                <label for="inputPass" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPass" name="inputPass">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
			

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>