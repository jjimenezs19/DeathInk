@extends('layout.page-layout')

@section('slider-image')
    <div class="h_slider h_slider-1" style="background-image:url('img/slide_1.jpg'); background-size: cover">
        <div id="h_content" class="h_content slide-in">
            <h1 class="h_title">We are TS, the best<br>studio in the world, <span class="h_line">really!</span></h1>
            <div class="h_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed <br>
                totam rem aperiam, eaque ipsa quae ab illo inventore.
            </div>
            {{--<a href="#" class="h_button">Buy theme</a>--}}

        </div>
        <div class="arrow bounce"></div>
    </div>
@endsection

@section('page-content')
    <!-- About us section -->
    @include('partials.about-us')
    <!-- End About us section -->

    <!-- Artist section -->
    @include('partials.artist')
    <!-- End Artist section -->

    <div class="container  img_gal">
        <a href="/gallery" class="h_button-gallery">See all tattoo images</a>
        <ul>
            <li style="background-image: url(img/tattoos/gal1.jpg); background-size:cover"><a href="img/tattoos/gal1.jpg" rel=""><span class="plus_cover"></span></a></li>
            <li style="background-image: url(img/tattoos/gal2.jpg); background-size:cover"><a href="img/tattoos/gal2.jpg" rel=""><span class="plus_cover"></span></a></li>
            <li style="background-image: url(img/tattoos/gal3.jpg); background-size:cover"><a href="img/tattoos/gal3.jpg" rel=""><span class="plus_cover"></span></a></li>
            <li style="background-image: url(img/tattoos/gal4.jpg); background-size:cover"><a href="img/tattoos/gal4.jpg" rel=""><span class="plus_cover"></span></a></li>
        </ul>
        <div class="clearfix"></div>
    </div>

    <div class="container  gradient" style="background-image:url('img/cta.jpg'); background-position: center center;  background-attachment: fixed;background-size: cover;">
        <div class="container_inner">
            <div class="row_grid cta">
                <h1 class="h_title">Do you like <span class="h_line">this?</span></h1>
                <div class="clearfix"></div>
                {{--<h6>Buy theme now :)</h6>--}}
                {{--<a href="#" class="h_button">Buy theme</a>--}}
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Post section -->
    @include('partials.tattoo-posts')
    <!-- End post section -->

    <div class="container " style="position:relative; background-image:url(img/testim.jpg); background-repeat:no-repeat; background-position:center center; background-attachment: fixed; background-size: cover; ">
        <div class="container_inner">
            <div class="row_grid" style="">
                <div class="testimonials">
                    <div class="h-column" style="background-image:url(img/avatar-1.png);">
                        <div class="testimonials_content">
                            <h2>Testimonials</h2>
                            <h1>I love this awesome studio!</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed totam rem aperiam, eaque ipsa quae ab illo inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pattern_testimonials"></div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Studio section -->
    @include('partials.studio-images')
    <!-- End Studio section -->
@endsection