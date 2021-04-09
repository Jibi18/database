@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3">
  <form action="/bookread" method="post">
  {{ csrf_field() }}
  <table class="table">
   <tr>
       <th>TITLE</th>
       <th>AUTHOR</th>
       <th>DESCRIPTION</th>
       <th>DISTRIBUTOR</th>
       <th>PRICE</th>
   </tr>

@foreach($books as $book)

   <tr>
       <td>{{ $book->btitle  }}</td>
       <td>{{  $book->bauthor  }}</td>
       <td>{{  $book->bdescription  }}</td>
       <td>{{  $book->bdistributor  }}</td>
       <td>{{  $book->bprice  }}</td>
   </tr>
 @endforeach
 
  </table>  
  </form>
  </div>
  </div>
  </div>
@endsection