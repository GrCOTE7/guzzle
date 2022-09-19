<?php

require 'dateController.php';

aff(getDateFr(), 'DateFR');
aff(new DateTime('2022-02-01'));
aff(strtotime('2022-02-14'), 'ddddd');

$data = getMonthes();

// aff(getMonthFromDate(time()));
aff(strtotime('2022-02-14'));

// aff(date('F', time()), 'MMMM');

$d = strtotime('2022-02-14');
// $data['d'] = getDateFr(strtotime(time()));

// $dateFev = '2022-02-01 10:00';

// // aff(getDateFr($date, 'MMMM y'));
// // aff(getDateFr($date));
// // aff(getDateFr($dateFev));
// // aff(getDateFr());

// // aff(getDateFr());
// // aff(getFirthDayOfMonth());

// $days = [
// 	'Monday'    => 'Lundi',
// 	'Tuesday'   => 'Mardi',
// 	'Wednesday' => 'Mercredi',
// 	'Thursday'  => 'Jeudi',
// 	'Friday'    => 'Vendredi',
// 	'Saturday'  => 'Samedi',
// 	'Sunday'    => 'Dimanche', ];
// $monthes = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
// // aff($days);
// // exit;
// // aff($monthsFr);

// // echo strtotime("10 September 2000"), "\n";
// // First day of this month
// // $d = new DateTime('first day of this month');
// // echo date('w', $d->format('d/m/Y')) . '<br>';

// // // First day of a specific month
// // $d = new DateTime('2010-01-19');
// // $d->modify('first day of this month');
// // echo $d->format('jS, F Y');

// // // alternatively...
// // echo date_create('2010-01-19')
// // 	->modify('first day of this month')
// // 	->format('jS, F Y');
// // aff(time());

// $date = ($date??'') ?: time();
// aff(date('d/m/Y H:i:s', $date));

// $dateArr = getdate($date);

// // aff(implode($dateArr), 'str');
// // aff(date(implode($dateArr)));

// aff(implode(',<br>', $dateArr));
// echo $days[$dateArr['weekday']];

// echo getNbDayMonth($date);

// $date = date('l', strtotime('first day of this month', $date));
// $date = strtotime(date('Y-m-d', strtotime('first day of may')));
// aff($date, 'jjj');
// exit;
// $date = strtotime('now');
// aff(strtotime('now'));
// $date = strtotime('now');
// aff($days[date('l', $date)], 'Date en lettre');
// aff(date('w', $date), 'Date en chiffre');
// aff($date, 'DATE1');
// aff(date('d/m/Y H:i:s', $date), 'DATE Litt');

// aff(time(), 'ACTUEL');

// aff(time() - $date, 'Delta');

// getFirthDayOfMonth($date);

// $n = getNbDayMonth($date);
// aff($n, 'nb Days');
// $completeMonth = range(1, getNbDayMonth($date));
// aff($completeMonth[0] . ' → ' . $completeMonth[$n - 1]);

// array_unshift($completeMonth, 'hjlkh');
// array_unshift($completeMonth, 'hjlkh');
// array_unshift($completeMonth, 'hjlkh');

// array_push($completeMonth, 1);
// array_push($completeMonth, 2);

// aff(7 - count($completeMonth) % 7, 'Nombre');

// aff($completeMonth, 'Mois complet');

// fct (mois en chiffre) → N° ds la semain du 1er jour, nbre du jour du mois,
// Ex: 09 → 4, 30

// $week = date('W', $date . "\n");
// aff($week, 'Week');
// $current_day = date('d', $date);
// aff($current_day, 'J');
// $week_day_first = date('N', mktime(0, 0, 0, date('m', $date), 1, date('Y', $date)));

// aff(date('m', $date), 'M');
// aff(date('Y', $date), 'Y');
// $week_day_first = date('N', $date) + 0; // fake
// aff($week_day_first);

// for ($i = 0; $i < 7; ++$i) {
// 	$data['days'][] = substr($days[$i], 0, 2);
// }
// for ($w = 1 - $week_day_first + 1; $w <= $days_count; $w = $w + 7) {
// 	$counter = 0;
// 	for ($d = $w; $d <= $w + 6; ++$d) {
// 		$data['quantiemes'][$w][] = $d;
// 		++$counter;
// 	}
// }
// aff($data);
// exit;
?>
<!--
	<?php for ($w = 1 - $week_day_first + 1; $w <= $days_count; $w = $w + 7) { ?>
<tr>
	<?php $counter = 0; ?>
	<?php for ($d = $w; $d <= $w + 6; ++$d) { ?>
	<td
		style="<?php if ($counter > 4) { ?>color: red;<?php } ?><?php if ($current_day == $d) { ?>border: 1px solid red; background-color:yellow; color:green;font-weight:bold; border-radius: 7px<?php } ?> text-align: center">
		<?php echo $d > 0 ? ($d > $days_count ? '-' : $d) : '-'; ?>
	</td>
	<?php ++$counter; ?>
	<?php } ?>
</tr>
<?php } ?>
-->