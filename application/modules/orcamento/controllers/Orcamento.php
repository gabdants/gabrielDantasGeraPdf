<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Orcamento extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->menu_itens = $this->model->get_menu_itens();
    }

    /**
     * Página inicial do módulo; exibe sua funcionalidade principal. Além desta, um
     * módulo pode ter outras páginas, de acordo com sua finalidade. O importante é
     * lembrar que um módulo deve estar focado em fazer, bem feito e de forma flexível, 
     * apenas uma tarefa.
     */
    public function index(){
        $this->load->model('OrcamentoModel', 'orcamento');
        $html = $this->orcamento->get_orcamento();
        $this->show($html);

    }
    public function gera_pdf(){
  
    }


    /**
     * Página de configuração do conteúdo exibido nas páginas de funcionalidades do módulo
     */
    public function edit(){
        $html = 'module pages content editor';
        $this->show($html);
    }

}