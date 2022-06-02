<?php
/*
     * $_POST['nameSurname'];
     * $_POST['email'];
     * $_POST['tel'];
     * $_POST['pass'];
*/
if(isset($_POST['submit'])){
    $file=fopen("dane","a+") or die("Nie ma pliku");
    $line="";





    $nameSurname="/^[A-Z]{1}[a-z]{1,}\s[A-Z]{1}[a-z]{1,}(\s[A-Z]{1}[a-z]{1,}){0,}/";
    $email="/[a-z0-9A-Z]@[a-zA-Z0-9]{2,}\.[a-zA-Z0-9]{2,10}/";
    $tel="/^[0-9]{3}(-)|(\s)[0-9]{3}(-)|(\s)[0-9]{3}/";
    $pass="/^[a-z0-9^:blank:]{8,20}/";

    if(preg_match($nameSurname,$_POST['nameSurname'])){
        $line=$line.$_POST['nameSurname'];


        if(preg_match($email,$_POST['email'])){
            $line=$line.",".$_POST['email'];


            if(preg_match($tel,$_POST['tel'])){
                $line=$line.",".$_POST['tel'];

                if(preg_match($pass,$_POST['pass'])){
                    $line=$line.",".$_POST['pass']."\n";
                    echo "Dane poprawne";
                    fwrite($file,$line) or die("Can't write to file");
                }
                else{
                    echo "PASSWORD ERROR";
                }

            }
            else{
                echo "PHONE NUMBER ERROR";
            }

        }
        else{
            echo "EMAIL ERROR";
        }

    }
    else{
        echo "NAME AND SURNAME ERROR";
    }
    fclose($file);

}

