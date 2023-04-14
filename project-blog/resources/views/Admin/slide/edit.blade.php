@section('title')
    Edit Slide
@stop
@extends('admin.layout.index')

@section('noidung')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slide
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
                    <form action="{{ route('admin.slide.update', $slide->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" value="{{ $slide->name }}" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*" />
                        </div>
                        <div class="form-group">
                            <label>User</label>
                            <select class="form-control" name="user_id" disabled>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" @if($post->user_id == $user->id) selected @endif >{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label>Status : </label>
                            <label class="radio-inline">
                                <input name="status" class="flat" value="0" @if($slide->status) checked @endif type="radio"> Ẩn
                            </label>
                            &nbsp;
                            <label class="radio-inline">
                                <input name="status" class="flat" value="1" @if($slide->status) checked @endif type="radio"> Hiện
                            </label>
                        </div>
                        <button type="submit" class="btn btn-danger">Update</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection

