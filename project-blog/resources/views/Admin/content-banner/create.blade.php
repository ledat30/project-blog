@section('title')
    Create content
@stop
@extends('admin.layout.index')
@section('noidung')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Content
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
                    <form action="{{ route('admin.content.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Name" />
                            </div>
                            <label>Title</label>
                            <input class="form-control" name="title" placeholder="Please Enter Title" />
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea id="content" name="content" class="ckeditor"></textarea>
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
