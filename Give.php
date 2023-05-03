<?php
session_start(); 
if(!($_SESSION['activated']!==true || !isset($_SESSION['activated'])) )
{

$username=$_SESSION['username'] ;
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $type=$_POST['type'];
    $breed=$_POST['breed'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $along=isset($_POST['along']) ? implode(', ', $_POST['along']) : '';
    $family=$_POST['family'];
    $brag=$_POST['brag'];
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $available=fopen('available_pet_information.txt', 'a');
    if (isset($_SESSION['view']))
    { $_SESSION['view'] = $_SESSION['view'] + 1;}
    else $_SESSION['view']=1;

    $count = $_SESSION['view'];
    
    fwrite($available, "$count:$username:$type:$breed:$gender:$age:$along:$family:$brag:$fname:$email\n");
    fclose($available);
}}
else{ {header('Location:signin.php');
    exit();}
  }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "utf-8">
    <title>PAW | PetShop</title>
    <link rel="icon" href="logo.png">
    <script src="give.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }

        body {
            font-family: Arial;
            background-color: rgb(210, 223, 195);
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
        
        </style>
    
</head>

<body style="background-color: rgb(255, 255, 255);">
    <div class="header"><table><tr><td ><a href="PetShop.html"><img src="logo.png" alt="Dog and Cat logo"></a></td>
        <td><h1>Paw PetSore</h1></td>
        </tr></table></div>
    <div class="sidebar">

        <header>Menu</header>
        <ul>
                                   <li><a href="PetShop.html">Home</a></li>
                                <li><a href="Find.html">Find a dog/cat</a></li>
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
    <div>
          <h2>Give Away Your Pet</h2><br>
          <form  method="POST" >
            <fieldset id="field1">
            <legend id="legend1"><b>Pet Information</b></legend>
           <br>
            <b>Type of Pet:</b>
            <input type="radio" id="dog" name="type" value="Dog" checked>
            <label for="dog">Dog</label>
            <input type="radio" id="cat" name="type" value="Cat">
            <label for="cat">Cat</label><br><br>
            <label for="breed"><b>Breed of cat or dog</b></label>
            <select name="breed" id="breed">
                <option value="Black cat">Black cat</option>
                <option value="Red spotted">Red spotted</option>
                <option value="Japanese bobtail">Japanese bobtail</option>
                <option value="chihuaha">chihuaha</option>
                <option value="dobermann">dobermann</option>
                <option value="husky">husky</option>
                <option value="mixed breed">mixed breed</option>
            </select><br><br>
            <b>Gender:</b> 
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label>
            <input type="radio" id="male" name="gender" value="Male"checked>
            <label for="male">Male</label><br><br>
            <label for="age"><b>Preferred age of animal</b></label>
            <select name="age" id="age">
                <option value="less than 1">0-1</option>
                <option value="between 2 and 6">2-6</option>
                <option value="between 7 and 11">7-11</option>
                <option value="between 12 and 16">12-16</option>
                <option value="between 16 and 20">16-20</option>
                
            </select><br><br>

            <b>Does it get along with?</b>
            <input type="checkbox" id="cats" name="along[]" value=" other cats" checked>
            <label for="cats"> other cats</label>
            <input type="checkbox" id="dogs" name="along[]" value="other dogs">
            <label for="dogs"> other dogs</label><br><br>
            
            <b>Is it Suitable for a family with small children?</b> 
            <input type="radio" id="yes" name="family" value="yes" checked>
            <label for="yes">yes</label>
                <input type="radio" id="no" name="family" value="no">
                <label for="no">no</label><br><br>
            <p><b>Brag about your pet!</b></p>
                <textarea id="brag" name="brag" rows="4" cols="50"></textarea><br><br>
                <label for="fname"><b>Current Owner's Full Name</b></label> <input type="text" id="fname" name="fname" ><br><br>
                <label for="email"><b> Current Owner's Email</b></label> <input type="text" id="email" name="email" ><br><br>    

             
            </fieldset>
            <input type="submit" value="Submit" onclick="Validate()"> <input type="reset" value="Clear">
          </form>
          
          <p id="demo"></p>
          <p>Thank you for taking the time to fill out the form!</p><br>
          
    </div>
   </div>
   <div><footer class="footer">
    <p>  Copyright&copy; 2023&nbsp;Paw PetShop&nbsp;All Rights Reserved</p>
    <p><a href="Give.html" onclick="myFunction()">Privacy Policy</a>
    </p></footer></div>
      
    </body>
</html>
