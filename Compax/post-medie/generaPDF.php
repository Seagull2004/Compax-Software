<?php

require __DIR__ . "/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

$nome = $_GET["nome"];
$primo_istituto_adatto = $_GET["primo_istituto_adatto"];
$pt_primo_istituto_adatto = $_GET["pt_primo_istituto_adatto"];
$secondo_istituto_adatto = $_GET["secondo_istituto_adatto"];
$pt_secondo_istituto_adatto = $_GET["pt_secondo_istituto_adatto"];
$terzo_istituto_adatto = $_GET["terzo_istituto_adatto"];
$pt_terzo_istituto_adatto = $_GET["pt_terzo_istituto_adatto"];


/**
 * Set the Dompdf options
 */
$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

/**
 * Set the paper size and orientation
 */
$dompdf->setPaper("A4", "landscape");

/**
 * Load the HTML and replace placeholders with values from the form
 */
$html = file_get_contents("templateStampa.html");

$html = str_replace(["{{ nome }}", "{{ primo_istituto_adatto }}", "{{ pt_primo_istituto_adatto }}", "{{ secondo_istituto_adatto }}", "{{ pt_secondo_istituto_adatto }}", "{{ terzo_istituto_adatto }}", "{{ pt_terzo_istituto_adatto }}"], [$nome, $primo_istituto_adatto, $pt_primo_istituto_adatto, $secondo_istituto_adatto, $pt_secondo_istituto_adatto, $terzo_istituto_adatto, $pt_terzo_istituto_adatto], $html);

$dompdf->loadHtml($html);
//$dompdf->loadHtmlFile("template.html");

/**
 * Create the PDF and set attributes
 */
$dompdf->render();

$dompdf->addInfo("Title", "Scuole superiori");
$dompdf->addInfo("Author", "Compax Software");

/**
 * Send the PDF to the browser
 */
$dompdf->stream("scuoleSuperioriCS.pdf", ["Attachment" => 0]);

/**
 * Save the PDF file locally
 */
//$output = $dompdf->output();
//file_put_contents("scuoleSuperioriCS", $output);
?>