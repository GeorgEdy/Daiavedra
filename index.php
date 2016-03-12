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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,700italic,900italic,900,500italic,500,400italic,300italic,300,100italic,100&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- STYLE -->
    <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">
    <!-- ICONS SET -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.2.3/css/simple-line-icons.css">
</head>

<body ng-app="daia"  <?php body_class(); ?>>
<div class="background-image fade-in patru"></div>
 <div class="no-print" ng-include="'http://188.27.254.146/newdaia/wp-content/themes/daiaia/partials/header.html'"></div>
<ng-view></ng-view>
<footer id="colophon" class="site-footer" role="contentinfo">
    lalala
</footer><!-- .site-footer -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri();?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/bower_components/tether/dist/js/tether.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/bower_components/angular/angular.js"></script>
<script src="<?php echo get_template_directory_uri();?>/bower_components/angular-route/angular-route.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/app.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/controllers/main.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/controllers/oferta.js"></script>
<script>
    $('body').on('click','#cautare-exacta',function(){
        if($('#formular-cautare').is(":visible")){
            window.location.href = "https://www.daiavedra.com/?s="+$('#input-cautare').val();
        }else{
            $('#formular-cautare').slideDown();
        }
    });

    $(document).ready(function(){
        $('#cautare-recomandari').on('click',function (e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $("#recomandari").offset().top
            }, 900, 'swing', function () {
                window.location.hash = "#recomandari";
            });
        });
    });
</script>
</body>
</html>

