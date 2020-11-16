@extends('backend')
@section('header')
<div class="col-sm-6">
    <ol class=" float-sm-right">
      <li class="btn"><a href="{{ route('teacher.index') }}" class="btn btn-danger"><i class="fas fa-backspace fa-2x"></i></a></li>

    </ol>
  </div>
@endsection
@section('table')


<section class="content">

<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ asset($student->photo) }}" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $student->name }}</h5>
          <h5 class="card-text">{{ $student->description }}</h5>
          <h5 class="card-text"><small class="text-muted">{{ $student->email }}</small></h5>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
