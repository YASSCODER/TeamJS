<?php
    session_start();
    require_once 'confBase.php';
    if(isset($_POST['email']) && isset($_POST['pass']))
    {
         $email = htmlspecialchars($_POST['email']);
         $passwd = htmlspecialchars($_POST['pass']);
         $check = $pdo->prepare('SELECT email, passwd, pseudo FROM users WHERE email = ?');
         $check->execute(array($email));
         $data=$check->fetch();
         $row=$check->rowCount();

         if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                    $passwd = hash('sha256', $passwd);
                    if($data['pass'] === $passwd)
                    {
                        $_SESSION['role'] = $data['role'];
                        header('Location : ../html/clientsPage.html');
                    }else header('Location : ../html/homePage.html?reg_err=passwd_err');
                    header('Location : ../html/homePage.html?reg_err=succes');
            }else header('Location : ../html/homePage.html?reg_err=email_err');   
        }else header('Location : ../html/signin.html?reg_err=already');
    }

?>