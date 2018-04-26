<?php
# Verifica se o diretório existe

$name = "images";

if(!is_dir($name)){// Verifica se é um diretório

  mkdir($name);
  echo "Diretório $name criado com sucesso";

} else{
    rmdir($name);
    echo "Já existe o diretório: $name , foi removido";

}

 ?>
