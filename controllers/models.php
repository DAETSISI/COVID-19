<?php

class Subject {
	public $id;
	public $name;
	public $study;
	public $year;
	public $html_docencia;
	public $html_practicas;
	public $html_evaluacion;
	public $html_recursos;
	public $url_guia;

	/**
	 * Subject constructor.
	 *
	 * @param $id
	 * @param $name
	 * @param $study
	 * @param $year
	 * @param $html_docencia
	 * @param $html_practicas
	 * @param $html_evaluacion
	 * @param $html_recursos
	 * @param $url_guia
	 */
	public function __construct( $id, $name, $study, $year, $html_docencia, $html_practicas, $html_evaluacion, $html_recursos, $url_guia ) {
		$this->id              = $id;
		$this->name            = $name;
		$this->study           = $study;
		$this->year            = $year;
		$this->html_docencia   = $html_docencia;
		$this->html_practicas  = $html_practicas;
		$this->html_evaluacion = $html_evaluacion;
		$this->html_recursos   = $html_recursos;
		$this->url_guia        = $url_guia;
	}

	function html_docencia() {
		if($this->html_docencia === "") {
			return "<i>Por determinar.</i>";
		} else {
			return $this->html_docencia;
		}
	}

	function html_practicas() {
		if($this->html_practicas === "") {
			return "<i>Por determinar.</i>";
		} else {
			return $this->html_practicas;
		}
	}

	function html_evaluacion() {
		if($this->html_evaluacion === "") {
			return "<i>Por determinar.</i>";
		} else {
			return $this->html_evaluacion;
		}
	}

	function html_recursos() {
		if($this->html_recursos === "") {
			return "<i>Por determinar.</i>";
		} else {
			return $this->html_recursos;
		}
	}
}
