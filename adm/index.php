<?php
$root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
$root_adm=  $root_dir."/adm";
include $root_adm."/template/header.php"; ?>
    <!--CONTENT-->

    <h1>Administrator!</h1>
<h2><?=THEME_ROOT?></h2>

<?=var_dump($_SERVER)?>

    <!--/CONTENT-->
<?php  include $root_adm."/template/footer.php"; ?>