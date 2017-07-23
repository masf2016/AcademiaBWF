<?php

class Academia
{

	private $id_academia;
	private $nome_academia;
	
	private $id_adm;
	
	
	public function getIdAcademia() {
		return $this->id_academia;
	}
	public function setIdAcademia($id_academia) {
		$this->id_academia = $id_academia;
		return $this;
	}
	public function getNomeAcademia() {
		return $this->nome_academia;
	}
	public function setNomeAcademia($nome_academia) {
		$this->nome_academia = $nome_academia;
		return $this;
	}
	
	public function getIdAdm() {
		return $this->id_adm;
	}
	public function setIdAdm($id_adm) {
		
		$idAdm = new Administrador();
		$this->id_adm = $idAdm->getIdAdm();
		
		return $this;
	}
	
	
	
}