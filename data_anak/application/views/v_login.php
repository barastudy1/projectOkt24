<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("asesoris/img/anak_login.png");

  min-height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 350px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: black;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

</style>
</head>
<body>

<div class="bg-img">
    <form class="container" method="post" action="<?= base_url('login'); ?>">
       <h1><center>LOGIN</center></h1>
              <div class="form-group">
              <label for="username" class="sr-only">Username</label>
              <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                <small><span class="text-danger"><?= form_error('username'); ?></span></small>
              </div>
              <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <small><span class="text-danger"><?= form_error('password'); ?></span></small>
              </div>
              <!--
              <div class="form-group">
                <label>Level</label>
                <p>
                <select name="level" class="inputan">  
                <option value="1">AdminK</option>
                <option value="2">AdminD</option>
                <option value="3">Masyarakat</option>
                </select>
              <br><br><br>
              </div> -->
              <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
</body>
</html>
