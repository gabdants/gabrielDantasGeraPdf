<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/ConfigBuilder.php';


class ConfigTableBuilder extends ConfigBuilder{

    function __construct(){
        parent::__construct('orcamento');
    }

    function get_data(){
        // parâmetros básicos de configuração
        $base = parent::get_data();

        // parâmetros específicos de configuração
        $data = array(
            array(
                'nome' => $this->prefix.'cliente', 
                'valor' => 'Nome do cliente',
                'descricao' => 'Digite o nome do cliente',
                'admin_only' => 0
            ),
            array(
                'nome' => $this->prefix.'produto', 
                'valor' => 'Nome do produto',
                'descricao' => 'Digite o nome do produto',
                'admin_only' => 0
            ),
            array(
                'nome' => $this->prefix.'valor', 
                'valor' => 'Valor do produto',
                'descricao' => 'Digite o valor do produto',
                'admin_only' => 0
            )
        );
        
        return array_merge($base, $data);
    }
}
