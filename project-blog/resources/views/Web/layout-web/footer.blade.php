<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a href="{{route('home.web')}}"><img src="{{asset('Web/images/footer_logo.png')}}" alt="#" /></a>
                <ul class="contact_information">
                    <li><span><img src="{{asset('Web/images/location_icon.png')}}" alt="#" /></span><span class="text_cont">Hà Nội<br>Đường 181/Kim Sơn/Gia Lâm</span></li>
                    <li><span><img src="{{asset('Web/images/phone_icon.png')}}" alt="#" /></span><span class="text_cont">0386582177</span></li>
                    <li><span><img src="{{asset('Web/images/mail_icon.png')}}" alt="#" /></span><span class="text_cont">ledat30052002@gmail.com</span></li>
                </ul>
                <ul class="social_icon">
                    <h3 style="color: white">Liên kết mạng xã hội&nbsp;<i class="fa fa-rss"></i></h3>
                    <li><a href="https://www.facebook.com/le.dat.1276487" target="_blank"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="footer_links">
                    <h3>Quick link</h3>
                    <ul>
{{--                        class="fa fa-angle-right"--}}
                        <li><a href="{{route('home.web')}}"><i aria-hidden="true"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312V4.002Z"/>
                                </svg>&nbsp; Home</a></li>
                        <li><a href="{{route('category.web')}}"><i  aria-hidden="true"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-2-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                                </svg>&nbsp; Blog</a></li>
                        <li><a href="{{route('contact.web')}}"><i  aria-hidden="true"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-3-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                                </svg> &nbsp;Contact</a></li>
                        <li><a href="{{route('web.login')}}"><i  aria-hidden="true"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-4-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM7.519 5.057c-.886 1.418-1.772 2.838-2.542 4.265v1.12H8.85V12h1.26v-1.559h1.007V9.334H10.11V4.002H8.176c-.218.352-.438.703-.657 1.055ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z"/>
                                </svg> &nbsp;Login</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer_links">
                    <h3>Maps</h3>
                    <div class="map_section">
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.
                            3212139028656!2d105.96335591479416!3d21.019829686003195!2m3!1f0!2f0!3f0!
                            3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a89f5fd2dd09%3A0x2e94fba672b9c99e!
                            2zMTgxIMSQLiDEkOG7qWMgSGnhu4FuLCBQaMO6IFRo4buLLCBHaWEgTMOibSwgSMOgIE7hu5lpL
                            CBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1678369657927!5m2!1svi!2s" width="550" height="363"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

