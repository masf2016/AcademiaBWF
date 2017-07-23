<?php
 class Administrador
 {
 	
 	private $id_adm;
 	private $nome_adm;
 	private $cpf_adm;
 	private $rg_adm;
 	
 	private $id_usuario;
 	
	public function getIdAdm() {
		return $this->id_adm;
	}
	public function setIdAdm($id_adm) {
		$this->id_adm = $id_adm;
		return $this;
	}
	public function getNomeAdm() {
		return $this->nome_adm;
	}
	public function setNomeAdm($nome_adm) {
		$this->nome_adm = $nome_adm;
		return $this;
	}
	public function getCpfAdm() {
		return $this->cpf_adm;
	}
	public function setCpfAdm($cpf_adm) {
		$this->cpf_adm = $cpf_adm;
		return $this;
	}
	public function getRgAdm() {
		return $this->rg_adm;
	}
	public function setRgAdm($rg_adm) {
		$this->rg_adm = $rg_adm;
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