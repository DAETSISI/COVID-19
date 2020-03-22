<?php

include 'models.php';

define( 'DB_HOST', 'localhost' );
define( 'DB_NAME', 'covid19' );
define( 'DB_USER', 'daetsisi' );
define( 'DB_PASSWD', 't76L~6pr' );

function open_database() {
	$idDB = @new mysqli( DB_HOST, DB_USER, DB_PASSWD, DB_NAME );
	if ( mysqli_connect_errno() ) {
		die( "No puedo conectar con el gestor MySQL" );
	}
	$idDB->set_charset( "utf8" );

	return $idDB;
}

function close_database( $idDB ) {
	$idDB->close();
}

function get_subjects( $year, $study ) {
	$db    = open_database();
	$query = " SELECT * FROM Subjects WHERE curso = '$year' AND grado = '$study' ";

	$subjects = array();
	if ( $result = $db->query( $query ) ) {
		while ( $obj = $result->fetch_object() ) {
			array_push( $subjects, new Subject(
				$obj->id,
				$obj->nombre,
				$obj->grado,
				$obj->curso,
				$obj->html_docencia,
				$obj->html_practicas,
				$obj->html_evaluacion,
				$obj->html_recursos,
				$obj->url_guia
			) );
		}
		$result->close();
	}

	close_database( $db );

	return $subjects;
}