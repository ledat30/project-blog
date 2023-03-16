@extends('Web.layout-web.index3')
@section('title')
    Category
@endsection
@section('content2')
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <ul class="list-group" id="menu">
                                <li  class="list-group-item menu active">Menu</li>
                                <li class="list-group-item menu1">
                                    <h4><a style="color: #2aabd2" href="{{route('category.web')}}">Home</a></h4>
                                </li>
                                @foreach($categories as $category)
                                    <li  class="list-group-item menu">
                                        <h4><a style="color: #2aabd2" href="{{route('categorySlug.web' ,$category->slug)}}">{{$category->name}}</a></h4>
                                    </li>
                                @endforeach
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->

                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-grid-system">
                            <div class="row">
                                @foreach($posts as $post)
                                    <div class="col-md-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="{{ route('post.web', $post->slug) }}" title="">
                                                    <img src="{{ $post->imageUrl() }}" alt="" class="img-fluid">
                                                    <div class="hovereffect"></div>
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta big-meta">
                                                <span class="color-orange"><a class="bg-orange" href="{{ route('categorySlug.web', $post->category->slug) }}" title="">{{ $post->category->name }}</a></span>
                                                <h4><a href="{{ route('post.web', $post->slug) }}" title="">{{ $post->title }}</a></h4>
                                                <p>{{ $post->description }}</p>
                                                <small>{{\Carbon\Carbon::parse($post->created_at)->format('d-m-y')}}</small>
                                                <small>{{ $post->user->name }}</small>
                                                <small><i class="fa fa-eye"></i> {{ $post->view_counts }}</small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                @endforeach
                            </div><!-- end row --> {{ $posts->links() }}
                        </div><!-- end blog-grid-system -->
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->

    </section>
    @include('Web.layout-web.back')
@endsection
