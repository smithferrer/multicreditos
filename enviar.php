<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['email'])){

$asunto = $_POST['asunto'];
$name = $_POST['fullname'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.alianzaprofesional.co';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@alianzaprofesional.co';                     //SMTP username
    $mail->Password   = 'UfB$jtp1~ZUs';                               //SMTP password
    $mail->SMTPSecure = 'ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('info@alianzaprofesional.co', 'Formulario web por: '.$name);
    $mail->addAddress('info@alianzaprofesional.co');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = "
    <html>
    <head>
    <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
  	<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
      <style>
          :root
          .container {margin: 0 auto;max-width: 1280px;width: 90%;}@media only screen and (min-width: 601px) {.container {width: 85%;}}@media only screen and (min-width: 993px) {.container {width: 70%;}}.col .row {margin-left: -0.75rem;margin-right: -0.75rem;}.section {padding-top: 1rem;padding-bottom: 1rem;}.section.no-pad {padding: 0;}.section.no-pad-bot {padding-bottom: 0;}.section.no-pad-top {padding-top: 0;}.row {margin-left: auto;margin-right: auto;margin-bottom: 20px;}.row:after {content: '';display: table;clear: both;}.row .col {float: left;-webkit-box-sizing: border-box;box-sizing: border-box;padding: 0 0.75rem;min-height: 1px;}.row .col[class*='push-'], .row .col[class*='pull-'] {position: relative;}.row .col.s1 {width: 8.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.s2 {width: 16.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.s3 {width: 25%;margin-left: auto;left: auto;right: auto;}.row .col.s4 {width: 33.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.s5 {width: 41.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.s6 {width: 50%;margin-left: auto;left: auto;right: auto;}.row .col.s7 {width: 58.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.s8 {width: 66.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.s9 {width: 75%;margin-left: auto;left: auto;right: auto;}.row .col.s10 {width: 83.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.s11 {width: 91.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.s12 {width: 100%;margin-left: auto;left: auto;right: auto;}.row .col.offset-s1 {margin-left: 8.3333333333%;}.row .col.pull-s1 {right: 8.3333333333%;}.row .col.push-s1 {left: 8.3333333333%;}.row .col.offset-s2 {margin-left: 16.6666666667%;}.row .col.pull-s2 {right: 16.6666666667%;}.row .col.push-s2 {left: 16.6666666667%;}.row .col.offset-s3 {margin-left: 25%;}.row .col.pull-s3 {right: 25%;}.row .col.push-s3 {left: 25%;}.row .col.offset-s4 {margin-left: 33.3333333333%;}.row .col.pull-s4 {right: 33.3333333333%;}.row .col.push-s4 {left: 33.3333333333%;}.row .col.offset-s5 {margin-left: 41.6666666667%;}.row .col.pull-s5 {right: 41.6666666667%;}.row .col.push-s5 {left: 41.6666666667%;}.row .col.offset-s6 {margin-left: 50%;}.row .col.pull-s6 {right: 50%;}.row .col.push-s6 {left: 50%;}.row .col.offset-s7 {margin-left: 58.3333333333%;}.row .col.pull-s7 {right: 58.3333333333%;}.row .col.push-s7 {left: 58.3333333333%;}.row .col.offset-s8 {margin-left: 66.6666666667%;}.row .col.pull-s8 {right: 66.6666666667%;}.row .col.push-s8 {left: 66.6666666667%;}.row .col.offset-s9 {margin-left: 75%;}.row .col.pull-s9 {right: 75%;}.row .col.push-s9 {left: 75%;}.row .col.offset-s10 {margin-left: 83.3333333333%;}.row .col.pull-s10 {right: 83.3333333333%;}.row .col.push-s10 {left: 83.3333333333%;}.row .col.offset-s11 {margin-left: 91.6666666667%;}.row .col.pull-s11 {right: 91.6666666667%;}.row .col.push-s11 {left: 91.6666666667%;}.row .col.offset-s12 {margin-left: 100%;}.row .col.pull-s12 {right: 100%;}.row .col.push-s12 {left: 100%;}@media only screen and (min-width: 601px) {.row .col.m1 {width: 8.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.m2 {width: 16.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.m3 {width: 25%;margin-left: auto;left: auto;right: auto;}.row .col.m4 {width: 33.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.m5 {width: 41.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.m6 {width: 50%;margin-left: auto;left: auto;right: auto;}.row .col.m7 {width: 58.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.m8 {width: 66.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.m9 {width: 75%;margin-left: auto;left: auto;right: auto;}.row .col.m10 {width: 83.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.m11 {width: 91.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.m12 {width: 100%;margin-left: auto;left: auto;right: auto;}.row .col.offset-m1 {margin-left: 8.3333333333%;}.row .col.pull-m1 {right: 8.3333333333%;}.row .col.push-m1 {left: 8.3333333333%;}.row .col.offset-m2 {margin-left: 16.6666666667%;}.row .col.pull-m2 {right: 16.6666666667%;}.row .col.push-m2 {left: 16.6666666667%;}.row .col.offset-m3 {margin-left: 25%;}.row .col.pull-m3 {right: 25%;}.row .col.push-m3 {left: 25%;}.row .col.offset-m4 {margin-left: 33.3333333333%;}.row .col.pull-m4 {right: 33.3333333333%;}.row .col.push-m4 {left: 33.3333333333%;}.row .col.offset-m5 {margin-left: 41.6666666667%;}.row .col.pull-m5 {right: 41.6666666667%;}.row .col.push-m5 {left: 41.6666666667%;}.row .col.offset-m6 {margin-left: 50%;}.row .col.pull-m6 {right: 50%;}.row .col.push-m6 {left: 50%;}.row .col.offset-m7 {margin-left: 58.3333333333%;}.row .col.pull-m7 {right: 58.3333333333%;}.row .col.push-m7 {left: 58.3333333333%;}.row .col.offset-m8 {margin-left: 66.6666666667%;}.row .col.pull-m8 {right: 66.6666666667%;}.row .col.push-m8 {left: 66.6666666667%;}.row .col.offset-m9 {margin-left: 75%;}.row .col.pull-m9 {right: 75%;}.row .col.push-m9 {left: 75%;}.row .col.offset-m10 {margin-left: 83.3333333333%;}.row .col.pull-m10 {right: 83.3333333333%;}.row .col.push-m10 {left: 83.3333333333%;}.row .col.offset-m11 {margin-left: 91.6666666667%;}.row .col.pull-m11 {right: 91.6666666667%;}.row .col.push-m11 {left: 91.6666666667%;}.row .col.offset-m12 {margin-left: 100%;}.row .col.pull-m12 {right: 100%;}.row .col.push-m12 {left: 100%;}}@media only screen and (min-width: 993px) {.row .col.l1 {width: 8.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.l2 {width: 16.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.l3 {width: 25%;margin-left: auto;left: auto;right: auto;}.row .col.l4 {width: 33.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.l5 {width: 41.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.l6 {width: 50%;margin-left: auto;left: auto;right: auto;}.row .col.l7 {width: 58.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.l8 {width: 66.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.l9 {width: 75%;margin-left: auto;left: auto;right: auto;}.row .col.l10 {width: 83.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.l11 {width: 91.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.l12 {width: 100%;margin-left: auto;left: auto;right: auto;}.row .col.offset-l1 {margin-left: 8.3333333333%;}.row .col.pull-l1 {right: 8.3333333333%;}.row .col.push-l1 {left: 8.3333333333%;}.row .col.offset-l2 {margin-left: 16.6666666667%;}.row .col.pull-l2 {right: 16.6666666667%;}.row .col.push-l2 {left: 16.6666666667%;}.row .col.offset-l3 {margin-left: 25%;}.row .col.pull-l3 {right: 25%;}.row .col.push-l3 {left: 25%;}.row .col.offset-l4 {margin-left: 33.3333333333%;}.row .col.pull-l4 {right: 33.3333333333%;}.row .col.push-l4 {left: 33.3333333333%;}.row .col.offset-l5 {margin-left: 41.6666666667%;}.row .col.pull-l5 {right: 41.6666666667%;}.row .col.push-l5 {left: 41.6666666667%;}.row .col.offset-l6 {margin-left: 50%;}.row .col.pull-l6 {right: 50%;}.row .col.push-l6 {left: 50%;}.row .col.offset-l7 {margin-left: 58.3333333333%;}.row .col.pull-l7 {right: 58.3333333333%;}.row .col.push-l7 {left: 58.3333333333%;}.row .col.offset-l8 {margin-left: 66.6666666667%;}.row .col.pull-l8 {right: 66.6666666667%;}.row .col.push-l8 {left: 66.6666666667%;}.row .col.offset-l9 {margin-left: 75%;}.row .col.pull-l9 {right: 75%;}.row .col.push-l9 {left: 75%;}.row .col.offset-l10 {margin-left: 83.3333333333%;}.row .col.pull-l10 {right: 83.3333333333%;}.row .col.push-l10 {left: 83.3333333333%;}.row .col.offset-l11 {margin-left: 91.6666666667%;}.row .col.pull-l11 {right: 91.6666666667%;}.row .col.push-l11 {left: 91.6666666667%;}.row .col.offset-l12 {margin-left: 100%;}.row .col.pull-l12 {right: 100%;}.row .col.push-l12 {left: 100%;}}@media only screen and (min-width: 1201px) {.row .col.xl1 {width: 8.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.xl2 {width: 16.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.xl3 {width: 25%;margin-left: auto;left: auto;right: auto;}.row .col.xl4 {width: 33.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.xl5 {width: 41.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.xl6 {width: 50%;margin-left: auto;left: auto;right: auto;}.row .col.xl7 {width: 58.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.xl8 {width: 66.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.xl9 {width: 75%;margin-left: auto;left: auto;right: auto;}.row .col.xl10 {width: 83.3333333333%;margin-left: auto;left: auto;right: auto;}.row .col.xl11 {width: 91.6666666667%;margin-left: auto;left: auto;right: auto;}.row .col.xl12 {width: 100%;margin-left: auto;left: auto;right: auto;}.row .col.offset-xl1 {margin-left: 8.3333333333%;}.row .col.pull-xl1 {right: 8.3333333333%;}.row .col.push-xl1 {left: 8.3333333333%;}.row .col.offset-xl2 {margin-left: 16.6666666667%;}.row .col.pull-xl2 {right: 16.6666666667%;}.row .col.push-xl2 {left: 16.6666666667%;}.row .col.offset-xl3 {margin-left: 25%;}.row .col.pull-xl3 {right: 25%;}.row .col.push-xl3 {left: 25%;}.row .col.offset-xl4 {margin-left: 33.3333333333%;}.row .col.pull-xl4 {right: 33.3333333333%;}.row .col.push-xl4 {left: 33.3333333333%;}.row .col.offset-xl5 {margin-left: 41.6666666667%;}.row .col.pull-xl5 {right: 41.6666666667%;}.row .col.push-xl5 {left: 41.6666666667%;}.row .col.offset-xl6 {margin-left: 50%;}.row .col.pull-xl6 {right: 50%;}.row .col.push-xl6 {left: 50%;}.row .col.offset-xl7 {margin-left: 58.3333333333%;}.row .col.pull-xl7 {right: 58.3333333333%;}.row .col.push-xl7 {left: 58.3333333333%;}.row .col.offset-xl8 {margin-left: 66.6666666667%;}.row .col.pull-xl8 {right: 66.6666666667%;}.row .col.push-xl8 {left: 66.6666666667%;}.row .col.offset-xl9 {margin-left: 75%;}.row .col.pull-xl9 {right: 75%;}.row .col.push-xl9 {left: 75%;}.row .col.offset-xl10 {margin-left: 83.3333333333%;}.row .col.pull-xl10 {right: 83.3333333333%;}.row .col.push-xl10 {left: 83.3333333333%;}.row .col.offset-xl11 {margin-left: 91.6666666667%;}.row .col.pull-xl11 {right: 91.6666666667%;}.row .col.push-xl11 {left: 91.6666666667%;}.row .col.offset-xl12 {margin-left: 100%;}.row .col.pull-xl12 {right: 100%;}.row .col.push-xl12 {left: 100%;}}.card {position: relative;display: -ms-flexbox;display: flex;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0, 0, 0, 0.125);border-radius: 0.25rem;}.card > hr {margin-right: 0;margin-left: 0;}.card-panel {-webkit-transition: -webkit-box-shadow .25s;transition: -webkit-box-shadow .25s;transition: box-shadow .25s;transition: box-shadow .25s, -webkit-box-shadow .25s;padding: 24px;margin: 0.5rem 0 1rem 0;border-radius: 2px;background-color: #fff;}.card {position: relative;margin: 0.5rem 0 1rem 0;background-color: #fff;-webkit-transition: -webkit-box-shadow .25s;transition: -webkit-box-shadow .25s;transition: box-shadow .25s;transition: box-shadow .25s, -webkit-box-shadow .25s;border-radius: 2px;}.card .card-title {font-size: 24px;font-weight: 300;}.card .card-title.activator {cursor: pointer;}.card.small, .card.medium, .card.large {position: relative;}.card.small .card-image, .card.medium .card-image, .card.large .card-image {max-height: 60%;overflow: hidden;}.card.small .card-image + .card-content, .card.medium .card-image + .card-content, .card.large .card-image + .card-content {max-height: 40%;}.card.small .card-content, .card.medium .card-content, .card.large .card-content {max-height: 100%;overflow: hidden;}.card.small .card-action, .card.medium .card-action, .card.large .card-action {position: absolute;bottom: 0;left: 0;right: 0;}.card.small {height: 300px;}.card.medium {height: 400px;}.card.large {height: 500px;}.card.horizontal {display: -webkit-box;display: -webkit-flex;display: -ms-flexbox;display: flex;}.card.horizontal.small .card-image, .card.horizontal.medium .card-image, .card.horizontal.large .card-image {height: 100%;max-height: none;overflow: visible;}.card.horizontal.small .card-image img, .card.horizontal.medium .card-image img, .card.horizontal.large .card-image img {height: 100%;}.card.horizontal .card-image {max-width: 50%;}.card.horizontal .card-image img {border-radius: 2px 0 0 2px;max-width: 100%;width: auto;}.card.horizontal .card-stacked {display: -webkit-box;display: -webkit-flex;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-webkit-flex-direction: column;    -ms-flex-direction: column;flex-direction: column;-webkit-box-flex: 1;-webkit-flex: 1;    -ms-flex: 1;flex: 1;position: relative;}.card.horizontal .card-stacked .card-content {-webkit-box-flex: 1;-webkit-flex-grow: 1;    -ms-flex-positive: 1;flex-grow: 1;}.card.sticky-action .card-action {z-index: 2;}.card.sticky-action .card-reveal {z-index: 1;padding-bottom: 64px;}.card .card-image {position: relative;}.card .card-image img {display: block;border-radius: 2px 2px 0 0;position: relative;left: 0;right: 0;top: 0;bottom: 0;width: 100%;}.card .card-image .card-title {color: #fff;position: absolute;bottom: 0;left: 0;max-width: 100%;padding: 24px;}.card .card-content {padding: 24px;border-radius: 0 0 2px 2px;}.card .card-content p {margin: 0;}.card .card-content .card-title {display: block;line-height: 32px;margin-bottom: 8px;}.card .card-content .card-title i {line-height: 32px;}.card .card-action {background-color: inherit;border-top: 1px solid rgba(160, 160, 160, 0.2);position: relative;padding: 16px 24px;}.card .card-action:last-child {border-radius: 0 0 2px 2px;}.card .card-action a:not(.btn):not(.btn-large):not(.btn-small):not(.btn-large):not(.btn-floating) {color: #ffab40;margin-right: 24px;-webkit-transition: color .3s ease;transition: color .3s ease;text-transform: uppercase;}.card .card-action a:not(.btn):not(.btn-large):not(.btn-small):not(.btn-large):not(.btn-floating):hover {color: #ffd8a6;}.card .card-reveal {padding: 24px;position: absolute;background-color: #fff;width: 100%;overflow-y: auto;left: 0;top: 100%;height: 100%;z-index: 3;display: none;}.card .card-reveal .card-title {cursor: pointer;display: block;}.text-center {text-align: center !important;}
      </style>
      <style>
        .indigo {background-color: #3f51b5 !important;}.indigo-text {color: #3f51b5 !important;}.indigo.lighten-5 {background-color: #e8eaf6 !important;}.indigo-text.text-lighten-5 {color: #e8eaf6 !important;}.indigo.lighten-4 {background-color: #c5cae9 !important;}.indigo-text.text-lighten-4 {color: #c5cae9 !important;}.indigo.lighten-3 {background-color: #9fa8da !important;}.indigo-text.text-lighten-3 {color: #9fa8da !important;}.indigo.lighten-2 {background-color: #7986cb !important;}.indigo-text.text-lighten-2 {color: #7986cb !important;}.indigo.lighten-1 {background-color: #5c6bc0 !important;}.indigo-text.text-lighten-1 {color: #5c6bc0 !important;}.indigo.darken-1 {background-color: #3949ab !important;}.indigo-text.text-darken-1 {color: #3949ab !important;}.indigo.darken-2 {background-color: #303f9f !important;}.indigo-text.text-darken-2 {color: #303f9f !important;}.indigo.darken-3 {background-color: #283593 !important;}.indigo-text.text-darken-3 {color: #283593 !important;}.indigo.darken-4 {background-color: #1a237e !important;}.indigo-text.text-darken-4 {color: #1a237e !important;}.indigo.accent-1 {background-color: #8c9eff !important;}.indigo-text.text-accent-1 {color: #8c9eff !important;}.indigo.accent-2 {background-color: #536dfe !important;}.indigo-text.text-accent-2 {color: #536dfe !important;}.indigo.accent-3 {background-color: #3d5afe !important;}.indigo-text.text-accent-3 {color: #3d5afe !important;}.indigo.accent-4 {background-color: #304ffe !important;}.indigo-text.text-accent-4 {color: #304ffe !important;}.black {background-color: #000000 !important;}.black-text {color: #000000 !important;}.white {background-color: #FFFFFF !important;}.white-text {color: #FFFFFF !important;}.transparent {background-color: transparent !important;}.transparent-text {color: transparent !important;}
      </style>
      <style>
        table, th, td {border: none;}table {width: 100%;display: table;border-collapse: collapse;border-spacing: 0;}table.striped tr {border-bottom: none;}table.striped > tbody > tr:nth-child(odd) {background-color: rgba(242, 242, 242, 0.5);}table.striped > tbody > tr > td {border-radius: 0;}table.highlight > tbody > tr {-webkit-transition: background-color .25s ease;transition: background-color .25s ease;}table.highlight > tbody > tr:hover {background-color: rgba(242, 242, 242, 0.5);}table.centered thead tr th, table.centered tbody tr td {text-align: center;}tr {border-bottom: 1px solid rgba(0, 0, 0, 0.12);}td, th {padding: 15px 5px;display: table-cell;text-align: left;vertical-align: middle;border-radius: 2px;}@media only screen and (max-width: 992px) {table.responsive-table {width: 100%;border-collapse: collapse;border-spacing: 0;display: block;position: relative;}table.responsive-table th,table.responsive-table td {margin: 0;vertical-align: top;}table.responsive-table th {text-align: left;}table.responsive-table thead {display: block;float: left;}table.responsive-table thead tr {display: block;padding: 0 10px 0 0;}table.responsive-table tbody {display: block;width: auto;position: relative;overflow-x: auto;white-space: nowrap;}table.responsive-table tbody tr {display: inline-block;vertical-align: top;}table.responsive-table th {display: block;text-align: right;}table.responsive-table td {display: block;min-height: 1.25em;text-align: left;}table.responsive-table tr {border-bottom: none;padding: 0 10px;}table.responsive-table thead {border: 0;border-right: 1px solid rgba(0, 0, 0, 0.12);}}
      </style>
    </head>
    <body class='container'>

    <div class='card-panel row'>
    <div class='col s10 offset-s1'>
    <div class='card'>
        <div class='card-content indigo accent-1 black-text'>
          <span class='card-title'><h1><strong>Alianza Profesional,</strong></h1></span>

          <p>Ha recibido un mensaje generado y enviado mediante el formulario en la pagina web www.alianzaprofesional.co con la siguiente Informacion:</p>
          <br>
          <table>
            <tbody style='width: 100%;'>
              <tr>
                <td style='width: 20%;'><strong>Nombre:</strong></td>
                <td style='width: 80%;'>{$name}</td>
              </tr>
              <tr>
                <td style='width: 20%;'><strong>Asunto:</strong></td>
                <td style='width: 80%;'>{$asunto}</td>
              </tr>
              <tr>
                <td style='width: 20%;'><strong>Correo:</strong></td>
                <td style='width: 80%;'>{$email}</td>
              </tr>
              <tr>
                <td style='width: 20%;'><strong>Telefono:</strong></td>
                <td style='width: 80%;'>{$telefono}</td>
              </tr>
              <tr>
                <td style='width: 20%;'><strong>Mensaje:</strong></td>
                <td style='width: 80%;'>{$mensaje}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    </div>
    </body>
    <html>
    ";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//    $mail->send();
//    echo 'Message has been sent';
//} catch (Exception $e) {
//    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//}
    $mail->send();
        header('Location:mensaje-de-envio.html');
    } catch (Exception $e) {
        echo 'No se pudo enviar el correo: ', $mail->ErrorInfo;
    }}

    else
    {
    	echo "mensaje no enviado";
    }

    ?>
