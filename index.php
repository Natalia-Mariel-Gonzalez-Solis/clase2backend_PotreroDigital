<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Alta y Login de Usuarios</title>
  </head>
  <body>
    <h1 class="text-center">Clase 2 - Manejo de usuarios</h1>
    <h2 class="m-3">Alta de Usuarios</h2>

    <!-- Alta de usuarios -->

 <form class="row g-3 m-3" method="post" action="login.php">
    <div class="col-auto">
     <label for="staticEmail2" class="visually-hidden">Email</label>
     <input type="text" name="email" class="form-control" id="staticEmail2" placeholder="Ingrese E-mail">
   </div>

   <div class="col-auto">
     <label for="staticEmail2" class="visually-hidden">DNI</label>
     <input type="text" name="idnumber" class="form-control" id="staticEmail2" placeholder="Ingrese DNI">
   </div>

  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Ingrese Contraseña">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
  </div>
 </form>


    <!-- Login de usuarios -->

    <h2 class="m-3">Login</h2>


 <form class="row g-3 m-3" method="post" action="check.php">
   
   <div class="col-auto">
     <label for="staticEmail2" class="visually-hidden">DNI</label>
     <input type="text" name="idnumber" class="form-control" id="staticEmail2" placeholder="Ingrese DNI">
   </div>

  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Ingrese Contraseña">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Ingresar</button>
  </div>
 </form>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>