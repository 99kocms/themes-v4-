<?php defined('ROOT') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>404</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
        <style type="text/css">
            body{
            }
            a{
            }
        </style>
    </head>
    <body>
        <p>La page demandée est introuvable</p>
        <p><a href="<?php echo $this->getConfigVal('siteUrl'); ?>"><< Retour au site</a></p>
    </body>
</html>