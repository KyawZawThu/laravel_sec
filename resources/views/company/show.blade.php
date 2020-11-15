@extends('backend')

@section('table')

<section class="content">

    <!-- /.card-body -->

  <!-- /.card -->

  <div class="card">
    <div class="card-header">
      <h2 class="card-title">Company Detail</h2>
      <a href="{{route('company.index')}}" class="fas fa-arrow-left float-right fa-2x"></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
      <div class="col-md-6">
      <img src="{{asset($company->photo)}}" class="w-50 h-100">
      </div>
      <div class="col-md-6">
      <p>Name: {{$company->name}}</p>
      <p>Address: {{$company->address}}</p>
      <p>Description: {{$company->description}}</p>
      <p>Email: {{$company->description}}</p>
      </div>
    </div>

      
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