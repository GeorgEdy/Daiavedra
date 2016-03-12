<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    <!-- BOOTSTRAP -->
    <link href="<?php echo get_template_directory_uri();?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FONTURI -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,700italic,900italic,900,500italic,500,400italic,300italic,300,100italic,100&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- STYLE -->
    <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">
    <!-- ICONS SET -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.2.3/css/simple-line-icons.css">
</head>

<body <?php body_class(); ?>>

<div class="background-image fade-in patru"></div>

<header>
    <div class="container fade-in unu">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo home_url();?>">
                    <img src="http://www.daiavedra.com/wp-content/uploads/2016/01/daiavedra_logo.png" />
                </a>
            </div>
            <div class="col-md-12 text-center telefoane-contact">
                <a href="#" class="open-contact">
                    <span class="badge">+40 724 251 525</span> <span class="badge">+40 341 41ssss4 777</span>
                </a>
            </div>
        </div>
    </div>
</header>

<div class="oferta-imagine fade-in trei">
    <h3>Hulhumale</h3>
    <p>
        Destinaţia ideală pentru plajă, snork snork şi scufundări!
    </p>
</div>

<div class='mouse-container fade-in trei'>
    <div class='mouse'>
        <span class='scroll-down'></span>
    </div>
</div>

<div class="social-media fade-in doi">
    <a href="#" target="_blank" title="Urmareste-ne pe Facebook!">
        <i class="icon-social-facebook icons"></i>
    </a>
    <a href="#" target="_blank" title="Urmareste-ne pe Google Plus!">
        <i class="icon-social-gplus icons"></i>
    </a>
    <a href="#" target="_blank" title="Urmareste-ne pe Twitter!">
        <i class="icon-social-twitter icons"></i>
    </a>
    <a href="#" target="_blank" title="Discuta cu noi pe Skype!">
        <i class="icon-social-skype icons"></i>
    </a>
</div>

<div class="first-form fade-in patru">
    <div class="col-md-12 text-center">
        <h3 class="text-center">Salut, ai o destinatie de vacanta in minte?</h3>
    </div>
    <div class="col-md-12" id="formular-cautare" style="display:none;">
        <span class="input input--jiro">
            <input id="input-cautare" class="input__field input__field--jiro" type="text" id="input-10" />
            <label class="input__label input__label--jiro" for="input-10">
                <span class="input__label-content input__label-content--jiro">Introduceti Tara / Oras / Statiune / Hotel si apasati butonul de cautare</span>
            </label>
        </span>
    </div>
    <div class="col-md-6">
        <button id="cautare-exacta" class="button button--winona button--border-thin button--round-s" data-text="Da, vreau sa fac o cautare exacta"><span><i class="glyphicon glyphicon-search"></i> Da, vreau sa fac o cautare exacta</span></button>
    </div>
    <div class="col-md-6">
        <button id="cautare-recomandari" class="button button--winona button--border-thin button--round-s" data-text="Nu, vreau sa vad o lista de recomandari">
            <span><i class="icon-mouse"></i> Nu, vreau sa vad o lista de recomandari</span>
        </button>
    </div>
</div>


<div id="recomandari" class="container-fluid" style="margin-top:50px;">
    <h1 class="text-center">Destinatii recomandate pentru o vacanta de neuitat</h1>
    <div class="grid">
        <figure class="effect-bubba">
            <img src="http://q-ec.bstatic.com/images/city/max500/133/133568.jpg" alt="img16">
            <figcaption>
                <h2><span>Hulhumale</span></h2>
                <p>destinaţia ideală pentru plajă, snorkeling şi scufundări!</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="http://q-ec.bstatic.com/images/city/max500/133/133568.jpg" alt="img16">
            <figcaption>
                <h2><span>Hulhumale</span></h2>
                <p>destinaţia ideală pentru plajă, snorkeling şi scufundări!</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="http://q-ec.bstatic.com/images/city/max500/133/133568.jpg" alt="img16">
            <figcaption>
                <h2><span>Hulhumale</span></h2>
                <p>destinaţia ideală pentru plajă, snorkeling şi scufundări!</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="http://q-ec.bstatic.com/images/city/max500/133/133568.jpg" alt="img16">
            <figcaption>
                <h2><span>Hulhumale</span></h2>
                <p>destinaţia ideală pentru plajă, snorkeling şi scufundări!</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="http://q-ec.bstatic.com/images/city/max500/133/133568.jpg" alt="img16">
            <figcaption>
                <h2><span>Hulhumale</span></h2>
                <p>destinaţia ideală pentru plajă, snorkeling şi scufundări!</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="http://q-ec.bstatic.com/images/city/max500/133/133568.jpg" alt="img16">
            <figcaption>
                <h2><span>Hulhumale</span></h2>
                <p>destinaţia ideală pentru plajă, snorkeling şi scufundări!</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="http://q-ec.bstatic.com/images/city/max500/133/133568.jpg" alt="img16">
            <figcaption>
                <h2><span>Hulhumale</span></h2>
                <p>destinaţia ideală pentru plajă, snorkeling şi scufundări!</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="http://q-ec.bstatic.com/images/city/max500/133/133568.jpg" alt="img16">
            <figcaption>
                <h2><span>Hulhumale</span></h2>
                <p>destinaţia ideală pentru plajă, snorkeling şi scufundări!</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="http://q-ec.bstatic.com/images/city/max500/133/133568.jpg" alt="img16">
            <figcaption>
                <h2><span>Hulhumale</span></h2>
                <p>destinaţia ideală pentru plajă, snorkeling şi scufundări!</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="http://q-ec.bstatic.com/images/city/max500/133/133568.jpg" alt="img16">
            <figcaption>
                <h2><span>Hulhumale</span></h2>
                <p>destinaţia ideală pentru plajă, snorkeling şi scufundări!</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="http://q-ec.bstatic.com/images/city/max500/133/133568.jpg" alt="img16">
            <figcaption>
                <h2><span>Hulhumale</span></h2>
                <p>destinaţia ideală pentru plajă, snorkeling şi scufundări!</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
    </div>
</div>

<footer id="colophon" class="site-footer" role="contentinfo">
    lalala
</footer><!-- .site-footer -->

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/bower_components/tether/dist/js/tether.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>

