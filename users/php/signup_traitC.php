<?php
        session_start();
     require 'confBase.php';
    if(isset($_POST['email']) && isset($_POST['user-name']) && isset($_POST['pass']) && isset($_POST['cpass']))
    {
        $id=rand(0,9999);
         $email = htmlspecialchars($_POST['email']);
         $pseudo = htmlspecialchars($_POST['user-name']);
         $passwd = htmlspecialchars($_POST['pass']);
         $cpasswd = htmlspecialchars($_POST['cpass']);
         $role = "client";

         $check = $pdo->prepare('SELECT email, passwd, pseudo FROM users WHERE email = ?');
         $check->execute(array($email));
         $data=$check->fetch();
         $row=$check->rowCount();

         if($row == 0)
        {
            
                if($passwd == $cpasswd)
                {
                    $passwd = hash('sha256', $passwd);
                    $insert = $pdo->prepare('INSERT INTO users(id,role,email, passwd, pseudo) VALUES(:id, :role, :email, :passwd, :pseudo)');
                    $insert->execute(array(
                        'id'=>$id,
                        'role'=>$role,
                        'email'=>$email,
                        'passwd'=>$passwd,
                        'pseudo'=>$pseudo
                    ));
                    header('Location: ../html/clientsPage.html');
                }else header('Location: ../html/signUpClient.html?reg_err=Password');
        }else header('Location: ../html/signUpClient.html?reg_err=already');
    }
    ?>