<!DOCTYPE html>
<html>
<head>
    <title>Multiple Upload</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
<div class="container">
    <h2>Multiple Upload</h2>
    <form action="<?php echo base_url('test/upload')?>" method="post" enctype="multipart/form-data">
        <?php for ($i=1; $i <=5 ; $i++) :?>
            <input type="file" name="filefoto<?php echo $i;?>"><br/>
        <?php endfor;?>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</div>
</body>
</html>