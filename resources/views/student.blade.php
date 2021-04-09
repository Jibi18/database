@extends("theme")
@section("content")
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
@endsection