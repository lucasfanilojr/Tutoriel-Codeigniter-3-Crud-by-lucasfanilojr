<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etudiant extends CI_Controller {

	public function ajouter()
	{
		$success =null;
		$requette = $this->db->query('SELECT *FROM genre');

		$this->form_validation->set_rules('nom','Nom','required|min_length[3]');
		$this->form_validation->set_rules('prenom','Prenom','required|min_length[3]');
		$this->form_validation->set_rules('age','Age','required|min_length[1]');
		if (isset($_POST['enregistrer'])) {
			if ($this->form_validation->run()) {
				$data = array(
					'nom'=> $_POST['nom'],
					'prenom'=> $_POST['prenom'],
					'age' => $_POST['age'],
					'code_genre'=> $_POST['genre'],
					);
				$this->db->insert('etudiant',$data);
				$success = "inserer avec success";
				// redirect('Etudiant/ajouter');
			} else {
				echo 'non';
			}
		}
		
		$this->load->view('ajouter_etudiant',['liste'=>$requette,'success'=>$success]);
	}

	public function listes()
	{
		$requette = $this->db->query('SELECT *FROM etudiant JOIN genre ON genre.code_genre = etudiant.code_genre');
		$this->load->view('listes_etudiant',['liste'=>$requette]);
	}

	public function supprimer($id)
	{
		$this->db->delete('etudiant',array('id'=>$id));
		redirect('Etudiant/listes');
	}

	public function modifier($id)
	{
		$requette = $this->db->query("SELECT *FROM etudiant WHERE id = '$id' ");
		$requette2 = $this->db->query('SELECT *FROM genre');
		if (isset($_POST['enregistrer'])) {
			$this->form_validation->set_rules('nom','Nom','required|min_length[3]');
			$this->form_validation->set_rules('prenom','Prenom','required|min_length[3]');
			$this->form_validation->set_rules('age','Age','required|min_length[1]');
			if ($this->form_validation->run()) {
				$this->db->set('nom',$_POST['nom'],'prenom',$_POST['prenom'],'age',$_POST['age']);
				$this->db->where('id',$id);
				$this->db->update('etudiant');
				redirect('Etudiant/listes');
			} else {
				echo 'non';
			}
		}
		$this->load->view('modifier_etudiant',['liste'=>$requette,'quette'=>$requette2]);
	}

}