<?php
/**
 * @file    homePage.php
 * @brief   This file is the rooter managing the link with controllers.
 * @author  Craeted by Mikael Juillet
 * @author  Updated by Mikael Juillet
 * @version 0.1 || 13.02.2021
 */

ob_start();
$title = "Bioflaxe . Accueil";
?>
<section>
    <div>
        <p>
            salut c'est la page principale.
        </p>
    </div>
</section>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>

