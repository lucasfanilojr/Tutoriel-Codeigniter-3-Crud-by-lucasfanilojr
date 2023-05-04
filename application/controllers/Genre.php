<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genre extends CI_Controller {

	public function ajouter()
	{
		$this->form_validation->set_rules('genre','Genre','required|min_length[2]');
		if (isset($_POST['enregistrer'])) {
			if ($this->form_validation->run()) {
				$data = array(
					'genre'=> $_POST['genre'],
					);
				$this->db->insert('genre',$data);
				redirect('Genre/ajouter/');
			} else {
				echo 'non';
			}
		}
		$this->load->view('ajouter_genre');
	}

	public function listes()
	{
		$requette = $this->db->query('SELECT *FROM genre');
		$this->load->view('listes_genre',['liste'=>$requette]);
	}

	public function supprimer($id)
	{
		$requette = $this->db->delete('genre',array('code_genre'=>$id));
		redirect('Genre/listes/');
	}

	public function modifier($id)
	{
		$requette = $this->db->query("SELECT *FROM genre WHERE code_genre = '$id' ");

		if (isset($_POST['enregistrer'])) {
			$this->form_validation->set_rules('genre','Genre','required|min_length[3]');
			if ($this->form_validation->run()) {
				$this->db->set('genre',$_POST['genre']);
				$this->db->where('code_genre',$id);
				$this->db->update('genre');
				redirect('Genre/listes/');
				} else {
					echo 'non';
				}
		}

		$this->load->view('modifier_genre',['liste'=>$requette]);
	}
}