@extends('layout.page-layout')

@section('slider-image')
<div style="background-image:url(img/gallery.jpg); background-repeat:no-repeat; background-attachment: fixed; " class="h_slider-p h_slider-page">
    <div id="h_content" class="h_content slide-in">
        <h1 class="h_title">Gallery</h1>
    </div>
</div>
@endsection
@section('page-content')
<div class="container gal-grid" style="background-color:#000000;">
    <div class="container_inner">
        <ul>
            <li style="background-image: url(img/gal1.jpg); background-size:cover"><a class="lightboxes" href="img/gal1.jpg" rel=""><span class="plus_cover"></span></a></li>
            <li style="background-image: url(img/gal2.jpg); background-size:cover"><a class="lightboxes" href="img/gal2.jpg" rel=""><span class="plus_cover"></span></a></li>
            <li style="background-image: url(img/gal3.jpg); background-size:cover"><a class="lightboxes" href="img/gal3.jpg" rel=""><span class="plus_cover"></span></a></li>
            <li style="background-image: url(img/gal4.jpg); background-size:cover"><a class="lightboxes" href="img/gal4.jpg" rel=""><span class="plus_cover"></span></a></li>
            <li style="background-image: url(img/gal5.jpg); background-size:cover"><a class="lightboxes" href="img/gal5.jpg" rel=""><span class="plus_cover"></span></a></li>
            <li style="background-image: url(img/gal6.jpg); background-size:cover"><a class="lightboxes" href="img/gal6.jpg" rel=""><span class="plus_cover"></span></a></li>
            <li style="background-image: url(img/gal7.jpg); background-size:cover"><a class="lightboxes" href="img/gal7.jpg" rel=""><span class="plus_cover"></span></a></li>
            <li style="background-image: url(img/gal8.jpg); background-size:cover"><a class="lightboxes" href="img/gal8.jpg" rel=""><span class="plus_cover"></span></a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
@endsection
