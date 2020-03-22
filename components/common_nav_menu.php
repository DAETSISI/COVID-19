<?php

class NavigationItem {
	public $title;
	public $url;
	public $active;

	function __construct( $title, $url ) {
		$this->title  = $title;
		$this->url    = $url;
		$this->active = false;
	}
}

function parsedUrlForLocalhost( $url ) {
	$whitelist = array(
		'127.0.0.1',
		'::1'
	);

	if ( $url != '/' && in_array( $_SERVER['REMOTE_ADDR'], $whitelist ) ) {
		return $url . ".php";
	} else {
		return $url;
	}
}

function createNavigationSections() {
	$requestURI = strtok( $_SERVER['REQUEST_URI'], '?' );

	// Root item must be the first in the array
	$navigationSections = [
		new NavigationItem( 'Información', '/' ),
		new NavigationItem( 'ETSISI', '/etsisi' ),
		new NavigationItem( 'FAQs', '/faqs' ),
		new NavigationItem( 'Frena la curva', '/flc' ),
		new NavigationItem( 'Documentación', '/documentacion' ),
	];

	if ( $requestURI == '/' ) {
		$navigationSections[0]->active = true;
	} else {
		for ( $i = 1; $i < count( $navigationSections ); ++ $i ) {
			$navigationSections[ $i ]->active = strpos( $requestURI, parsedUrlForLocalhost( $navigationSections[ $i ]->url ) ) !== false;
		}
	}

	return $navigationSections;
}

$requestURI = strtok( $_SERVER['REQUEST_URI'], '?' );

$navigationSections = createNavigationSections();

?>

<header style="margin-bottom: 20px">
    <div class="header-area">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center justify-content-between no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="/" class="logo-img-child">
                                <img src="../img/header-image.png" class="logo-img-child" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation" style="margin:0px;padding:0px">
									<?php
									foreach ( $navigationSections as $item ) {
										?>
                                        <li class="nav-item">
                                            <a <?= $item->active ? "class=\"active\"" : "" ?> href="<?= parsedUrlForLocalhost( $item->url ) ?>" style="text-decoration: none;"><?= $item->title ?></a>
                                        </li>
										<?php
									}
									?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 d-none d-lg-block">
                        <div class="social_media_links">
                            <ul style="margin:0px;padding:0px">
                                <li><a href="https://twitter.com/dalumETSISI?s=20" target="_blank" alt="Redirecció Twitter"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="https://www.instagram.com/dalumetsisi/" target="_blank" alt="Redirección Instagram"> <i class="fa fa-instagram"></i> </a></li>
                                <li><a href="https://t.me/canaldaetsisi" target="_blank" alt="Redirección Canal de Telegram"> <i class="fa fa-telegram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
