<?php

class Secretario 
{
	private $id_secret;
	private $nome_secret;
	private $cpf_secret;
	private $rg_secret;
	
	private $id_academia;
	private $id_usuario;
	
	
	public function getIdSecret() {
		return $this->id_secret;
	}
	public function setIdSecret($id_secret) {
		$this->id_secret = $id_secret;
		return $this;
	}
	public function getNomeSecret() {
		return $this->nome_secret;
	}
	public function setNomeSecret($nome_secret) {
		$this->nome_secret = $nome_secret;
		return $this;
	}
	public function getCpfSecret() {
		return $this->cpf_secret;
	}
	public function setCpfSecret($cpf_secret) {
		$this->cpf_secret = $cpf_secret;
		return $this;
	}
	public function getRgSecret() {
		return $this->rg_secret;
	}
	public function setRgSecret($rg_secret) {
		$this->rg_secret = $rg_secret;
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