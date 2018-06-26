<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'modules/dompdf/dompdf_config.inc.php');
include_once APPPATH.'modules/pdf/libraries/component/PdfComposerDb.php';
include_once APPPATH.'modules/pdf/libraries/component/PdfFront.php';


class PdfModel extends MY_Model{

    public function __construct(){
        $this->load->library('PdfComposerDb');
        $this->data_cli = $this->pdfcomposerdb->get_data_cliente($this->input->post('cpf'));
        $this->data_prod = $this->pdfcomposerdb->get_data_produto($this->input->post('nome'));
        $this->data_all_cli = $this->pdfcomposerdb->get_all_data_cliente();
        $this->data_all_prod = $this->pdfcomposerdb->get_all_data_produto();
    }


    public function seters_prd(){
        $this->insert_data_prd = $this->pdfcomposerdb->set_data_produto($this->input->post('nome'),
        $this->input->post('valor'));
    }

    public function seters_cli(){
        $this->insert_data_prd = $this->pdfcomposerdb->set_data_cliente($this->input->post('nomeCli'),
        $this->input->post('cpf'), $this->input->post('email'));
    }

    public function array_produtos(){
        $data = array();
        for($i = 0; $i < sizeof($this->data_all_prod); $i++){
            array_push($data, $this->data_all_prod[$i]['nome']);
        }

    }

    public function array_clientes(){
        $data = array();
        for($i = 0; $i < sizeof($this->data_all_cli); $i++){
            array_push($data, $this->data_all_cli[$i]['nomeCli']);
        }

    }

    public function table_construct(){
        $html = '';

        for($i = 0; $i < sizeof($this->data_all_prod); $i++){
            $html .= '<tr><th scope="row">'.($i + 1);
            $html .= '</th><td>'.$this->data_all_prod[$i]['nome'].'</td>';
            $html .= '<td>R$ '.$this->data_all_prod[$i]['valor'].'</td></tr>';
        }

        return $html;
    }

    public function gera_pdf($content){
        $dompdf = new DOMPDF();
        $data_cli = $this->pdfcomposerdb->get_data_cliente($this->input->post('cpf'));
        $dompdf->load_html('
        <!doctype html>
        <html>

        <head>
        <meta charset="UTF-8">
        <title>Orçamento '.$data_cli['nomeCli'].'</title>
        <style>
        * { font-family: sans-serif; }
        </style>
        </head>

        <body>

        <header>
            <h1>Loja Jumbotron SA</h1><br><hr>
            <p>Cliente: '.$data_cli['nomeCli'].'</p><br>
            <p>Email: '.$data_cli['email'].'</p><br>
            <p>CPF: '.$data_cli['cpf'].'</p><br>
        </header>
        <main>
            <p>Itens:</p>
            <table class="table" data-wow-delay="0.2s"> 
            <thead>
                <tr>
                <th>#</th>
                <th>Nome do Cliente</th>
                <th>Valor da Compra</th>
                </tr>
            </thead>

            <tbody> '.$content.' </tbody>

            </table>


        </main>

        </body>

        ');

        /* Renderiza */
        $dompdf->render();

        /* Exibe */
        $dompdf->stream(
            "saida.pdf", /* Nome do arquivo de saída */
            array(
                "Attachment" => true /* Para download, altere para true */
            )
        );
    }

    public function getHTML(){
        return '<!DOCTYPE html>
        <html lang="en" class="full-height">
        
        <head>
        
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
        
            <title>Cadastro Produtos</title>
        
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
            <link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
        <body>
        <div class="row wow fadeIn" data-wow-delay="0.2s">
                            <div class="col-md-12 mt-5">
                                <h2 class="h1-responsive font-bold" style="float: left;">Cadastro de produtos</h2>
                                <button type="submit" class="btn btn-default active" style="float: right;" onclick="location.href="<?php echo base_url();?>pdf/index"" >HOME</button>
                            </div>
                        </div>
                        <!--/.Page heading-->
                        <hr>
        <?php
        
        // Open form and set URL for submit form
        echo form_open("pdf/cliente");
        //Quantidade de Produtos
        echo form_label("Cliente: ", "nomeCli");
        
        echo form_dropdown("qtProd", '.$data_all_cli['nomeCli'].', "1");
        
        //echo form_dropdown("qtProd", $options, $quantidade);
        
        
        ?>
        <br><br>
        </div>
        
        
        <div id="form_button">
        <button type="submit" class="btn btn-primary btn-md">Gerar</button>
        <?php
        $data = array(
        "type" => "submit",
        "value"=> "Gerar",
        "class"=> "submit"
        );
        form_submit($data); ?>
        </div>
        
        <?php echo form_close();?>
        
        
        </div>
        </div>
        </body>
        </html>
        ';
    }

}