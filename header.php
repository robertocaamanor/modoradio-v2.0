<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modoradio</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/superslides.css">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Slabo+27px" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo get_option('home'); ?>"><img style="max-width:100px; margin-top: -7px;" alt="Modoradio" src="http://i.imgur.com/SBHMTB7.png"></a>
		      <ul class="nav navbar-vivo">
		      	<li class="active"><a href="http://envivo.modoradio.cl"><span class="glyphicon glyphicon-volume-up"></span> En vivo <span class="sr-only">(current)</span></a></li>
		      </ul>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
                wp_nav_menu(
                    array(
                    	'menu' => 'primary',
                        'theme_location' => 'primary',
                        'depth'          => 2,
                        'container'      => false,
                        'menu_class'     => 'nav navbar-nav',
                        'fallback_cb'    => 'wp_bootstrap_navwalker::fallback',
                        'walker'         => new wp_bootstrap_navwalker()
                    )
                );
            ?>
            <form class="navbar-form navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Buscar …', 'shape' ); ?>">
		        </div>
		        <button type="submit" class="btn btn-default" name="submit" id="searchsubmit">Buscar</button>
		      </form>
        </div>

		    
	        
		  </div><!-- /.container-fluid -->
		</nav>
	</header>