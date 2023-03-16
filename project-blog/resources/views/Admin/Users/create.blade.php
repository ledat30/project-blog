@section('title')
    Create Account admin
@stop
@extends('admin.layout.index')

@section('noidung')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Account
                        <small>Add</small>
                    </h1>
                    @if(count($errors))
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{ $err }}
                            @endforeach
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*" />
                        </div>
                        <div class="form-group">
                            <label>Account</label>
                            <input class="form-control" name="account" type="email" placeholder="Please Enter Account" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" name="password" type="password" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label>Confirm</label>
                            <input class="form-control" name="confirm" type="password" placeholder="Please Confirm Password" />
                        </div>
                        <div>
                            <label>Role : </label>
                            <label class="radio-inline">
                                <input type="radio" class="flat" name="is_admin" value="1" /> Admin
                            </label>
                            &nbsp;
                            <label class="radio-inline">
                                <input type="radio" class="flat" name="is_admin" value="0" /> User
                            </label>
                        </div>
                        <button type="submit" class="btn btn-info">Add</button>
                        <button type="reset" class="btn btn-info">Reset</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection
