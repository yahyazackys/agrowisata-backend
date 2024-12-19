@extends('admin.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1>Add Product</h1>
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
                            <form class="forms-sample" action="{{ route('store-product') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Kategori</label>
                                    <select name="kategori_id" class="form-control @error('merk_id') is-invalid @enderror">
                                        <option value="">--Pilih--</option>
                                        @foreach ($category as $k)
                                            <option {{ old('kategori_id') == $k->id ? 'selected' : '' }}
                                                value="{{ $k->id }}">{{ $k->kategori_produk }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Nama</label>
                                    <input type="text" class="form-control @error('nama_product') is-invalid @enderror"
                                        id="exampleInputEmail3" name="nama_product" placeholder="Nama"
                                        value="{{ old('nama_product') }}">
                                    @error('nama_product')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputHarga4">Harga</label>
                                    <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                        name="harga" id="exampleInputHarga4" placeholder="Harga">
                                    @error('harga')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar"
                                        class="file-upload-default @error('gambar') is-invalid @enderror">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                    @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSpesifikasi4">Keterangan</label>
                                    <textarea name="keterangan" class="form-control" id="editor" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Status</label>
                                    <select class="form-control" id="exampleSelectGender" name="status">
                                        <option value="0">Unpublish</option>
                                        <option value="1">Publish</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="{{ route('product') }}" class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
