<div class="banner-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div id="slider_main" class="carousel slide" data-ride="carousel">
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <?php $i=0; ?>
                        @foreach($slide as $sl)
                        <div
                            @if($i == 0)
                            class="carousel-item active"
                        @else
                            class="carousel-item"
                            @endif
                        >
                            <?php $i++; ?>
                            <img src="{{$sl->image()}}" alt="" />
                        </div>
                        @endforeach
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </a>
                    <a class="carousel-control-next" href="#slider_main" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="full slider_cont_section">
                    @foreach($conten as $ct)
                    <h4>{{$ct->name}}</h4>
                    <h3>{{$ct->title}}</h3>
                    <h6>{!! $ct->content !!}</h6>
                    @endforeach
                    <div class="button_section">
                        <a href="{{route('category.web')}}">Read More</a>
                        <a href="{{route('contact.web')}}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
