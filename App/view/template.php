<?php 
    include "layouts/header.php";
    include "layouts/menu.php";
  
  

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <title>Autovale | Venda de automoveis</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
   <!-- Bootstrap css -->
  <link rel="stylesheet" type="text/css" media="screen" href="App/view/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="App/view/plugins/node_modules/nouislider/distribute/nouislider.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="App/view/layouts/css/style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

</head>

<script src="App/view/plugins/node_modules/nouislider/distribute/nouislider.min.js"></script>
<body>   
<?php


  //mostra o conteudo da pagina
  $this->content();
include "layouts/footer.php";
?>
</body>
</html>

