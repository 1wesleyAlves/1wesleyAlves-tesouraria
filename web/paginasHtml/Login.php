<?php
/**
 * Created by PhpStorm.
 * User: wesley.cast
 * Date: 28/11/2017
 * Time: 11:13
 */


include_once ("../../controle/config.php");

?>

<html>
<head>
    <link rel="stylesheet" type="text/css"  href="<?php echo PATHCSS ?>"/>
    <link rel="stylesheet" type="text/css"  href="<?php echo PATHCSSESTILO ?>"/>
    <link rel="stylesheet" href="<?php echo PATHCSSWEB ?>"/>

</head>

<body>

<header>
    <?php include_once ("../../visao/includes/cabecalho.php");?>
</header>
<div class="row">
    <div class="col-md-6 anuncio" >
        <h1>Tesouraria ADPnorte</h1>
        <p>O SGT - Sistema de Gestão de Tesouraria trata do registo dos fluxos financeiros da igreja. Permite gerir contas correntes, efetuar pagamentos e recebimentos além de executar operações relacionadas com caixa.</p>

        <p>O elevado nível de integração com os outros módulos da área financeira potencia a eficiência da organização, eliminado a introdução duplicada de informação e contribuindo para atualização da informação financeira relevante.</p>

            <p>Dispõe de um conjunto variadissímo de automatismos, entre os quais se destaca, o processo das entradas e saídas de caixa efetuadas por cobranças e pagamentos.</p>
    </div>
    <div class="col-md-6">
    <section>
    <div class="login">
        <div class="form-group">
            <form class="form-group caixa" method="post" action="#">

                <header class="titulo"><h3>SGT – SISTEMA DE GESTÃO DE TESOURARIA</h3></header>

                <div class="row">
                    <div class="col-md-2">
                        <label id="nome" for="nome" class="form-group">Nome</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Informe seu nome de usuário" required style="width: 300px;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label id="senha" for="senha" class="form-group">Senha</label>
                    </div>
                    <div class="col-md-3">
                        <input type="password" id="senha" name="senha" class="form-control"  required placeholder="Informe sua senha de acesso" style="width: 300px;">
                    </div>
                </div>

                <div class="row" style="text-align: center; padding-top: 10px;">
                        <button class="btn-login">Acessar o sistema</button>

                </div>


            </form>
        </div>
    </div>
    </section>
</div>
</div>

<footer>
<?php
include_once ("../../visao/includes/rodape.php");
?>

</footer>

</body>
</html>
