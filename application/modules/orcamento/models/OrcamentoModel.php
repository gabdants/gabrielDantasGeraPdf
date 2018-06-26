<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'modules/orcamento/libraries/component/orcamento/OrcamentoData.php';
include_once APPPATH.'modules/orcamento/libraries/component/orcamento/OrcamentoComponent.php';

class OrcamentoModel extends MY_Model{
    public function get_orcamento(){
        $data = new OrcamentoData(1);
        $orcamento = new OrcamentoComponent($data);
        return $orcamento->getHTML();
    }
}