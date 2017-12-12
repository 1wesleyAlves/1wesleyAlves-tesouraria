<?php
/**
 * Created by PhpStorm.
 * User: wesley.cast
 * Date: 29/11/2017
 * Time: 13:10
 */
?>


<link rel="stylesheet" type="text/css"  href="<?php echo PATHCSS ?>"/>
<link rel="stylesheet" type="text/css"  href="<?php echo PATHCSSESTILO ?>"/>
<link rel="stylesheet" href="<?php echo PATHCSSWEB ?>"/>
<link rel="stylesheet" href="<?php echo FUNCOES ?>"/>


<header>
    <div class="cabecalho">
        <div class="row">
            <div class="col-md-2">
                <div class="logo"></div>
            </div>

            <div class="col-md-4"> </div>

            <div class="col-md-6">
                <div class="boxUsuario">
                    <p>Saudação</p><!--Bom dia, boa tarde, boa noite-->
                    <p>##Usuário##</p><!--Só aparecer quando logar no sistema-->
                    <p>Hoje é <?php echo date("d/m/Y") ?></p>
                </div>
            </div>

        </div>
    </div>
    <div class="menu">

    </div>

</header>

