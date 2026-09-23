<?php
$url = explode('/', $_SERVER['REQUEST_URI']);
$id = $url[2];
require_once("admin/util/php/connect.php");
$buscando_id = $connect->query("SELECT * from blog where slogan = '$id'");
if(mysqli_num_rows( $buscando_id) >0){
    mkdir('portal/'.$id);
    file_put_contents('portal/'.$id.'/index.php', '<?php require_once("../pagina.php");');
    $local = '../../portal/'.$id;
    header("Location: $local");
}
echo"Página não encontrada Erro 404"

?>

