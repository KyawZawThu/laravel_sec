@extends('backend')

@section('table')

<section class="content">

    <!-- /.card-body -->

  <!-- /.card -->

  <div class="card">
    <div class="card-header">
      <h2 class="card-title">Scout Detail</h2>
      <a href="{{route('scout.index')}}" class="fas fa-arrow-left fa-2x float-right"></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <p>Company Name: {{$scout->user->name}}</p>
      <p>Notes: {{$scout->notes}}</p>
      <p>Contact: {{$scout->user->email}}</p>
      <p>Date: {{$scout->scoutdate}}</p>
      @foreach($scout->students as $student)
      <p>Student: {{$student->name}}</p>
      @endforeach

      @if($scout->status==0)
      <form method="post" action="{{route('scout.confirmsc', $scout->id)}}">
        @csrf
        <button class="btn btn-info" type="submit">Confirm</button>
      </form>
      @elseif($scout->status==1)
      <form>
      <button class="btn btn-success">Hired</button>
      </form>
      @endif
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>

@endsection