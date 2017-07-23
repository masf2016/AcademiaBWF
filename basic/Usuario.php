<?php


class Usuario
{
	
	private $id_usu;
	private $login_usu;
	private $senha_usu;
	private $nivel_usu;
	
	
	public function getIdUsu() {
		return $this->id_usu;
	}
	public function setIdUsu($id_usu) {
		$this->id_usu = $id_usu;
		return $this;
	}
	public function getLoginUsu() {
		return $this->login_usu;
	}
	public function setLoginUsu($login_usu) {
		$this->login_usu = $login_usu;
		return $this;
	}
	public function getSenhaUsu() {
		return $this->senha_usu;
	}
	public function setSenhaUsu($senha_usu) {
		$this->senha_usu = $senha_usu;
		return $this;
	}
	public function getNivelUsu() {
		return $this->nivel_usu;
	}
	public function setNivelUsu($nivel_usu) {
		$this->nivel_usu = $nivel_usu;
		return $this;
	}
	
	
	
}