<?php require_once('../../../private/initialize.php'); ?>

<?php
$test = $_GET['test'] ?? '';

if($test == 404){
    error_404();
}else if ($test == 500){
    error_500();
}
else if($test="redirect"){
    redirect();
}
else{
    echo 'No Error';
}

?>
