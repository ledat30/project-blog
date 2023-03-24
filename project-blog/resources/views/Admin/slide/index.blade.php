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
                                                <a href="{{route('unactive.slide',$slide->id)}}"><img height="45px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI6pBEvlKi5VjjOZMfuZ_UI4V8ODvF95UMhA&usqp=CAU"> </a>
                                            @elseif($slide->status == 1)
                                                <a href="{{route('active.slide',$slide->id)}}"><img height="30px" src="data:image/jpeg;base64,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"></a>
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
