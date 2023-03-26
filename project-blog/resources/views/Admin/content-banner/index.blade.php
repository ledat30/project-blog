@extends('Admin.layout.index')

@section('title')
    Content Banner
@endsection

@section('noidung')
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>List <small>Content</small></h2>
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
                            <table class="table table-striped table-bordered" id="datatable-buttons" style="width:100%">
                                <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contens as $conten)
                                    <tr class="even gradeC" align="center">
                                        <td>{{$conten->id }}</td>
                                        <td>{{$conten->name }}</td>
                                        <td>{{$conten->title }}</td>
                                        <td>
                                            @if($conten->status == 0)
                                                <a href="{{route('unactive.content',$conten->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                                                        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
                                                    </svg></a>
                                            @elseif($conten->status == 1)
                                                <a href="{{route('active.content',$conten->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                    </svg></a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.content.edit', $conten->id) }}">
                                                <button class="btn btn-warning ">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.content.delete', $conten->id)}}">
                                                <button class="btn btn-danger ">Delete</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('DetailContent',$conten->id)}}">
                                                <button class="btn btn-info">Detail</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
