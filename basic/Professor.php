<?php
/**
 * @author mario
 *
 */
//$id_acad = new Academia();
//$id_user = new Usuario();
class Professor
{
	private $id_professor;
	private $nome_prof;	
	private $cpf_prof;
	private $rg_prof;
	
	private $id_academia;
	private $id_usuario;
	

/*	
	function __construct($id,$nome,$cpf,$rg)
	{
		
	$this->id_professor = $id;
	$this->nome_prof = $nome;
	$this->cpf_prof = $cpf;
	$this->rg_prof = $rg;
		
	}
	
	function __construct($id,$nome,$cpf,$rg,$id_acad,$id_usu)
	{
	
		$this->id_professor = $id;
		$this->nome_prof = $nome;
		$this->cpf_prof = $cpf;
		$this->rg_prof = $rg;
		$this->id_academia = $id_acad;
		$this->id_usuario = $id_usu;
	
	}
*/			
	
	public function getIdProfessor() {
		return $this->id_professor;
	}
	public function setIdProfessor($id_professor) {
		$this->id_professor = $id_professor;
		return $this;
	}
	public function getNomeProf() {
		return $this->nome_prof;
	}
	public function setNomeProf($nome_prof) {
		$this->nome_prof = $nome_prof;
		return $this;
	}
	public function getCpfProf() {
		return $this->cpf_prof;
	}
	public function setCpfProf($cpf_prof) {
		$this->cpf_prof = $cpf_prof;
		return $this;
	}
	public function getRgProf() {
		return $this->rg_prof;
	}
	public function setRgProf($rg_prof) {
		$this->rg_prof = $rg_prof;
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