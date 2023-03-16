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
