@extends('admin.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1>Add Category</h1>
            </div>
         </div>
        <div class="container-fluid">
            <div class="row">
                {{-- form input --}}
                <div class="col-12 grid-margin stretch-card p-3">
                    <div class="card">
                        <div class="card-body">
                            
                            @if (Session::get('failed'))
                                <div class="alert alert-warning">{{ Session::get('failed') }}</div>
                            @endif
                            <br>
                            <form class="forms-sample" action="{{ route('store-category') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Kategori Produk</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="kategori_produk" placeholder="Name">
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
            </div>
        </div>
    </div>
@endsection
