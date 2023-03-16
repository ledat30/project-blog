@extends('Admin.layout.index')

@section('title')
    Post
@endsection

@section('noidung')
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>List <small>Post</small></h2>
                <div class="clearfix"></div>
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
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            {{--                            id="datatable-buttons"--}}
                            <table class="table table-striped table-bordered" id="datatable-buttons" style="width:100%">
                                <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>View counts</th>
                                    <th>New post</th>
                                    <th>Highlight post</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr class="even gradeC" align="center">
                                        <td>{{$post->id }}</td>
                                        <td>{{$post->title }}</td>
                                         <td><img src="{{$post->imageUrl()}}" alt="" width="50px" height="auto"></td>
                                        <td>{{$post->category->name }}</td>
                                        <td>{{$post->user->name}}</td>
                                        <td>{{$post->view_counts}}</td>
                                        <td>{{$post->new_post == 1 ? "✅" : "❌"}}</td>
                                        <td>{{$post->highlight_post == 1 ? "✅" : "❌" }}</td>
                                        <td>
                                            <a href="{{route('admin.post.edit', $post->id) }}">
                                                <button class="btn btn-warning ">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.post.delete', $post->id)}}">
                                                <button class="btn btn-danger ">Delete</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('DetailPost',$post->id)}}">
                                                <button class="btn btn-info">Detail</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{--phân trang--}}
                            {!! $posts->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
