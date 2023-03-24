@section('title')
    Edit Content
@stop
@extends('admin.layout.index')

@section('noidung')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Content
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
                    <form action="{{ route('admin.content.update', $conten->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" value="{{ $conten->name }}" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" name="title" value="{{ $conten->title }}" placeholder="Please Enter Title" />
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea id="content" name="content" class="ckeditor">{!! $conten->content !!}</textarea>
                        </div>
                        <div>
                            <label>Status : </label>
                            <label class="radio-inline">
                                <input name="status" class="flat" value="0" @if($conten->status) checked @endif type="radio"> Ẩn
                            </label>
                            &nbsp;
                            <label class="radio-inline">
                                <input name="status" class="flat" value="1" @if($conten->status) checked @endif type="radio"> Hiện
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

