@extends('Web.layout-web.index4')
@section('title')
    Contact
@endsection
@section('content4')
    <div class="contact-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contactheading">
                        <h3>contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section -->
    <section class="layout_padding">
        <div class="container">
            <div class="row">
                @if(session('success'))
                    <div class="col-lg-12">
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
                <div class="col-md-12">
                    <div class="full comment_form">
                        <fieldset>
                            <form action="{{route('web.contact.store')}}" method="post">
                                    @csrf
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <input type="text" name="name" placeholder="Name"  />
                                            <input type="text" name="address" placeholder="Address"  />
                                            <input type="text" name="phone" placeholder="Phone"  />
                                            <input type="text" name="subject" placeholder="Subject"  />
                                        </div>
                                        <div class="col-md-6">
                                            <textarea class="wdt" name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="row margin_top_30">
                                        <div class="col-md-12">
                                            <div class="center">
                                                <button>Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

@endsection
