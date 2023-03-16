@extends('Admin.layout.index')

@section('title')
    Category
@endsection

@section('noidung')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>List <small>Category</small></h2>
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
                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr class="even gradeC" align="center">
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{route('admin.category.edit', $category->id) }}">
                                            <button   class="btn btn-warning ">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.category.delete', $category->id)}}">
                                            <button   class="btn btn-danger">Delete</button>
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
