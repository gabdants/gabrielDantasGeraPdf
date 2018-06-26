<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pdf extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('PdfModel', 'pdf');
        $this->load->library('form_validation');
        $this->menu_itens = $this->model->get_menu_itens();
    }

    /**
     * Página inicial do módulo; exibe sua funcionalidade principal. Além desta, um
     * módulo pode ter outras páginas, de acordo com sua finalidade. O importante é
     * lembrar que um módulo deve estar focado em fazer, bem feito e de forma flexível, 
     * apenas uma tarefa.
     */
    public function index(){
        $this->load->model('PdfModel', 'pdf');
        
        $data1['content'] = $this->pdf->table_construct();
        $data['content'] = $this->pdf->array_produtos();
        $this->pdf->gera_pdf($data1);

        $this->load->view('forms/formGeraPdf', $data);
        $this->show($html);
    }

    public function cliente(){
        $this->load->model('PdfModel', 'pdf');
        $html = $this->pdf->getHtml();
        $this->show($html);
    }


    /**
     * Página de configuração do conteúdo exibido nas páginas de funcionalidades do módulo
     */
    public function edit(){
        $html = 'module pages content editor';
        $this->show($html);
    }

}