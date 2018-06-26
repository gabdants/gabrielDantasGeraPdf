<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once 'util/CI_Object.php';



class PdfComposerDb extends CI_Object{

    public function get_data_cliente($cpf){
        $this->db->select('nomeCli, email, cpf');
        $this->db->from('pdf');
        $where = "cpf = ".$cpf."";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_data_produto($nomeProd){
        $this->db->select('nome, valor, clamon, dtTrans');
        $this->db->from('pdf');
        $where = "nome = ".$nomeProd."";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_all_data_produto(){
        $this->db->select('nome, valor, clamon, dtTrans');
        $this->db->from('pdf');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_all_data_cliente(){
        $this->db->select('nomeCli, email, cpf');
        $this->db->from('pdf');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function set_data_cliente($nomeCli, $cpfCli, $emailCli){
        $data = array(
            'nomeCli' => $nomeCli,
            'email' => $emailCli,
            'cpf' => $cpfCli
        );
        $this->db->insert('pdf', $data);
    }

    public function set_data_produto($nomeProd, $valor){
        $data = array(
            'nome' => $nomeProd,
            'valor' => $valor,
            'clamon' => '0',
            'dtTrans' => '0'
            );
        $this->db->insert('pdf', $data);
    }



}