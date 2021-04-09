@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3">
<form method="post" action="/studentsearch" class="d-flex">
      {{ csrf_field() }}
        <input class="form-control me-2" name="sname" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
  </div>
  </div>
  </div>
@endsection