@extends('Admin.layout.index')

@section('title')
    Detail content
@endsection

@section('noidung')
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Content <small></small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            {{--id="datatable-buttons"--}}
                            <table class="table table-striped table-bordered"  style="width:100%">
                                <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Content</th>
                                    <th>Back</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contens as $conten)
                                    <tr class="even gradeC" align="center">
                                        <td>{{ $conten->id }}</td>
                                        <td>{!! $conten->content !!}</td>
                                        <td>
                                            <a href="{{route('admin.content.index')}}">
                                                <button class="btn btn-info">Back</button>
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
