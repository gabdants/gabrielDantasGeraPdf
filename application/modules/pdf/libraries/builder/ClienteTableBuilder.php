<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/TableBuilder.php';

class ClienteTableBuilder extends TableBuilder{

    public function __construct(){
        parent::__construct('pdf');
    }

    function get_fields(){
        $fields['nome'] = array('type' => 'VARCHAR', 'constraint' =>  200);
        $fields['email'] = array('type' => 'VARCHAR', 'constraint' =>  150);
        $fields['cpf'] = array('type' => 'VARCHAR', 'constraint' =>  100);
        

        return $fields;
    }

    function get_data(){
        // para inserir um registro na tabela itens
        $data[] = array(
            'nome' => 'Gabriel Dantas', 
            'email' => 'gdantas@ifsp.com', 
            'cpf' => '00011122233'
          );

        return $data;
    }

}