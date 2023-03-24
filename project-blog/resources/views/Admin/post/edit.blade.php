@section('title')
    Edit post
@stop
@extends('admin.layout.index')

@section('noidung')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Post
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
                    <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category_id" disabled>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if($post->category_id == $category->id) selected @endif >{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>User</label>
                            <select class="form-control" name="user_id" disabled>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" @if($post->user_id == $user->id) selected @endif >{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" name="title" value="{{ $post->title }}" placeholder="Please Enter Title" />
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" name="description" value="{{ $post->description }}" placeholder="Please Enter Description" />
                        </div>
                        <div class="form-group">Role:
                            New post:
                            <input type="checkbox" class="flat" name="new_post" @if($post->new_post) checked @endif  />
                        </div>
                        <div class="form-group">Role:
                            Highlight post:
                            <input  type="checkbox" class="flat" name="highlight_post"  @if($post->highlight_post) checked @endif/>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*" />
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea id="content" name="content" class="ckeditor">{!! $post->content !!}</textarea>
                        </div>
                        <div>
                            <label>Status : </label>
                            <label class="radio-inline">
                                <input name="status" class="flat" value="0" @if($post->status) checked @endif type="radio"> Ẩn
                            </label>
                            &nbsp;
                            <label class="radio-inline">
                                <input name="status" class="flat" value="1" @if($post->status) checked @endif type="radio"> Hiện
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

