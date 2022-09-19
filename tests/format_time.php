<?php

/**
 * (ɔ) Online FORMAPRO - Laggy / Thibaut-Sophie-Lionel - 2022.
 */

$date1 = '21-10-1989'; 	// -grand
$date2 = '15-Aug 1989'; // +grand

// Nouvelle façon de gérer les dates
// $formatter = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::FULL, \IntlDateFormatter::NONE);
// // $formatter->setPattern('EEEE dd MMMM y');
// $formatter->setPattern('dd-MM-y');
// echo $formatter->format(time()).'<br>'.$formatter->getPattern().'<hr>';

$str1 = ' premier pas sur la lune ';
$str2 = ' Festival de Woodstock ';

$tmstp1 = strtotime($date1);
$tmstp2 = strtotime($date2);

$formatter1 = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::FULL, \IntlDateFormatter::NONE);
$formatter1->setPattern('EEEE dd MMMM y');
$dateFr1 = $formatter1->format(new \DateTime($date1));
$dateFr2 = $formatter1->format(new \DateTime($date2));

$evts = [
	[$str1, $dateFr1],
	[$str2, $dateFr2],
];

if (($tmstp1 <=> $tmstp2) + 1) {
	$evts = array_reverse($evts);
}

echo 'Le ' . $evts[0][0] . '(' . ($evts[0][1]) . ')' . ' est avant le ' . $evts[1][0] . '(' . ($evts[1][1]) . ')';