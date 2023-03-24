@extends('Admin.layout.index')

@section('title')
    Slide
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
                            <table class="table table-striped table-bordered" id="datatable-buttons" style="width:100%">
                                <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($slides as $slide)
                                    <tr class="even gradeC" align="center">
                                        <td>{{$slide->id }}</td>
                                        <td>{{$slide->name }}</td>
                                        <td><img src="{{$slide->image()}}" alt="" width="300px" height="200px"></td>
                                        <td>
                                            @if($slide->status == 0)
                                                <a href="{{route('unactive.slide',$slide->id)}}"><img height="45px" src="https://file.removal.ai/preview/tmp-641d3b4f00ec4.png"> </a>
                                            @elseif($slide->status == 1)
                                                <a href="{{route('active.slide',$slide->id)}}"><img height="30px" src="https://file.removal.ai/preview/tmp-641d38b7d6021.png"></a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.slide.edit', $slide->id) }}">
                                                <button class="btn btn-warning ">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.slide.delete', $slide->id)}}">
                                                <button class="btn btn-danger ">Delete</button>
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
