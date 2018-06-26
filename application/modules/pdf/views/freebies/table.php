<?php
echo form_open('Cliente/lista_consulta');
echo form_label('Mês para consulta: ', 'mesCompra');
//echo '<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials</button>';
$data = array(
    '01'         => '01',
    '02'           => '02',
    '03'         => '03',
    '04'        => '04',
    '05'        => '05',
    '06'        => '06',
    '07'        => '07',
    '08'        => '08',
    '09'        => '09',
    '10'        => '10',
    '11'        => '11',
    '12'        => '12',
);
echo'  ';

echo form_dropdown('mesCompra', $data, '1');
?>
<button type="submit" class="btn btn-primary btn-md" style="float: right" >Consultar</button>
<hr>

<?php 
$data = array(
  'type' => 'submit',
  'value'=> 'Cadastrar',
  'class'=> 'submit'
  );
form_submit($data);
echo form_close();
?>
<?php
echo form_open('Cliente/lista_consulta_por');
echo form_label('Quantidade de meses para consulta: ', 'qtdMes');
$data= array(
//'font' => 'bold',
'size' => '20',
'name' => 'qtdMes',
'placeholder' => 'Digite a quantidade de meses',
'class' => 'input_box'
);
echo form_input($data);
echo '<br>';echo '<br>'; 
?>
<button type="submit" class="btn btn-primary btn-md" style="float: right" >Consultar a partir da data de hoje</button>
<?php
form_submit($data);
echo form_close();
?>

<table class="table" data-wow-delay="0.2s"> 
  <thead>
    <tr>
      <th>#</th>
      <th>Data da Compra</th>
      <th>Nome do Cliente</th>
      <th>Valor da Compra</th>
    </tr>
  </thead>

  <tbody> <?php echo $content ?> </tbody>

</table>