<?php

class YearRoute {
	public $name;
	public $route;

	function __construct( $name, $route ) {
		$this->name  = $name;
		$this->route = $route;
	}
}

$requestURI = strtok( $_SERVER['REQUEST_URI'], '?' );


$yearsRoutes = array(
	new YearRoute( "Primero", "/etsisi/primero" ),
	new YearRoute( "Segundo", "/etsisi/segundo" ),
	new YearRoute( "Tercero", "/etsisi/tercero" ),
	new YearRoute( "Cuarto", "/etsisi/cuarto" )
);

?>

<div class="row" style="text-align: center;">
	<?php
	foreach ( $yearsRoutes as $yearRoute ) {
		?>
        <div class="col-6 col-md-3" style="margin-bottom: 30px">
			<?php
			if ( $yearRoute->route == $requestURI ) {
				?>
                <button class="btn btn-warning"><?= $yearRoute->name ?></button>
				<?php
			} else {
				?>
                <a class="btn btn-dark" href="<?= $yearRoute->route ?>" style="text-decoration: none"><?= $yearRoute->name ?></a>
				<?php
			}
			?>
        </div>
		<?php
	}
	?>
</div>