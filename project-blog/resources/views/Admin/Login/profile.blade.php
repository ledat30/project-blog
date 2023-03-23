@extends('admin.layout.index')

@section('noidung')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User
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
                    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @if(\Illuminate\Support\Facades\Auth::user())
                            <div class="form-group">
                                <label>Image</label>
                                <img height="150px" src="{{\Illuminate\Support\Facades\Auth::user()->imageURL()}}" alt="">
                            </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" value="{{ auth()->user()->name }}" name="name" placeholder="Please Enter Name" readonly/>
                        </div>
                        <div class="form-group">
                            <label>Account</label>
                            <input class="form-control" type="email" name="account" value="{{ auth()->user()->account }}" placeholder="Please Enter Account" readonly/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" name="password" type="password" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label>Confirm</label>
                            <input class="form-control" name="confirm" type="password" placeholder="Please Confirm Password" />
                        </div>
                        @endif
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection
