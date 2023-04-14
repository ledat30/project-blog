@extends('admin.layout.index')
@section('title')
   List Account admin
@stop
@section('noidung')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Account
                        <small>List</small>
                    </h1>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-bordered table-striped" id="datatable-fixed-header">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Account</th>
                        <th>Is admin</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <a href="{{route('users.create')}}">
                        <button class="btn btn-success">Thêm người dùng</button>
                    </a>
                    @foreach($users as $user)
                        <tr class="even gradeC" align="center">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td><img src="{{$user->imageURL()}}" alt="" width="50px" height="auto"></td>
                            <td>{{ $user->account }}</td>
                            <td>{{ $user->is_admin ? "✅" : "❌" }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}">
                                    <button   class="btn btn-warning ">Edit</button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection
