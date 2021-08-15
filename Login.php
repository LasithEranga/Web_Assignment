<?php

session_start();

include('db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/4f128951c5.js" crossorigin="anonymous"></script>
  <style>
    .card-body {
      background-color: #f1ffeb;
    }
  </style>
</head>

<body>
  <div class="d-flex justify-content-center vh-100 align-items-center"
    style="background-image: url('./background.jpg');">
    <div class="card col-md-8">
      <div class="card-body d-flex">
        <div class="col-md-6 bg-dark"
          style="background-image: url('./images.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat;">
        </div>
        <div class="col-md-6 p-2 ps-4">
          <P class="fs-2 pb-4">SAMADHI CHILDREN HOME</P>
          <form id="form" class="pb-5" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Username</label>
              <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" >
            </div>
            <div class="mb-4">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="pass" >
            </div>
            <button type="submit " class="btn btn-primary" name="login" >Submit</button>
          </form>
          
        </div>
      </div>
    </div>
  </div>
  <script>
    function validate() {
      document.getElementById("form").submit();
    }

    function allLetter(inputtxt) {
      var letters = /^[A-Za-z]+$/;
      if (inputtxt.value.match(letters)) {
        return true;
      }
      else {
        alert("message");
        return false;
      }
    }
  </script>
</body>

</html>

<?php

if(isset($_POST['login'])){

    $uname = mysqli_real_escape_string($Con,$_POST['name']);
    
    $pass = mysqli_real_escape_string($Con,$_POST['pass']);
    $query = "SELECT * FROM staff WHERE name='$uname' AND password='$pass'";
    $run_admin = mysqli_query($Con,$query);
    $count = mysqli_num_rows($run_admin);

if($count==1){
    $_SESSION['username']=$uname;
    echo "<script>alert('You are Logged in into system ')</script>";
    echo "<script>window.open('home.php?overview','_self')</script>";

}
else {
  echo "<script>alert('Username or Password is Wrong')</script>";

}

}

?>