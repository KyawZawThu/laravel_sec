@extends('backend')

@section('table')

<section class="content">

    <!-- /.card-body -->

  <!-- /.card -->

  <div class="card">
    <div class="card-header">
      <h2 class="card-title">Project Detail</h2>
      <a href="{{route('project.index')}}" class="fas fa-arrow-left fa-2x float-right"></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <p>ProjectName: {{$project->name}}</p>
      <p>ProjectURL: {{$project->url}}</p>
      <p>Description: {{$project->description}}</p>
      <p>Student: {{$project->student->name}}</p>

      @if($project->status==0)
      <form method="post" action="{{route('project.confirm', $project->id)}}">
        @csrf
        <button class="btn btn-info" type="submit">Confirm</button>
      </form>
      @elseif($project->status==1)
      <form>
      <button class="btn btn-success">Success Project</button>
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