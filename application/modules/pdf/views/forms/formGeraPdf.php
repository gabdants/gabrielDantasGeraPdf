

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
        <h2 class="h1-responsive font-bold" style="float: left;">Gerador PDF</h2>
        <button type="submit" class="btn btn-default active" style="float: right;" onclick="location.href='<?php echo base_url();?>pdf/index'" >HOME</button>
    </div>
</div>
                <!--/.Page heading-->
                <hr>
<?php

// Open form and set URL for submit form
echo form_open('Pdf/index');

echo "<h3>Multiple Selection Dropdown</h3>";
echo "<div class='drop_pos'>";
echo "<p><font color='red'><b>Note:</b></font>&nbsp;&nbsp;<b>To Select Multiple Options Press<br/> ctrl+left click</b></p>";
echo form_dropdown('access_list[]', $data, 'class="dropdown_box2"');

echo "</div>";
?>
<div id="form_button">
<?php echo form_submit('submit', 'submit', 'class="submit"'); ?>
</div>
<?php echo form_close(); ?>
</body>
</html>

