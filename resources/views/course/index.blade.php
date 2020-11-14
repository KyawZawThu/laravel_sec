@extends('backend')

@section('table')
<section class="content">

    <!-- /.card-body -->

  <!-- /.card -->

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Course</h3>
      <a href="{{route('course.create')}}" class="btn btn-danger float-right"><i class="fas fa-user-plus  fa-sm"></i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>url</th>



            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp

            @foreach($courses as $row)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $row ->name }}</td>
                    <td>{{ $row->url }}</td>



                    <td>
                        <a href="{{ route('course.edit', $row->id) }}" class="btn btn-warning"><i class="fas fa-cog fa-spin"></i></a>
                        <a href="{{ route('course.show', $row->id) }}" class="btn btn-info"><i class="fas fa-info-circle fa-pulse"></i></a>
                        <form method="post" action="{{ route('teacher.destroy', $row->id) }}" class="d-inline-block" onsubmit="return confirm('Are you Sure to Delete?')">
                          @csrf
                          @method('DELETE')
                          <input type="submit" name="btnsubmit" value="Delete"  class="mt-1 btn btn-danger ">


                        </form>
                      </td>

                </tr>
            @endforeach
        </tbody>

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
