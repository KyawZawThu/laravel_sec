@extends('backend')
@section('header')
<div class="col-sm-6">
    <ol class=" float-sm-right">
      <li class="btn"><a href="{{ route('course.index') }}" class="btn btn-danger"><i class="fas fa-backspace fa-2x"></i></a></li>

    </ol>
  </div>
@endsection
@section('table')

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>

@endsection
