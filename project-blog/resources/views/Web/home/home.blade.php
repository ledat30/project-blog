@extends('Web.layout-web.index')
@section('title')
    Home
@endsection
@section('content')
{{--    cách 1--}}
{{--    @foreach($highlight as $key => $post)--}}
{{--    @if($key == 0 )--}}
{{--<div class="row">--}}
{{--    @elseif($key == 1)--}}
{{--        <div class="row margin_top_30">--}}
{{--            @elseif($key == 2)--}}
{{--                <div class="row margin_top_50">--}}
{{--    @endif--}}
{{--    <div class="col-md-5">--}}
{{--        <img src="{{$post->imageUrl()}}" alt="" />--}}
{{--    </div>--}}
{{--    <div class="col-md-6">--}}
{{--        <div class="full blog_cont">--}}
{{--            <h4><a style="color: #1a3a95 " href="{{route('post.web' , $post->slug )}}">{{$post->title}}</a></h4>--}}
{{--            <p>{{ $post->description }}</p>--}}
{{--            <small>{{\Carbon\Carbon::parse($post->created_at)->format('d-m-y')}}</small> &nbsp;--}}
{{--            <small>{{$post->user->name}}</small>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--    @endforeach--}}
{{--        <div class="last-slot">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="button_section full center margin_top_30">--}}
{{--                    <a style="margin:0;" href="{{route('category.web')}}">Read More</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--        <br>--}}
{{--        <br>--}}
{{--</div>--}}
{{--type2--}}
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    @foreach($highlight as $post)
                        <div class="blog-list clearfix">
                            <div class="blog-box row">
                                <div class="col-md-6">
                                    <div class="post-media">
                                        <a href="{{ route('post.web', $post->slug) }}" title="">
                                            <img src="{{ $post->imageUrl() }}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-6">
                                    <h1><a href="{{ route('post.web', $post->slug) }}" title="" style="color: #1a3a95 ">{{ $post->title }}</a></h1>
                                    <p>{{ $post->description }}</p>
                                    <small class="firstsmall"><a class="bg-orange" href="{{ route('categorySlug.web', $post->category->slug) }}" title="" style="color: #0e06ab">{{ $post->category->name }}</a></small>
                                    <small>{{\Carbon\Carbon::parse($post->created_at)->format('d-m-y')}}</small>
                                    <small>{{$post->user->name}}</small>
                                    <small><i class="fa fa-eye"></i> {{ $post->view_counts }}</small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div>
                        <hr class="invis">
                    @endforeach
                </div>
                <div class="last-slot">
                    <div class="col-md-12">
                        <div class="button_section full center margin_top_30">
                            <a style="margin:0;" href="{{route('category.web')}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <h2 class="widget-title" style="color: #1c22ab">Related Articles</h2>

                        <div class="trend-videos">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="tech-single.html" title="">
                                        <img src="upload/tech_video_01.jpg" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span class="videohover"></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <h4><a href="tech-single.html" title="">We prepared the best 10 laptop presentations for you</a></h4>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">
                        </div><!-- end videos -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Popular Posts</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="upload/tech_blog_08.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">5 Beautiful buildings you need..</h5>
                                        <small>12 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Let's make an introduction for..</h5>
                                        <small>11 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img src="upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Did you see the most beautiful..</h5>
                                        <small>07 Jan, 2016</small>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Follow Us</h2>

                        <div class="row text-center">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="https://www.facebook.com/le.dat.1276487" target="_blank" class="social-button facebook-button">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button twitter-button">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button google-button">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button youtube-button">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div><!-- end widget -->
                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div><!-- end row -->


                <section class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                <div class="page-wrapper">
                                    <div class="blog-top clearfix">
                                        <h1 class="pull-left" style="color: red"> Recent News <a style="color:red"><i class="fa fa-rss"></i></a></h1>
                                    </div><!-- end blog-top -->
                                    <br>
                                    @foreach($new as $post)
                                        <div class="blog-list clearfix">
                                            <div class="blog-box row">
                                                <div class="col-md-5">
                                                    <div class="post-media">
                                                        <a href="{{ route('post.web', $post->slug) }}" title="">
                                                            <img src="{{ $post->imageUrl() }}" alt="" class="img-fluid">
                                                            <div class="hovereffect"></div>
                                                        </a>
                                                    </div><!-- end media -->
                                                </div><!-- end col -->

                                                <div class="blog-meta big-meta col-md-6">
                                                    <h1><a href="{{ route('post.web', $post->slug) }}" title="" style="color: #1a3a95 ">{{ $post->title }}</a></h1>
                                                    <p>{{ $post->description }}</p>
                                                    <small class="firstsmall"><a class="bg-orange" href="{{ route('categorySlug.web', $post->category->slug) }}" title="" style="color: #0e06ab">{{ $post->category->name }}</a></small>
                                                    <small>{{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</small>
                                                    <small>{{ $post->user->name }}</small>
                                                    <small><i class="fa fa-eye"></i> {{ $post->view_counts }}</small>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>
                                        <hr class="invis">
                                    @endforeach
                                </div>
                                <div class="last-slot">
                                    <div class="col-md-12">
                                        <div class="button_section full center margin_top_30">
                                            <a style="margin:0;" href="{{route('category.web')}}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <div class="sidebar">
                                    <div class="footer_links">
                                        <h3 style="color: #1c22ab">Contact us</h3>
                                        <form action="{{route('web.contact.store')}}" method="post">
                                            @csrf
                                            <fieldset>
                                                <div class="field">
                                                    <input type="text" name="name" placeholder="Your Name" required="" />
                                                </div>
                                                <div class="field">
                                                    <input type="text" name="address" placeholder="Address" required="" />
                                                </div>
                                                <div class="field">
                                                    <input type="text" name="subject" placeholder="Subject" required="" />
                                                </div>
                                                <div class="field">
                                                    <input type="text" name="phone" placeholder="Phone number" required="" />
                                                </div>
                                                <div class="field">
                                                    <textarea name="message" placeholder="Message"></textarea>
                                                </div>
                                                <div class="field">
                                                    <div class="center">
                                                        <button class="reply_bt">Send</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div><!-- end media -->
                                    <hr class="invis">
                                    <hr>
                                    <br>

                                    <div class="widget">
                                        <h2 class="widget-title">Follow Us</h2>

                                        <div class="row text-center">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <a href="https://www.facebook.com/le.dat.1276487" target="_blank" class="social-button facebook-button">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <a href="#" class="social-button twitter-button">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <a href="#" class="social-button google-button">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <a href="#" class="social-button youtube-button">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- end widget -->
                                </div><!-- end sidebar -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end container -->
                </section>
@include('Web.layout-web.back')
@endsection
