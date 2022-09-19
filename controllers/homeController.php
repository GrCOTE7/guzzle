<?php

/**
 * (ɔ) Online FORMAPRO - Laggy / Thibaut-Sophie-Lionel - 2022.
 */

$title = 'Accueil';
require_once 'controllers/agendaController.php';
require_once 'controllers/dateController.php';

$data = getMonth();

aff($data);