<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Rinat</title>
</head>
<body>
    <div class="d-flex bd-highlight mb-2 bc">
        <a class="navbar-brand me-auto p-2 bd-highlight logo-hover" href="index.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlFn9cvjr_wlX0t0wLmyQZp2vNBR27N0saWg&usqp=CAU" alt="" width="30" height="24" class="d-inline-block align-text-top"> Rinat
        </a>
        <a class="p-2 bd-highlight" href="#">
            <img src="https://futuredreamprojects.com/logo/dd.jpg" alt="" width="26" height="26" class="d-inline-block align-text-top">
            <a class="nav-link mt-1 ps-0 hover" href="avtorization.html">Sign in</a>
        </a>
    </div>
    <div class="form">
    <h2>Log in</h2>
  <input type="text" name="username" id="username">
  <input type="password" name="password" id="password">
  <input type="submit" value="Submit" onclick="login()">
<script>
  function login(){
    console.log("Submit")
    username = document.getElementById("username");
    password = document.getElementById('password');
    if(username.value == "rinat" && password.value == "qwerty"){
      console.log("Correct username and password");
      window.location.replace("open.html");
    }
  }
</script>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
