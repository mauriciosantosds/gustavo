<?php
$page = "Fale Conosco &ndash; Dr Gustavo Souza";
include 'views/head.php'; ?>
<link rel="stylesheet" href="css/geral.css">
<style>
    .g-recaptcha {
        padding-bottom: 20px;
    }
</style>
<meta property="og:type" content="website"/>
<meta property="og:title" content="<?=$title?>"/>
<meta property="og:description" content="Dr. Gustavo Souza Especialista em Ortodontia e Mestrando em DTM e Dor Orofacial"/>
<meta property="og:url" content="http://gustavosouza.net/fale-conosco.php"/>
<meta property="og:image" content="http://gustavosouza.net/img/logo-1.png"/>
</head>
<?php include 'views/header.html';?>
<?php include 'views/menu.html';?>
<?php include 'views/fale-conosco.php'; ?>
<?php include 'views/footer.html';?>
<script src="js/jquery.mask.min.js"></script>
<script>
$(document).ready(function(){
    $("input[name='telefone']").mask('(00) 0000-00000');
    $("#fale-conosco").submit(function(e) {
            var formData = new FormData(this);
            $.ajax({
                url: 'contato.php',
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function( data ) {
                    if (data == '200') {
                        $("#info").html('<div class="alert alert-success">'
                        +'Mensagem enviada!</div>');
                    }
                    if (data == 'roboerro') {
                        $("#info").html('<div class="alert alert-danger">'
                        +'Problemas no envio marque o botão não sou um robô!</div>');
                    }
                },
                error: function (request, status, error) {
                    console.log(request+" error "+error);
                }
            }); 
        e.preventDefault();
    }); 
});    
</script>
</body>
</html>