@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col">
  <form action="/facultyeditprocess/{{$faculties->id}}" method="post">
  {{ csrf_field() }}
  <table class="table">
  <tr>
      <td>Name</td>
      <td><input value="{{ $faculties->fname }}" name="fname" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>Designation</td>
      <td><input value="{{ $faculties->fdesignation }}" name="fdes" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>College</td>
      <td><input  value="{{ $faculties->fcollege }}" name="fcol" type="text" class="form-control"></td>
  </tr>
  <tr>
      <td>Contactno</td>
      <td><input  value="{{ $faculties->fcontactno }}" name="fcon" type="text" class="form-control"></td>
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