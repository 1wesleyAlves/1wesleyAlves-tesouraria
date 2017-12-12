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
        <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.ui/1.8.5/jquery-ui.js"></script>
        <link type="text/css" rel="Stylesheet" href="http://ajax.microsoft.com/ajax/jquery.ui/1.8.5/themes/redmond/jquery-ui.css" />
        <script type="text/javascript" src="<?php echo CALENDARIO ?>"></script>
        <script type="text/javascript" src="<?php echo FUNCOES ?>"></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



    </head>

    <body>

    <header>
        <?php include_once ("../../visao/includes/cabecalho.php");?>
    </header>

    <section>
        <?php include_once ("../../visao/includes/menu.php");?>
    </section>
    <section class="container">
        <div class="conteudo">

            <div class="row">
                <div class="col-md-8"></div>
            </div>
            <fieldset>
                <legend> Caixa diário </legend>
                <div class="row">
                    <div class="col-md-1"></div>

                    <div class="col-md-5 radioTipo">
                        <div class="btn-info tipo" ONCLICK="exibeBoxTipo('TipoReceita')">Receita</div>
                    </div>
                    <div class="col-md-5 radioTipo">
                        <div class="btn-info tipo" ONCLICK="exibeBoxTipo('TipoDespesa')">Despesa</div>
                    </div>
                </div>

                <!-- Inicio da caixa de exibição do tipo de receita-->
                <div class="box_tipo_Receita" id="TipoReceita">
                    <div class="row"></div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-1">
                            <label class="form-group">Tipo</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">

                                <select class="form-control">
                                    <option value="1" id="option" onchange="exibeCaixa('membro')">Dízimo</option>
                                    <option>Oferta</option>
                                </select>
                            </div>
                            <div class="box-membro" id="membro">
                                testando box membro
                            </div>
                        </div>
                    </div>
                </div><!-- Fim da caixa de exibição do tipo de Despesa-->

                <div class="box_tipo_Despesa" id="TipoDespesa"><!-- Inicio da caixa de exibição do tipo de receita-->
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-8">
                            Testes
                        </div>
                    </div>
                </div><!-- Fim da caixa de exibição do tipo de Despesa-->

            </fieldset>
        </div>
    </section>


    <footer>
        <?php
        include_once ("../../visao/includes/rodape.php");
        ?>

    </footer>

    </body>
    </html>
<?php
/**
 * Created by PhpStorm.
 * User: wesley.cast
 * Date: 29/11/2017
 * Time: 14:59
 */