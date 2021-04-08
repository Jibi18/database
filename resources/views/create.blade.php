<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col">
  <form action="/facultyread" method="post">
  {{ csrf_field() }}
  <table class="table">
  <tr>
      <td>Name</td>
      <td><input name="fname" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>Designation</td>
      <td><input name="fdes" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>College</td>
      <td><input name="fcol" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>Contactno</td>
      <td><input name="fcon" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td></td>
      <td><button class="btn btn-success">SUBMIT</button></td>
  </tr>
  </table>  
  </form>
  </div>
  </div>
  </div>
</body>
</html>