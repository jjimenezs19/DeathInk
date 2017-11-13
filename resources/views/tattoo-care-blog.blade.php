@extends('layout.page-layout')

@section('slider-image')
    <div style="background-image:url(/img/blog-image.jpg); background-repeat:no-repeat; background-attachment: fixed; " class="h_slider-p h_slider-page">
        <div id="h_content" class="h_content slide-in">
            <h1 class="h_title">Cuidados del Tatuaje</h1>
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
                        <p class="post_name">Articulo</p>
                        <h4>CURAR Y CUIDAR UN TATUAJE RECIÉN HECHO</h4>
                        <p class="post_date">19.05.2017</p>
                        <div class="content-post">
                            <p style="text-align:justify;">
                                El proceso de curación por lo general tarda entre 7 y 14
                                días, pero dependiendo del tipo del tatuaje, tamaño, ubicación y también capacidad de curación de tu cuerpo ese proceso puede acortarse o extenderse.
                                La verdad es que el tatuaje puede tomar hasta un mes para sanar completamente.</p>
                            <blockquote class="blockquote-post" style=""></blockquote>
                            <p style="text-align:justify;">
                                Un tatuaje fresco puede ser descrito como una sensación similar a una quemadura de sol. El área tiende a picar un poco, y puede ponerse de color rojo y ponerse un poco inflamada o elevada. Todo esto es una parte natural del proceso de curación del tatuaje.
                                <br>Durante los dos primeros días, también observarás exudación de líquido claro y el exceso de tinta que es totalmente normal y nada de qué preocuparse, pero asegúrate de mantener tu tatuaje limpio.

                                <br>Después de un par de días, la piel alrededor del tatuaje puede llegar a secarse y tu piel comenzará a pelar/descamarse como una quemadura de sol. De esta forma, comenzarás a sentir picor en todo tu tatuaje.

                                <br><strong>No frotes ni toques la zona tratada mientras está sanando. Una pérdida de color y/o infección podría ocurrir.</strong>

                                <br>Después de dos semanas, o cuando tu tatuaje esté completamente sanado podrás volver a tu crema hidratante habitual.</p>
                            <h2>Cuidados</h2>
                            <p> - Lava tus manos adecuadamente con jabón  antibacterial cada vez que vayas a manejar tu tatuaje para limpiar o cualquier otra cosa.<br>
                                - Después de retirar el plástico, y de preferencia dos veces al día, lava el tatuaje con agua fria y un jabón antibacterial, da un masaje con la yema de tus dedos y enjuaga.
                                  Una vez aseado el tatuaje, espera a que seque completamente la piel.<br>
                                - Para evitar que la zona se reseque y/o pueda infectarse aplica durante los siete días posteriores al tatuaje la crema recomiendada por el tatuador.
                                  Una de las cremas más recomendables y fácil de adquirir es la Bepanthen.<br>
                                - Evita las exposiciones directas al sol, y si tienes que hacerlo procura tapar el tatuaje y usar un protector solar para evitar que los colores se desvanezcan.<br>
                                - Después  de la primera semana con la crema recomendada, usa otra crema humectante. Esta crema te ayudará, además de mantener humectada la zona, a evitar la molesta comenzón que se presenta a la semana de haberte hecho el tatuaje.<br>
                            </p>
                            <h2>Que no se debe hacer</h2>
                            <p>Es fundamental evitar:</p>
                            <p> - Mojar el tatuaje en el baño, la sauna, el jacuzzi o ir a nadar en el mar o piscinas. El ducharse con agua fria esta bien.<br>
                                - Evita ir al gimnasio o hacer deportes de contacto durante la primer semana de curación<br>
                                - No te rasques, frotes o toques tu tatuaje fresco<br>
                                - No expongas a tu nuevo tatuaje a la luz solar directa. Esto puede conducir a la decoloración y podrías fácilmente quemar la piel.<br>
                                - No uses esponja para limpiar tu tatuaje, masajea suavemente con la mano previamente lavada.<br>
                                - No apliques demasiada crema; una capa delgada bastará.<br>
                                - Evitar tocar y no dejes que otros toquen a tu tatuaje fresco.<br>
                                - No dejes que tu tatuaje se adhiera a la ropa.<br>
                            </p>
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
                    <div class="cat_name"><h2>Artista</h2></div>
                    <div class="artist_right-2">
                        <div class="artist_content-2">
                            <div class="inner_content">
                                <h1>Jerónimo Vallejos</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed totam rem aperiam, eaque ipsa quae ab illo inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                            </div>
                        </div>
                        <div class="check_social_black">
                            <p>Redes Sociales
                                <a href="#" class="soc twitt"><img alt="" src="/img/twitter.png"></a>
                                <a href="https://www.facebook.com/DeathlessInkTattoo/" class="soc twitt"><img alt="social facebook" src="/img/facebook.png"></a>
                                <a href="#" class="soc twitt"><img alt="" src="/img/youtube.png"></a></p>
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