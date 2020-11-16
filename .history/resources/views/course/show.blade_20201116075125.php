@extends('backend')
@section('header')
<div class="col-sm-6">
    <ol class=" float-sm-right">
      <li class="btn"><a href="{{ route('course.index') }}" class="btn btn-danger"><i class="fas fa-backspace fa-2x"></i></a></li>

    </ol>
  </div>
@endsection
@section('table')

<div class="card col-md-6 ml-5" style="width: 40rem;">
    <img class="card-img-top" src="{{ asset($course->photo) }}" alt="Card image cap">

        <ul class="list-group card-body">
            <li class="list-group-item h4 bg-info">Course Title->{{ $course->name }}</li>
            <li class="list-group-item" h5>Course URL->{{ $course->url }}</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>

  </div>

@endsection
