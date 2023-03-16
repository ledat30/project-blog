@extends('admin.layout.index')
@section('title')
    Edit Account admin
@stop
@section('noidung')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Account
                        <small>Edit</small>
                    </h1>
                    @if(count($errors))
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{ $err }}
                            @endforeach
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" value="{{ $user->name }}" name="name" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*" />
                        </div>
                        <div class="form-group">
                            <label>Account</label>
                            <input class="form-control" type="email" value="{{ $user->account }}" placeholder="Please Enter account" readonly/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" name="password" type="password" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label>Confirm</label>
                            <input class="form-control" name="confirm" type="password" placeholder="Please Confirm Password" />
                        </div>
                        <div >
                            <label>Role : </label>
                            <label class="radio-inline">
                                <input name="is_admin" class="flat" value="0" @if($user->is_admin) checked @endif type="radio"> User
                            </label>
                            &nbsp;
                            <label class="radio-inline">
                                <input name="is_admin" class="flat" value="1" @if($user->is_admin) checked @endif type="radio"> Admin
                            </label>
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection
