@extends('admin.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
           <div class="container-fluid">
               <h1>Edit Category</h1>
           </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            
                            @if (Session::get('failed'))
                                <div class="alert alert-warning">{{ Session::get('failed') }}</div>
                            @endif
                            <form class="forms-sample" action="{{ route('update-category') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <div class="form-group">
                                    <label for="exampleInputName1">Kategori</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="kategori_produk" value="{{ $data->kategori_produk }}" placeholder="Kategori...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Status</label>
                                    <select class="form-control" id="exampleSelectGender" name="status">
                                        <option value="post">post</option>
                                    <option value="no_post">no_post</option>                
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="{{ route('category') }}" class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
