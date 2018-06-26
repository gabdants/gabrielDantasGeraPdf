<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/TableBuilder.php';

class ItensTableBuilder extends TableBuilder{

    public function __construct(){
        parent::__construct('pdf');
    }

    function get_fields(){
        $fields['nome'] = array('type' => 'VARCHAR', 'constraint' =>  50);
        $fields['valor'] = array('type' => 'VARCHAR', 'constraint' =>  150);
        $fields['clamon'] = array('type' => 'VARCHAR', 'constraint' =>  100);
        $fields['dtTrans'] = array('type' => 'VARCHAR', 'constraint' =>  100);
        $fields['nomeCli'] = array('type' => 'VARCHAR', 'constraint' =>  200);
        $fields['email'] = array('type' => 'VARCHAR', 'constraint' =>  150);
        $fields['cpf'] = array('type' => 'VARCHAR', 'constraint' =>  100);

        return $fields;
    }

    function get_data(){
        // para inserir um registro na tabela itens
        $data[] = array(
            'nome' => 'Teclado Razer', 
            'valor' => '150.00', 
            'clamon' => '986',
            'dtTrans' => '22/06/2018',
            'nomeCli' => 'Gabriel Dantas', 
            'email' => 'gdantas@ifsp.com', 
            'cpf' => '00011122233'
          );

        return $data;
    }

}