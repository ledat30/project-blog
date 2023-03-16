@extends('Web.layout-web.index5')
@section('title')
    Search...
@endsection
@section('content2')
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <ul class="list-group" id="menu">
                                <li  class="list-group-item menu active">Menu </li>
                                <li class="list-group-item menu1">
                                    <h4><a style="color: #2aabd2" href="{{route('category.web')}}">Home</a></h4>
                                </li>
                                @foreach($category   as $cate)
                                    <li  class="list-group-item menu">
                                        <h4><a style="color: #2aabd2" href="{{route('categorySlug.web' ,$cate->slug)}}">{{$cate->name}}</a></h4>
                                    </li>
                                @endforeach
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->

                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="sidebar">
                            <div class="widget">
                                <ul class="list-group" id="menu">
                                    <li  class="list-group-item menu active">Tìm Kiếm : {{$key}} </li>
                                </ul>
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                        <div class="blog-grid-system">
                            <div class="row">
                                @foreach($post as $tin)
                                    <div class="col-md-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="{{ route('post.web', $tin->slug) }}" title="">
                                                    <img src="{{ $tin->imageUrl() }}" alt="" class="img-fluid">
                                                    <div class="hovereffect"></div>
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta big-meta">
                                                <span class="color-orange"><a class="bg-orange" href="{{ route('categorySlug.web', $tin->category->slug) }}" title="">{{ $tin->category->name }}</a></span>
                                                <h4><a href="{{ route('post.web', $tin->slug) }}" title="">{{ $tin->title }}</a></h4>
                                                <p>{{ $tin->description }}</p>
                                                <small>{{\Carbon\Carbon::parse($tin->created_at)->format('d-m-y')}}</small>
                                                <small>{{ $tin->user->name }}</small>
                                                <small><i class="fa fa-eye"></i> {{ $tin->view_counts }}</small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                @endforeach
                            </div><!-- end row -->
                            <!-- Pagination -->
                            <div>
                                {{ $post->appends(Request::all())->links() }}
                            </div>
                            <!-- /.row -->
                        </div><!-- end blog-grid-system -->
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    @include('Web.layout-web.back')
@endsection
