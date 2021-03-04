<?php require_once('database/db.php');?>
<?php require_once("controllers/mainController.php");?>

<?php $controll = new MainController(); $controll->index();?>