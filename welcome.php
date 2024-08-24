<?php
session_start();

if( !isset($_SESSION['sessionName']) ) {
    header('Location: login.php');
    exit();
}

$sessionName = $_SESSION['sessionName'];
$sessionEmail = $_SESSION['sessionEmail'];
$sessionPass = $_SESSION['sessionPass'];
 
$session_id = session_id(); 

if( isset( $_POST['unset'] ) ) {
    unset($_SESSION['sessionName']);
    // unset($_SESSION['sessionEmail']);
    // unset($_SESSION['sessionPass']);
    echo "<meta http-equiv='refresh' content='0'>";
}

if( isset( $_POST['destroy'] ) ) {
    session_unset();
    session_destroy();
    echo "<meta http-equiv='refresh' content='0'>";
}
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>WELCOME</title>
  </head>
  <body>
		
    <div class="container">
        <h2 class="text-center">WELCOME</h2>
        <p class="text-center">Session ID: <?php echo $session_id; ?></p>
        <hr>

        Name: <?php echo $sessionName; ?> <br>
        Email: <?php echo $sessionEmail; ?> <br>
        Password: <?php echo $sessionPass; ?> <br><br><br>

        
        <form  action="" method="POST" enctype="multipart/form-data">             
            <button type="submit" name="unset" class="btn btn-primary">Unset Session</button>
        </form>

        <form  action="" method="POST" enctype="multipart/form-data">             
            <input type="submit" name="destroy" value="Destroy Session" class="btn btn-primary">
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