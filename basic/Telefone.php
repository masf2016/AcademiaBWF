<?php

class telefone
{
	
	private $id_tel;
	private $numero_tel;
	private $tipo_tel;
	
	
	public function getIdTel() {
		return $this->id_tel;
	}
	public function setIdTel($id_tel) {
		$this->id_tel = $id_tel;
		return $this;
	}
	public function getNumeroTel() {
		return $this->numero_tel;
	}
	public function setNumeroTel($numero_tel) {
		$this->numero_tel = $numero_tel;
		return $this;
	}
	public function getTipoTel() {
		return $this->tipo_tel;
	}
	public function setTipoTel($tipo_tel) {
		$this->tipo_tel = $tipo_tel;
		return $this;
	}
	
	
	
}