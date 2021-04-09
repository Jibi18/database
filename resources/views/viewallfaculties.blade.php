@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3">
  <form action="/facultyread" method="post">
  {{ csrf_field() }}
  <table class="table">
   <tr>
       <th>NAME</th>
       <th>DESIGNATION</th>
       <th>COLLEGE</th>
       <th>CONTACTNO</th>
   </tr>

@foreach($faculties as $faculty)

   <tr>
       <td>{{ $faculty->fname  }}</td>
       <td>{{ $faculty->fdesignation  }}</td>
       <td>{{ $faculty->fcollege  }}</td>
       <td>{{ $faculty->fcontactno  }}</td>
       <td><a class ="btn btn-secondary" href="/faculty/{{$faculty->id}} /edit">EDIT</a></td>
  
   </tr>
 @endforeach

  </table>  
  </form>
  </div>
  </div>
  </div>
@endsection