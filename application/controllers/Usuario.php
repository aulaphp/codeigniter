<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario extends CI_Controller {

    public function form() {
        $this->load->view('usuario-form');
    }
    /**
     * Carrega a lista
     */
    public function lista() {
        $dados['usuarios'] =  $this->usuarioModel->getAll();
        $this->load->view('usuario-lista', $dados);
    }
    
    public function salvar(){
        $usuario = $this->input->post();
	$this->usuarioModel->inserir($usuario);
        redirect("usuario-list");
    }
}
