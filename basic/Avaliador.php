<?php

class Avaliador
{
	private $id_avaliador;
	private $nome_avaliador;
	private $cpf_avaliador;
	private $rg_avaliador;
	
	private $id_academia;
	private $id_usuario;
	
	
	public function getIdAvaliador() {
		return $this->id_avaliador;
	}
	public function setIdAvaliador($id_avaliador) {
		$this->id_avaliador = $id_avaliador;
		return $this;
	}
	public function getNomeAvaliador() {
		return $this->nome_avaliador;
	}
	public function setNomeAvaliador($nome_avaliador) {
		$this->nome_avaliador = $nome_avaliador;
		return $this;
	}
	public function getCpfAvaliador() {
		return $this->cpf_avaliador;
	}
	public function setCpfAvaliador($cpf_avaliador) {
		$this->cpf_avaliador = $cpf_avaliador;
		return $this;
	}
	public function getRgAvaliador() {
		return $this->rg_avaliador;
	}
	public function setRgAvaliador($rg_avaliador) {
		$this->rg_avaliador = $rg_avaliador;
		return $this;
	}
	
	
	public function getIdAcademia() {
		return $this->id_academia;
	}
	public function setIdAcademia($id_academia) {
		$this->id_academia = $id_academia;
		return $this;
	}
	public function getIdUsuario() {
		return $this->id_usuario;
	}
	public function setIdUsuario($id_usuario) {
		$this->id_usuario = $id_usuario;
		return $this;
	}
	
	
	
	
}