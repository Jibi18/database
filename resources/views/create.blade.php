@extends("theme")
@section("content")
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
@endsection