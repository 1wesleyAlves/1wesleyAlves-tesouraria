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
        <link rel="stylesheet" type="text/css"  href="<?php echo PATHCSSWEB?>"/>

    </head>

    <body>

    <header>
        <?php include_once ("../../visao/includes/cabecalho.php");?>
    </header>

            <section>
                <?php include_once ("../../visao/includes/menu.php");?>
            </section>

    </div>

    <footer>
        <div class="rodape">
            <?php
                include_once ("../../visao/includes/rodape.php");
            ?>
        </div>

    </footer>

    </body>
    </html>
<?php
/**
 * Created by PhpStorm.
 * User: wesley.cast
 * Date: 29/11/2017
 * Time: 11:06
 */