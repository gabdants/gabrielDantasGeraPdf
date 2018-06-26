

<!DOCTYPE html>
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
                        <button type="submit" class="btn btn-default active" style="float: right;" onclick="location.href='<?php echo base_url();?>index.php/Cliente/index'" >HOME</button>
                    </div>
                </div>
                <!--/.Page heading-->
                <hr>
<?php

// Open form and set URL for submit form
echo form_open('Pdf/cadastrocliente');


echo form_label('Nome do Cliente :', 'nomeCli');
$data= array(
'font' => 'bold',
'size' => '50',
'name' => 'nomeProd',
'placeholder' => 'Digite o nome do cliente que deseja cadastrar',
'class' => 'input_box'
);
echo form_input($data);
echo '<br>';echo '<br>';

echo form_label('Cpf do Cliente:     ', 'cpf');
$data= array(
'font' => 'bold',
'size' => '50',
'name' => 'valorProd',
'placeholder' => 'Digite o cpf do cliente que deseja cadastrar',
'class' => 'input_box'
);
echo form_input($data);
echo '<br>';echo '<br>';

echo form_label('Email do Cliente:     ', 'email');
$data= array(
'font' => 'bold',
'size' => '50',
'name' => 'valorProd',
'placeholder' => 'Digite o preço do produto que deseja cadastrar',
'class' => 'input_box'
);
echo form_input($data);
echo '<br>';echo '<br>';


?>
<br><br>
</div>


<div id="form_button">
<button type="submit" class="btn btn-primary btn-md">Cadastrar</button>
<?php
$data = array(
'type' => 'submit',
'value'=> 'Cadastrar',
'class'=> 'submit'
);
form_submit($data); ?>
</div>


<?php echo form_close();?>


</div>
</div>
</body>
</html>

