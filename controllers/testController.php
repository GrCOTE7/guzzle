<?php

$title = 'test';

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Transport;

require_once 'controllers/dateController.php';
require_once 'models/agendaModel.php';
require_once 'models/userModel.php';

// aff(req('select name, email from users'));

$data[] = ucfirst(getdateFr());
$data[] = getUsers();

// 2do Test de $var ??=123;

$transport = Transport::fromDsn('smtp://localhost:1025');
$mailer    = new Mailer($transport);

$email = (new TemplatedEmail())
	->from('hello@example.com')
	->to('grcote7@gmail.com')
	->subject('Time for Symfony Mailer!')
	// ->cc('cc@example.com')
	// ->bcc('bcc@example.com')
	// ->replyTo('fabien@example.com')
	// ->priority(Email::PRIORITY_HIGH)
	// ->htmlTemplate('./templates/emails/welcome.html.twig')
	->html('<p>See <style="color:red;"><strong>Twig integration for better HTML integration!</strong></p>')
	->text('Sending emails is fun again!')
	->text('Sending emails is fun again!')

	// ->context([
	// 	'expiration_date' => new \DateTime('+7 days'),
	// 	'username'        => 'GC7',
	// ])
	;
// ->attachFromPath('./logo-ggle.png');

dump($email);

try {
	$mailer->send($email);
} catch (\Throwable $th) {
	echo '<h1 class="text-center text-red-500 mb-50">Erreur: ' . $th->getMessage() . '</h1>';
}