<?php
class NavigationItem {
	public $title;
	public $url;

	function __construct($title, $url) {
		$this->title = $title;
		$this->url = $url;
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
<?= $requestURI ?>
<style type="text/css">
	.navbar {
        background: url(../img/navbar-background.jpg) center center;
        padding-top: 20px;
		padding-bottom: 20px;
	}

	.nav-link {
		color: white !important;
	}

	.nav-link:hover {
		color: #EFB810 !important;
	}

	.nav-item-active {
		color: #EFB810 !important;
	}

</style>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="/">
        <img src="img/daetsisi.png" width="30" height="30"
             alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
	        <?php
	        foreach ($navigationSections as $item) {
	        ?>
                <li class="nav-item">
			        <a class="nav-link <?= ($item->url === $requestURI) ? "nav-item-active" : "" ?>" href="<?= $item->url ?>"><?= $item->title ?></span></a>
		        </li>
		        <?php
	        }
	        ?>
        </ul>
    </div>
</nav>

