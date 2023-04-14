@section('title')
    Create post
@stop
@extends('admin.layout.index')
@section('noidung')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Post
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
                    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category_id">
                                <option>-Choose-</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
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
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" name="title" placeholder="Please Enter Title" />
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="description" name="description" class="ckeditor"></textarea>
                        </div>
                        <div class="form-group">Role:
                            New post:
                            <input type="checkbox" class="flat" name="new_post"  />
                        </div>
                        <div class="form-group">Role:
                            Highlight post:
                            <input  type="checkbox" class="flat" name="highlight_post"  />
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*" />
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea id="content" name="content" class="ckeditor"></textarea>
                        </div>
                        <div class="form-group">
                            <label></label>
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
                        <div class="form-group">
                            <label></label>
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
