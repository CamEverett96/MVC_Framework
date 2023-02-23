<?php 
use App\Models\EmailModel;
use Core\DBConnection;
require '../core/helpers.php';
require '../vendor/autoload.php';
require '../app/routes.php';

 

// $EmailModel = new EmailModel(DBConnection::start());
// $statement = $db->prepare('select * from emails');
// $statement->execute();
// $allEmails = $statement->fetchAll(PDO::FETCH_OBJ);
// Run it!
$router->run();

