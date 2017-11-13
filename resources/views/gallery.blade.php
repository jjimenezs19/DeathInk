@extends('layout.page-layout')

@section('slider-image')
<div style="background-image:url(img/gallery.jpg); background-repeat:no-repeat; background-attachment: fixed; " class="h_slider-p h_slider-page">
    <div id="h_content" class="h_content slide-in">
        <h1 class="h_title">Galeria</h1>
    </div>
</div>
@endsection
@section('page-content')
<div class="container gal-grid" style="background-color:#000000;">
    <div class="container_inner">
        <ul>
            @foreach($images as $image)
                <li style="background-image: url({{$image}}); background-size:cover"><a class="lightboxes" href="{{$image}}" rel=""><span class="plus_cover"></span></a></li>
            @endforeach
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
@endsection
