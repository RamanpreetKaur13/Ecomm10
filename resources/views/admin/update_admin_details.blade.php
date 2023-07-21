@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
          <div class="col-sm-6">
            <h1>Admin Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6 mx-auto">
            <!-- general form elements -->
           
            <!-- Horizontal Form -->
              @if (Session::has('success_msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong></strong> {{ Session::get('success_msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                @if (Session::has('error_msg'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error :</strong> {{ Session::get('error_msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

            <div class="card card-info">
              
              <div class="card-header">
                <h3 class="card-title">Update Admin Details</h3>
                
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="{{ route('admin.update-admin-details') }}" >
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ Auth::guard('admin')->user()->email }}" disabled style="background: #666;">
                    </div>
                    
                  </div>
                  <div class="form-group row">
                    <label for="admin_name" class="col-sm-4 col-form-label">Name <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="Enter the Name" value="{{ Auth::guard('admin')->user()->name }}">
                      @error('admin_name')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="mobile" class="col-sm-4 col-form-label">Mobile <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter the mobile number" value="{{ Auth::guard('admin')->user()->mobile }}">
                      @error('mobile')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                  <button type="reset" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
