<?php

function getDateEn($date = null): string
{
	return date('Y-m-d H:i:s', $date);
}

function getDateFr(string $date = '', $format = 'EEEE dd MMMM y HH:mm:ss'): string
{
	$formatter1 = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::FULL, \IntlDateFormatter::NONE);
	$formatter1->setPattern($format);

	return $formatter1->format(new \DateTime($date));
}

function getMonthes()
{
	for ($i = 0; $i++ < 12;) {
		$monthes[] = ucfirst(getDateFr(date('2022-' . $i . '-01'), 'MMMM'));
	}

	return $monthes;
}

function getMonth(int $monthIndex = null): string
{
	$monthIndex ??= date('m');

	return ucfirst(getDateFr(date('2022-' . $monthIndex . '-01'), 'MMMM'));
}

function getCurrentMonthNumber()
{
	return date('m');
}

function getFirthDayOfMonth($date = '')
{
	$date ??= time();
	aff($date ?? time(), 'ddd');

	return date('first day of this month', time());
}

function getNbDayMonth($date = '')
{
	// return date('y', time());
	// $date = ($date)? '1':'2';
	return date('t', $date);
}

function getMonthFromDate($myTimestamp)
{
	return (int) date('m', $myTimestamp);
}

// makes a date like 2009/12/01, and translate it to a timestamp
function getDateFromMonths($months)
{
	$years = intval($months / 12);
	$month = intval($months % 12) + 1;

	return strtotime("{$years}/{$month}/01");
}