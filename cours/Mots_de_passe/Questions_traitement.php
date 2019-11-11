<?php
session_start();

$points=0;

$q1 = $_POST['nombre'];
switch ($q1)
{
    case "option1_q1":
        $points+=1;
        break;

    case "option2_q1":
        $points+=2;
        break;

    case "option3_q1":
        $points+=3;
        break;

    case "option4_q1":
        $points+=4;
        break;
}

$q2 = $_POST['different'];
switch ($q2)
{
    case "option1_q2":
        $points+=1;
        break;

    case "option2_q2":
        $points+=2;
        break;

    case "option3_q2":
        $points+=3;
        break;

    case "option4_q2":
        $points+=4;
        break;
}

$q3 = $_POST['simplicite'];
switch ($q3)
{
    case "option1_q3":
        $points+=1;
        break;

    case "option2_q3":
        $points+=2;
        break;

    case "option3_q3":
        $points+=3;
        break;

    case "option4_q3":
        $points+=4;
        break;
}

$q4 = $_POST['longueur'];
switch ($q4)
{
    case "option1_q4":
        $points+=1;
        break;

    case "option2_q4":
        $points+=2;
        break;

    case "option3_q4":
        $points+=3;
        break;

    case "option4_q4":
        $points+=4;
        break;
}

$q5 = $_POST['gestionnaire'];
switch ($q5)
{
    case "option1_q5":
        $points+=4;
        break;

    case "option2_q5":
        $points+=1;
        break;
}

if($points<=10)
{
    $message="tes mots de passe ne sont pas sécurisés ! Tu risques de te faire voler tes données !";
}

else if($points>10 and $points<=15)
{
    $message="tes choix de mot de passe sont bons, mais tu as encore quelques choses à apprendre !";
}

else if($points>15)
{
    $message="Ouah, bravo ! Cette partie sur les mots de passe n'aura sûrement rien à t'apprendre, jettes y quand même un coup d'oeil !";
}

$_SESSION["points"]=$points;
$_SESSION["message"]=$message;

header('Location: Introduction.php');
?>