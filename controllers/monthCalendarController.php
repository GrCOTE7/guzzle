<?php

require_once './controllers/dateController.php';

$data['quantieme']  = date('d');
$data['mois']  = getMonth(date('m'));
$data['annee'] = date('Y');