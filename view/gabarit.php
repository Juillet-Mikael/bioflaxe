<?php
/**
 * @file    gabarit.php
 * @brief   This view is designed to centralize all common graphical component like header and footer (will be call by all views)
 * @author  Craeted by Mikael Juillet
 * @author  Updated by Mikael Juillet
 * @version 0.1 || 13.02.2021
 */

?>

<!DOCTYPE html>
    <html>
        <header>
            <title><?=$title; ?></title>
            <meta charset="UTF-8">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/content/CSS/main.css">
            <!--===============================================================================================-->

        </header>
        <body>
        <!--===================Header Menu==========================-->
            <div class="headerMenu">
                <p>
                    <a href="#news">Home</a>
                    <a href="#contact">Annonce</a>
                    <a href="#about">About</a>
                </p>
            </div>
            <div class="HeaderUser">
                <p>
                    <a href="#news">Login in</a>
                </p>
            </div>

        <!--===================Content==========================-->
        <?=$content; ?>

        <!--===================Footer Menu==========================-->
            <div class="footerMenu">
                <p>
                    Hello
                </p>
            </div>
        </body>
    </html>
