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
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DATABASE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Addfaculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/viewallfaculties">viewfaculty</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/student">Addstudent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/viewallstudent">viewstudent</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/bus">Addbus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/viewallbus">viewbus</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/book">Addbook</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/viewallbook">viewbook</a>
        </li>  
      </ul>

      <form method="post" action="/facultysearch" class="d-flex">
      {{ csrf_field() }}
        <input class="form-control me-2" name="fname" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
    </div>
  </div>
</nav>
@yield("content");
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>