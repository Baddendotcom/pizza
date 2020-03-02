
<?php
    include ('header.php');
?>
       
<?php
    switch ($_GET['page']) 
    {
        case'accueil':
            include ('accueil.php');
        break;
        case 'pizza':
            include ('pizza.php');
        break;
        case 'contact':
            include ('contact.php');
        break;
        default:
        include ('default.php');
    break;
    }
?>
<?php
    include ('footer.php');
?>

