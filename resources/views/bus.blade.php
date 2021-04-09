@extends("theme")
@section("content")
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
@endsection