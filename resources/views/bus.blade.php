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
<form action="/busread" method="post">
{{ csrf_field() }}
<div class="container">
<div class="row">
<div class="col">
  <table class="table">
  <tr>
      <td>Busnumber</td>
      <td><input name="bno" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>Drivername</td>
      <td><input name="bdri" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>Route</td>
      <td><input name="bro" type="text" class="form-control"></td>
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