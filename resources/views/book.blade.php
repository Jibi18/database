@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col">
  <form action="/bookread" method="post">
  {{ csrf_field() }}
  <table class="table">
  <tr>
      <td>Booktitle</td>
      <td><input name="btitle" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>Bookauthor</td>
      <td><input name="baut" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>Description</td>
      <td><input name="bdes" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>Distributor</td>
      <td><input name="bdis" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>Price</td>
      <td><input name="bpri" type="text" class="form-control"></td>
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
@endsection