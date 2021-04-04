
<?php require_once 'func.php'?>



<body>
<form action="<?php $_SERVER['REQUEST_URI'] ?>" method="get">
    <input type="number" name="id" id="">
    <input type="submit" name="doGo" value="Отправить" class="btn btn-success">
</form>
<div><?php echo $userName ?></div>
</body>