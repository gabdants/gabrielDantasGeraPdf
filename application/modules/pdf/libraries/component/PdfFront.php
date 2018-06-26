<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'modules/pdf/libraries/component/PdfComposerDb.php';

class PdfFront{


    public function __construct(){

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