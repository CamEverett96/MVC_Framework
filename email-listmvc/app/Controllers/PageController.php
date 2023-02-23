<?php 
namespace App\Controllers;
use App\Models\EmailModel;
use Core\DBConnection;


class PageController{
    public function index(){
        $formError = false;
        // echo "<h1>Home Page from controller</h1>";

        $EmailModel = new EmailModel(DBConnection::start());
        //  dd($EmailModel->totalEmails());
        view("index" ,[
            "name" => "Cam",
            "totalEmails" => $EmailModel->totalEmails(),
            "formError" => $formError
        ]);
    }

    public function store(){
        $EmailModel = new EmailModel(DBConnection::start());

        if($_POST['email']!= ""){
          
            // echo "<h1>Home Page from controller</h1>";
    
         
            //  dd($EmailModel->totalEmails());
            if($EmailModel->insert($_POST['email'])){
                redirect('http://localhost/thank-you');
            } else{
                view("index" ,[
                    "name" => "Cam",
                    "totalEmails" => $EmailModel->totalEmails(),
                    "formError" => true,
                    "formErrorMessage" => "There was a problem saving the data"
                ]);
            }
        }
        else{
            view("index" ,[
                "name" => "Cam",
                "totalEmails" => $EmailModel->totalEmails(),
                "formError" => true,
                "formErrorMessage" => "Form Cannot be empty/Add Valid Email"
            ]);
        }
      
    }


    public function thankyou(){
        view("thank-you");
    }
}