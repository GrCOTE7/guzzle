<?php

require_once 'tools/database/req.php';

aff($_POST, 'POST');

function isValidPseudo($pseudo)
{
    if (preg_match('/^[a-zA-Z0-9\-\.\s]{2,255}$/', $pseudo)) return 1;
    
    return 0;
}

function isValidPassword1($password, $password2)
{

    if (preg_match('/^[a-zA-Z0-9\-\.\s]{3,255}$/', $password) && ($password === $password2) ) return 1;
    
    return 0;
}

if ($_POST['action']=="s'enregistrer") {

// aff (req("INSERT INTO users (name, email, password) VALUES
// ('Thibaut', 'T.GUIGNAND@codeur.online', '123'),
// ('Sophie', 'S.LAMBERT@codeur.online', '123'),
// ('Lionel', 'GrCOTE7@Gmail.com', '123')
// "));

//  aff (req('select name from users'));

$pseudo=($_POST["username2"]) ?? '';
$email=($_POST["email"]) ?? '';
$password=($_POST["pass"]) ?? '';
$password2=($_POST["pass2"]) ?? '';

// $user = ['Bob2', 'bobdsf@fdsfds2.com', '123', '123'];
// aff($user);
// list($pseudo, $email, $password, $password2) = $user;

// aff($pseudo, 'Pseudo');
// aff($email, 'email');


function isValidEmail($email)
{
    if (preg_match('/^[^@\s]+@[^@\s\.][^@\s]+$/', $email)) return 1;

    return 0;
}


function isValidRegister($pseudo, $email, $password, $password2){
    return ( isValidPseudo($pseudo) && isValidEmail($email) && isValidPassword1($password, $password2) );
}
 
/* Opération mémoire BDD - TO DO */

$controleData = isValidRegister($pseudo, $email, $password, $password2);
$data['message'] =  $controleData ? 'L\'inscription est valide.':'L\'inscription est incorrecte.';  
if ($controleData) {
    $sql = 'INSERT INTO users (name, email, password) VALUES (\''.$pseudo.'\', \''.$email.'\', \''.$password.'\')';
    aff($sql);
    // req($sql);
}


else if ($_POST['action']=='Se connecter') {
    // code qui traite de la connection

    // On récupère les data
    $pseudo2=($_POST["username"]) ?? '';
    $pass3=($_POST["password"]) ?? '';



// Si isValid le pseudo et le mot de passe on vérifie que le password indiqué est bien celui enregistré dans la BdD

$seconnecter = ($pseudo2 & $pass3);
$seconnecter = "username" && "paswword";


$req->$sql ('SELECT name  FROM users WHERE name= \''.$pseudo.'\' AND WHERE password = \''.$password.'\'');
return $sql;



// On intérroge la BDD //


// On compare le password indiqué avec celui de la BdD //

// Si c'est ok → "Connexion OK" sinon, message qui dit "erreur" //

echo "Connexion Ok";
}else{ echo "Erreur"
    ;}

}



// $controleData = isValidConnexion($pseudo, $password);//

// $data['users'] = req('select name from users');

// aff($data);}

//  require_once 'tools/functions.php';

/* COMMENTAIRES 

print_r($_POST);

echo validate2($mail);
echo validate1($password);

$pseudo = 'Sosso';
$mail = 'dskfhjdils@dffsdf.com';
$password = '123';  */
