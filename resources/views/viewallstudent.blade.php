@extends("theme")
@section("content")
   <div class="container">
   <div class="row">
   <div class="col col-12 col-sm-3 col-md-3 col-lg-3">
  <form action="/studentread" method="post">
  {{ csrf_field() }}
  <table class="table">
  <tr>
      <th>STUDNAME</th>
      <th>STUDADM</th>
      <th>STUDCOLL</th>
      <th>STUDNO</th>
  </tr>
  @foreach($studies as $student)
   <tr>
       <td>{{ $student->sname }}</td>
       <td>{{ $student->sadmno }}</td>
       <td>{{ $student->scollege }}</td>
       <td>{{ $student->scontactno }}</td>
   </tr>
   @endforeach
   </table>
   </form>

   </div></div></div> 
@endsection
