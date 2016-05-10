<?php
    if(!$_POST['email']){
        header("location:http://enemto.top");
    }
    include "../mysql_conn.php";

    $email = addslashes($_POST['email']);
    $escolaridade = addslashes($_POST['escolaridade']);
    $tipo = addslashes($_POST['tipo']);
    $nome = utf8_decode(addslashes($_POST['nome']));
    if (!$mysqli->query("INSERT INTO email (nome, email, escolaridade, tipo) values ('$nome', '$email', '$escolaridade', $tipo)")) {
        printf("Ops! Aconteceu um erro. :(");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title></title>


    <link rel="stylesheet" href="css/jquery.mobile-1.3.2.min.css">

    <!-- Extra Codiqa features -->
    <link rel="stylesheet" href="css/codiqa.ext.css">

    <!-- jQuery and jQuery Mobile -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.mobile-1.3.2.min.js"></script>

    <!-- Extra Codiqa features -->
    <script src="js/codiqa.ext.js"></script>

    <script src="js/app.js"></script>
    <script src="js/jqplot/jquery.jqplot.js"></script>

</head>
<body>
<!-- Home -->
<div data-role="page" id="index">
    <div data-theme="b" data-role="header" data-position="fixed">
        <h5>
            ENEM TO TOP!
        </h5>
    </div>
    <div data-role="content">
        <h3 style="text-align: center">
            Teste vocacional
        </h3>
        <h5 style="text-align: center">

            Este teste tem por objetivo identificar aptidões a partir de alguns traços de sua personalidade. Basta
            responder honestamente às questões. Boa sorte!

        </h5>

        <a data-role="button" data-theme="b" href="#home" data-icon="forward" data-iconpos="right" data-transition="flip">
            Começar!
        </a>


        <div data-theme="b" data-role="footer" data-position="fixed">
            <h3>
                ENEM TO TOP!
            </h3>
            <center><small>Este teste foi desenvolvido em uma iniciativa da Faculdade de Ciências Contábeis de Manhuaçu/MG - FACIG.
            <br/></small></center>
        </div>
    </div>
</div>
<!-- Fim da home -->

<!-- Início do questionário -->
<div data-role="page" id="home">
    <div data-theme="b" data-role="header" data-position="fixed">
        <h5>
            Questionário
        </h5>
    </div>
    <div data-role="content">
        <div id="body_content">

        </div>
    </div>

    <div data-theme="b" data-role="footer" data-position="fixed">
        <h3>
            ENEM TO TOP!
        </h3>
        <a data-role="button" class="ui-btn-left" hre
        f="javascript:void(0);" id="back_button">
            Voltar
        </a>
    </div>

</div>

<!-- Additional plugins go here -->

<script class="include" type="text/javascript" src="js/jqplot/plugins/jqplot.barRenderer.min.js"></script>
<script class="include" type="text/javascript" src="js/jqplot/plugins/jqplot.pieRenderer.min.js"></script>
<script class="include" type="text/javascript" src="js/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
<script class="include" type="text/javascript" src="js/jqplot/plugins/jqplot.pointLabels.min.js"></script>
</body>
</html>
