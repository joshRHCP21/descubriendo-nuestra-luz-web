<?php include_once 'config/init.php'; ?>

<?php

function requireToVar($file)
{
    ob_start();
    require($file);
    return ob_get_clean();
}

$s_tname = isset($_GET['terapia']) ? $_GET['terapia'] : '';
$template = new Template('templates/ver-terapia.php');
// echo $s_tname;
switch($s_tname)
{
    case 't-flores-bach' :
        $body               = requireToVar('templates/terapias/t-flores-bach.php');
        $template->title    = 'Terapia de Flores de Bach';
        $template->body     = $body;
        break;
    case 't-sistematica' :
        $body               = requireToVar('templates/terapias/t-sistematica.php');
        $template->title    = 'Terapia de Constelaciones individuales';
        $template->body     = $body;
        break;
    default :
        $body               = requireToVar('templates/terapias/t-bionergetica.php');
        $template->title    = 'Terapia Bionergetica y Sintergética';
        $template->body     = $body;
        break;
}

echo $template;