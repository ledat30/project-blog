@section('title')
    Create Slide
@stop
@extends('admin.layout.index')
@section('noidung')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slide
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
                <div class="col-lg-9" style="padding-bottom:120px">
                    <form action="{{ route('admin.slide.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label>User</label>
                            <select class="form-control" name="user_id">
                                <option>-Choose-</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label>Status : </label>
                            <label class="radio-inline">
                                <input type="radio" class="flat" name="status" value="1" /> Hiện
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="flat" name="status" value="0" /> Ẩn
                            </label>
                        </div>
                        <button type="submit" class="btn btn-danger">Add</button>
                        <button type="reset" class="btn btn-info">Reset</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection
