@extends('layout.page-layout')

@section('slider-image')
    <div style="background-image:url(/img/blog-image.jpg); background-repeat:no-repeat; background-attachment: fixed; " class="h_slider-p h_slider-page">
        <div id="h_content" class="h_content slide-in">
            <h1 class="h_title">Tattoo Cares</h1>
        </div>
    </div>
@endsection

@section('page-content')

<div class="container" style="background-color:#e8e8e8;">
    <div class="container_inner">
        <div class="row_grid  blog-image">
            <div class="h-column">
                <div class="column-inner post-wrapper">
                    <div class="feature-image"><a href="#"></a>
                        <img alt="Tattoo Theme - FutureTeam" src="/img/post-image.jpg">
                    </div>
                    <div class="post-inner">
                        <p class="post_name">Post</p>
                        <h4>Standard and image post template</h4>
                        <p class="post_date">04.04.2017 <span class="cat_post">NEWS</span></p>
                        <div class="content-post">
                            <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <strong>nostrud exercitation ullamco laboris nisi ut aliquip</strong> ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                            <blockquote class="blockquote-post" style="">Crsus dictumst, enim, vut integer auctor pid porta magna integer? Facilisis rhoncus mattis rhoncus placerat, vut phasellus, pulvinar mauris? Dolor dapibus enim a vel penatibus! Sit amet, dictumst sed magnis aliquet!
                            </blockquote>
                            <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                            <h2>Heading 2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <strong>Excepteur sint occaecat cupidatat</strong> non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                            <h3>Heading 3</h3>
                            <p>Lorem sit quis in dignissim rhoncus sed. Nisi lorem ut ac adipiscing nunc integer cum pulvinar, turpis a ultrices nascetur ac phasellus ac natoque? Egestas cursus ut amet nunc etiam nunc aliquet cursus tincidunt. Montes scelerisque.</p>
                            <p>- Egestas cursus<br>
                                - Ut amet nunc<br>
                                - Etiam nunc</p>
                            <p>Adipiscing. Egestas ultricies sed? Tristique pid, mus non nec dis turpis odio. Facilisis, ultrices placerat. Ac urna? Quis tristique cursus arcu adipiscing augue pulvinar, parturient mauris, amet porta, auctor ultrices nisi pulvinar, sit, egestas duis amet non, augue
                                aliquam habitasse, augue nunc. Nascetur nisi sit penatibus dapibus purus, enim non nec.</p>
                        </div>
                        <div class="post-counter">
                            {{--<ul>--}}
                                {{--<li><strong>20</strong> Likes</li>--}}
                                {{--<li><strong>3</strong> Comments</li>--}}
                                {{--<li><strong>829</strong> Views</li>--}}
                            {{--</ul>--}}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container authors-container" style="background-color:#e8e8e8;">
    <div class="container_inner">
        <div class="row_grid artists-2">

            <div class="artist-2">
                <div class="artists-l">
                    <div class="featimage-2" style="background-image:url(/img/art1.jpg);"></div>
                </div>
                <div class="artists-r">
                    <div class="cat_name"><h2>Artists</h2></div>
                    <div class="artist_right-2">
                        <div class="artist_content-2">
                            <div class="inner_content">
                                <h1>Jerónimo Vallejos</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed totam rem aperiam, eaque ipsa quae ab illo inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                            </div>
                        </div>
                        <div class="check_social_black">
                            <p>Check social media
                                <a href="#" class="soc twitt"><img alt="Tattoo Theme - FutureTeam" src="./img/twitter.png"></a>
                                <a href="#" class="soc twitt"><img alt="Tattoo Theme - FutureTeam" src="./img/facebook.png"></a>
                                <a href="#" class="soc twitt"><img alt="Tattoo Theme - FutureTeam" src="./img/youtube.png"></a></p>
                        </div>
                        {{--<a class="more_gallery" href="#">See artist posts</a>--}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
</div>

@endsection