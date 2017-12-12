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
<script>
        $(function(){
        $("#calendario").datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'
        ],
        dayNamesMin: [
        'D','S','T','Q','Q','S','S','D'
        ],
        dayNamesShort: [
        'Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'
        ],
        monthNames: [  'Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro',
        'Outubro','Novembro','Dezembro'
        ],
        monthNamesShort: [
        'Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set',
        'Out','Nov','Dez'
        ],
        nextText: 'Próximo',
        prevText: 'Anterior'
        });
        });

</script>


        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $( function() {
                $( "#datepicker" ).datepicker();
                //$("#datepicker").visibility("true");
            } );
        </script>




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
                <legend> Registro de eventos </legend>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-group" alt="datepicker">Selecione a data de registro</label>
                            <div id="datepicker"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-group" alt="datepicker">Descrição</label>
                            <input type="text" id="descricao" name="descricao" placeholder="Informe a descrição do evento"/>
                        </div>
                    </div>
                </div>
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