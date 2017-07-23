<?php

class Equipamento
{
	
	private $id_equip;
	private $cod_ref_equip;
	private $descricao_equip;
	
	private $id_academia;
	
	
	public function getIdEquip() {
		return $this->id_equip;
	}
	public function setIdEquip($id_equip) {
		$this->id_equip = $id_equip;
		return $this;
	}
	public function getCodRefEquip() {
		return $this->cod_ref_equip;
	}
	public function setCodRefEquip($cod_ref_equip) {
		$this->cod_ref_equip = $cod_ref_equip;
		return $this;
	}
	public function getDescricaoEquip() {
		return $this->descricao_equip;
	}
	public function setDescricaoEquip($descricao_equip) {
		$this->descricao_equip = $descricao_equip;
		return $this;
	}
	
	
	public function getIdAcademia() {
		return $this->id_academia;
	}
	public function setIdAcademia($id_academia) {
		$this->id_academia = $id_academia;
		return $this;
	}
	
	
	
}