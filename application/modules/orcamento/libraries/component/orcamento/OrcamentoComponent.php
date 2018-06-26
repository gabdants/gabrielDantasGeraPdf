<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrcamentoComponent{

    private $data;
    private $image_align;
    private $center_text;

    public function __construct(OrcamentoData $data){
        $this->data = $data;
        $this->cliente = $data->cliente;
        $this->produto = $data->produto;
        $this->valor = $data->valor; 
    }

    public function getHTML(){
        return '<div class="jumbotron '.$this->center_text.'  ">

                    <div class="container">
                        <div style="float: left; padding: 10px; ">
                            <h1 class="h1-reponsive mb-4 mt-2 blue-text font-bold">Nome do Cliente:</h1>
                            <p class="lead">'.$this->data->cliente.'</p>
                        </div>

                        <div style=" float: left; padding: 10px;">
                            <h1 class="h1-reponsive mb-4 mt-2 blue-text font-bold">Nome do produto: </h1>
                            <p class="lead">'.$this->data->produto.'</p>
                        </div>

                        <div style=" float: left; padding: 10px;">
                            <h1 class="h1-reponsive mb-4 mt-2 blue-text font-bold">Valor:</h1>
                            <p class="lead">'.$this->valor.'</p>
                        </div>
                    </div>
                

                    <button href="http://localhost/mod/ocamento/gera_pdf">Gerar PDF</button>

                    
                </div>';
    }

}