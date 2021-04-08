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
<form action="/studentread" method="post">
{{ csrf_field() }}
  <table class="table">
  <tr>
      <td>Name</td>
      <td><input name="sname" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>Admno</td>
      <td><input name="sno" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>College</td>
      <td><input name="scol" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>Contactno</td>
      <td><input name="scon" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td></td>
      <td><button class="btn btn-success">SUBMIT</button></td>
  </tr>
  </table>  
  </div>
  </div>
  </div>
  </form>
</body>
</html>