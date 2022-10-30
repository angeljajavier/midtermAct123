<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body id="particles-js">



<?php
//session_start() creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie
session_start();


    if(isset($_POST['btnSignin']) && isset($_POST['userType'])){
        $arrUserT = $_POST['userType'];

        foreach ($arrUserT as $keyUserT => $valueUserT){
            if(($valueUserT == "admin")){

/*

USER TYPE  - USERNAME  -  PASSWORD
Admin      - admin     -  Pass1234
Admin      - renmark   -  Pogi1234
ContentM.  - pepito    -  manaloto
ContentM.  - juan      -  delacruz
System User- pedro     -  penduko


*/

/*

--------------------------ADMIN

*/
                
                $admin1 ="admin";
                $adminPass1 ="Pass1234";
                $admin2 = "renmark";
                $adminPass2 = "pog1234";



    
                if(($_POST['Username'] == $admin1 && $_POST['Password'] == $adminPass1))
                {
                    $_SESSION['Username'] = $admin1;



                    echo '<div class="alert alert-success center">
                    Welcome to the system ',$admin1,
                   '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';

                }
                elseif(($_POST['Username'] == $admin2 && $_POST['Password'] == $adminPass2)){
                        $_SESSION['Username'] = $admin2;

                        echo '<div class="alert alert-success w-50 p-3 mx-auto">
                        Welcome to the System ',$admin2,
                       '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                      
                    }
                    else
                    {
                    echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                    You entered the wrong password
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                    }         
                }


/*

--------------------------CONTENT MANAGER

*/
                if(($valueUserT == "ContentManager")){
                
                    $contentManager1 ="pepito";
                    $cmPass1 ="manaloto";
                    $contentManager2 = "juan";
                    $cmPass2 = "delacruz";
                    
        
                    if(($_POST['Username'] == $contentManager1 && $_POST['Password'] == $cmPass1))
                    {
                        $_SESSION['Username'] = $ContentManager1;
    
                        echo '<div class="alert alert-success w-50 p-3 mx-auto">
                        Welcome to the system ',$ContMan1,
                       '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                    }
                    elseif(($_POST['Username'] == $contentManager2 && $_POST['Password'] == $cmPass2)){
                            $_SESSION['Username'] = $contentManager2;

                            echo '<div class="alert alert-success w-50 p-3 mx-auto">
                            Welcome to the system ',$ContMan2,
                           '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>'; 
                        }
                        else
                        {
                        echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                        You entered the wrong password
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                        }         
                    }
/*

--------------------------SYSTEM USER

*/

                    if(($valueUserT == "SystemUS")){
                
                        $systemUser ="pedro";
                        $passSystemUser ="penduko";
                        
                        
            
                        if(($_POST['Username'] == $systemUser && $_POST['Password'] == $PsystemUser))
                        {
                            $_SESSION['Username'] = $systemUser;
        
        
                            echo '<div class="alert alert-success w-50 p-3 mx-auto">
                            Welcome to the system ',$systemUser,
                           '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                        }
                            else
                            {
                            echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                            You entered the wrong password
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                            }         
                        }
    

            }
        }

                
    ?>





<div class="container">
	<center>
        <div class="card card-container justify-content-center">
            <img id="profile-img" class="profile-img-card" src="img/ghosto.jpg" />

            <p id="profile-name" class="profile-name-card"></p>

            <form class="form-signin" method="post">
            <div class="form-row align-items-center">
            <div class="col-auto my-1 ">

            <select class="form-control" id="UType" name ="userType[]">
                <option value="admin">Admin</option>
                <option value="ContMan">Content Manager</option>
                <option value="SystemUs">System User</option>
            </select>
            </div>

                <br>
                <input type="text" name="Username" id="username" class="form-control" placeholder="User" required autofocus>

                <input type="password" name="Password"  id="password" class="form-control" placeholder="Password" required>

                <button class="btn btn-lg btn-primary btn-block btn-signin rounded-pill" type="submit" name="btnSignin">Log in</button>
    </center>
            </form>
        </div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



</body>
</html>