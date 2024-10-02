<?php

class userform{

function sign_up(){

?>


<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="add.css">
<meta name="viewport" content="wwidth=device-width,intial-scale=1.0"/>
<meta charset="UTF-8">
<html>
<form action="userform2.php" method="POST">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>WELCOME TO THE SIGNUP PAGE</h1>
</head>
<body>
  <div class="row mb-3">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" id="username">
    </div>
  </div>
  <div class="row mb-3">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="pass" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="password">
    </div>
  </div>
  <div class="row mb-3">
    <label for="confirmpass" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="confirmpass" id="confirmpass">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php

}

}

?>

  