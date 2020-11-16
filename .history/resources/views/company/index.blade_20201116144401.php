@extends('backend')

@section('table')

<section class="content">

    <!-- /.card-body -->

  <!-- /.card -->

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
       <a href="{{route('company.create')}}" class="btn btn-danger float-right"><i class="fas fa-user-plus  fa-sm"></i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
        </thead>
        @php $i=1 @endphp
        <tbody>
           @foreach($companies as $row)
           <td>{{$i++}}</td>
           <td>{{$row->user->name}}</td>
           <td>{{$row->description}}</td>
           <td>{{$row->user->email}}</td>
           <td>
             <a href="{{ route('company.edit', $row->id) }}" class="btn btn-warning"><i class="fas fa-cog fa-spin"></i></a>
             <a href="{{ route('company.show', $row->id) }}" class="btn btn-info"><i class="fas fa-info-circle fa-pulse"></i></a>
             <form method="post" action="{{route('company.destroy',$row->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete')">
                    @csrf
                    @method('DELETE')
             <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
             </form>

           </td>

        </tbody>
@endforeach
      </table>
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
