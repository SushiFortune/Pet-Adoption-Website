
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "utf-8">
    <title>PAW | PetShop</title>
    <link rel="icon" href="logo.png">
    <script>
        function myFunction() {
          alert("This is a privacy statement to assure you that your information will not be sold or misused, and the website builder protects you from falsified information.");
        }
        </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }

        body {
            font-family: Arial;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: 15em calc(100vw - 15em);
            grid-template-rows: 3.5em calc(100vh - 6.5em) 3em;
        }



        .header {
            background-color: rgb(240, 240, 244);
            width: 100%;
            height: 60px;
            grid-column-start: 1;
            grid-column-end: span 2;
            
          
        }

        .main {
            width: 100%;
            background:  rgb(240, 240, 244);
            
        }

        .sidebar {
            width: 15em;
            background-color: rgb(196, 208, 215)
        }

        .sidebar header {
            font-size: 22px;
            color: rgb(226, 245, 245);
            text-align: center;
            line-height: 50px;
            background-color: rgba(124, 138, 145);
            user-select: none;

        }

        .sidebar ul a {
            display: block;
            text-align:left;
            height: 20%;
            width: 100%;
            line-height: 65px;
            font-size: 15px;
            color: rgb(90, 156, 156);
            padding-left: 40px;
            box-sizing: border-box;
            border-top: 1px solid rgba(226, 219, 245, 0.926);
            border-bottom: 1px solid rgb(168, 160, 202);
            transition: .4s;

        }

        ul li:hover a {
            padding-left: 50px;
        }

        .sidebar ul a i {
            margin-right: 16px;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40px;
            background-color: rgba(124, 138, 145);
            text-align: center;
            color: rgb(237, 235, 235);
        }

        .sidebar,
        .main {
            min-height: 900px
        }

        .signup-form{
            width: 85%;
            max-width: 600px;
            background-color:rgba(227, 233, 236, 0.926);
            position: absolute;
            top: 50%;
            left: 60%;
            transform: translate(-50%,-50%);
            padding: 30px 40px;
            box-sizing: border-box;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 0 20px #000000b3;

           
        }

        .signup-form h1{
            margin-top: 0;
            font-weight: 200;

        }
        .box{
            border: 1px solid gray;
            margin: 8px 0;
            padding: 12px 18px;
            border-radius: 8px;
        }

        .box label{
            display: block;
            text-align:center;
            color:#333;
            text-transform:uppercase;
            font-size: 14px;
        }
        .box input,.box textarea{
            width:100%;
            border:8px;
            outline: none;
            font-size: 18px;
            margin-top:6px;
            text-align: center;
        }
        
        </style>

</head>

<body style="background-color: rgb(255, 255, 255);">
    <div class="header" ><table><tr><td ><a href="PetShop.html"><img src="logo.png" alt="Dog and Cat logo"></a></td>
        <td><h1>Paw PetSore</h1></td></tr></table></div>
    <div class="sidebar">

        <header>Menu</header>
        <ul>
                                <li><a href="PetShop.html">Home</a></li>
                                <li><a href="DogCare.html">Dog Care</a></li>
                                <li><a href="CatCare.html">Cat Care</a></li>
                                <li><a href="Signup.php">Sign Up</a></li>
                                <li><a href="signin.php">Sign in </a></li>
                                <li><a href="Give.php">Have a Pet to Give Away</a></li>
                                <li><a href="logout.php">Log Out</a></li>
                                <li><a href="Contact.html">Contact Us</a></li>
        </ul>
                        
    </div>

    
    <div class="main">
        <div class="signup-form">
          <h1>Sign up</h1><br>
          <form method="POST" action="Signup.php">
            <div class="box">
                <label for="user"> username:</label>
                    <input type="text" name="user" placeholder="Create a username" required>
            </div>

            <div class="box">
                <br>
                <label for="pw">password:</label>
                <input type="password" name="pw" placeholder="Create a password " required>
                <br>   
            </div>
            <p>username and password must contain with only letters and digits and password must contain at least 4 characters </p>
             <?php
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                $username = $_POST['user'];
                $password = $_POST['pw'];
                
                $validatepw= preg_match('/^[0-9a-zA-Z]+$/', $password); 
                $validateuser= preg_match('/^[0-9a-zA-Z]+$/', $username);
                

                if( !$validatepw|| !$validateuser || strlen($password) < 4) {
                echo "Please make sure you followed the instructions";
                }


                $users=array();
                
                
                $loginfile = fopen('login.txt','a'); 
                $filecontent = fopen('login.txt','r');

                while(!feof($filecontent))
                {
                $line=fgets($filecontent);
                $user=substr($line,0,strpos($line,":"));
                $users[]=$user;
                }
            
                if(in_array($username, $users))
                {
                echo "Username already exists, please enter a different one";
                }

                else if ( $validatepw && $validateuser &&  strlen($password) >= 4)
                {fwrite($loginfile, "$username:$password\n");
                    echo "Account created successfully, login whenever you're ready";}
                
                
                fclose($loginfile);}
            ?> 
            <br><br>

            <input type="submit" value="Sign Up"> 
  
          </form> 
        </div>
   </div>
   
   <div><footer class="footer">
    <p>  Copyright&copy; 2023&nbsp;Paw PetShop&nbsp;All Rights Reserved</p>
    <p><a href="Contact.html" onclick="myFunction()">Privacy Policy</a>
    </p></footer></div>
  

      
    </body>
   
</html>
