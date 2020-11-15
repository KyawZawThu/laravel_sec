@extends('backend')

@section('table')

<section class="content">

    <!-- /.card-body -->

  <!-- /.card -->

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Confirm</a>
        </li>
      </ul>
    <div class="tab-content mt-3" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>URL</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @php 
            $i=1;
          @endphp
              @foreach($pending_projects as $row)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->url}}</td>
                <td>
                  <a href="{{ route('project.show', $row->id) }}" class="btn btn-info"><i class="fas fa-info-circle fa-pulse"></i></a>
                </td>
              </tr>
               @endforeach
        </tbody>

      </table>
    </div>
    <!-- /.card-body -->

     <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
       <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>URL</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
           @php 
            $i=1;
          @endphp
              @foreach($confirmed_projects as $row)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->url}}</td>
                <td>Completed</td>
                <td>
                  <a href="{{route('project.show',$row->id)}}" class="fas fa-info-circle"></a>                
                </td>
        </tbody>
        @endforeach
      </table>
    </div>
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
