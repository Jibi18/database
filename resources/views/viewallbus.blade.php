@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3">
  <form action="/busread" method="post">
  {{ csrf_field() }}
  <table class="table">
   <tr>
       <th>NUMBER</th>
       <th>DRIVER</th>
       <th>ROUTE</th>
   </tr>

@foreach($buses as $bus)

   <tr>
       <td>{{  $bus->bnumber }}</td>
       <td>{{ $bus->bdriver  }}</td>
       <td>{{ $bus->broute  }}</td>
   </tr>
 @endforeach

  </table>  
  </form>
  </div>
  </div>
  </div>
@endsection