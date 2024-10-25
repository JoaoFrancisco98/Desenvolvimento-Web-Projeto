<!DOCTYPE html>
<html>
    <head>
        <title>Exemplo 03</title>
    </head>
    <body>
        <form method="post" action="<?php echo$_SERVER['PHP_SELF'];?>">
            Nome: <input type="text" name="fnome" />
            <input type="submit">
        </form>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_REQUEST['fnome'];
            if (empty($nome)){
                echo "Nome está vazio";
            } else {
                echo $nome;
            }
        } ?>
    </body>
</html>