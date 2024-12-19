@extends('admin.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <h1>ini User</h1>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    {{-- <div class="card-header">
                        <h4 class="card-title col-lg-11">Data User</h4>
                        <p class="card-description">
                            <a href="{{ route('add-user') }}" class="btn btn-sm btn-primary">Tambah</a>
                        </p>
                    </div> --}}
                    <div class="card-header justify-content-between d-flex">
                        <h3 class="card-title col-lg-11">Simple Full Width Table</h3>
                        <a href="{{ route('add-user') }}" class="btn btn-sm btn-primary">Tambah</a>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table">

                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>No Handphone</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $user)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->no_hp }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            <a href="{{ route('edit-user', $user->id) }}"
                                                class="btn btn-sm btn-success">Edit</a>
                                            <a href="{{ route('delete-user', $user->id) }}" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Yakin hapus data ini?')">Hapus</a>

                                        </td>
                                        {{-- <td>
                                            @if (Auth::user()->role == '1')
                                                    <a href="{{ route('edit-user', $user->id ) }}" class="btn btn-sm btn-success">Edit</a>

                                                    @if (Auth::user()->id != $user->id)
                                                        <a href="{{ route('delete-user', $user->id ) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                                                    @endif   

                                                @elseif(Auth::user()->role == '2')
                                                    @if (Auth::user()->id == $user->id)
                                                        <a href="{{ route('edit-user', $user->id ) }}" class="btn btn-sm btn-success">Edit</a>
                                                    @endif
                                                    
                                                @endif
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
