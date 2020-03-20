<?php
class NavigationItem {
	public $title;
	public $url;

	function __construct($title, $url) {
		$this->title = $title;
		$this->url = $url;
	}
}

function parsedUrlForLocalhost($url) {
	$whitelist = array(
		'127.0.0.1',
		'::1'
	);

	if($url != '/' && in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
		return $url . ".php";
	} else {
		return $url;
	}
}

$requestURI = strtok($_SERVER['REQUEST_URI'], '?');

$navigationSections = [
	new NavigationItem('Información', '/'),
	new NavigationItem('ETSISI', '/etsisi'),
	new NavigationItem('FAQs', '/faq'),
	new NavigationItem('Frena la curva', '/flc'),
	new NavigationItem('Documentación', '/documentacion'),
]

?>

<header style="margin-bottom: 20px">
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center justify-content-between no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="/">
                                <img src="../img/daetsisi-white.png" height="57px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
	                                <?php
	                                foreach ($navigationSections as $item) {
		                                ?>
                                        <li class="nav-item">
                                            <a <?= (parsedUrlForLocalhost($item->url) === $requestURI) ? "class=\"active\"" : "" ?> href="<?= parsedUrlForLocalhost($item->url) ?>"><?= $item->title ?></a>
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
                            <ul>
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
