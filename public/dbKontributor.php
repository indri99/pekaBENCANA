<?php 
  session_start();

  // variable declaration
  $name = "";
  $username = "";
  $email    = "";
  $errors = array(); 
  $_SESSION['success'] = "";

  // connect to database
  $db = mysqli_connect('localhost', 'root', '', 'pekabencana');

  // REGISTER USER
  if (isset($_POST['reg_kontributor'])) {
    // receive all input values from the form
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);

    // form validation: ensure that the form is correctly filled
    if (empty($name)) { array_push($errors, "Name is required"); }
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password1)) { array_push($errors, "Password is required"); }

    if ($password1 != $password2) {
      array_push($errors, "The two passwords do not match");
    }

    // register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = md5($password1);//encrypt the password before saving in the database
      
      mysqli_query($db, "INSERT INTO kontributor (nama, username, email, password) VALUES ('$name', '$username', '$email', '$password1')");

      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: kontributor.php');
    }

  }

  // ... 

  // LOGIN USER
  if (isset($_POST['login_kontributor'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
      $password = md5($password);
      $results = mysqli_query($db, "SELECT * FROM kontributor WHERE username='$username' AND password='$password'");

      if (mysqli_num_rows($results) == 0) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: kontributor.php');
      }else {
        array_push($errors, "Wrong username/password combination");
      }
    }
  }

?>