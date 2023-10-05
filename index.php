<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Yuvraj Jindal">
        <meta name="description" content="A simple webpage that stores the information required for opening a Bank Account">
        <title>ICICI Bank Limited</title>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <link rel="shortcut icon" href="images/icon.jpg" type="image/x-icon">
    </head>

    <body>
        <header>

        <!--global header navigation-->
           <?php
                include("includes/global-header-nav.php");
           ?>

           <!--logo image-->
           <img src="images/header.jpg" alt="ICICI Bank Logo" class="logo">
        </header>

        <!--main-->
        <main>

            <!--web page heading-->
            <h1 class="heading">Bank Account Details</h1>
            <form method="post">

            <!--fieldset for personal details-->
                <fieldset>
                    <legend>Personal Details</legend>
                    
                        <label for="title">Title</label>
                        <select name="title" >
                            <option>Please Select</option>
                            <option>Mr.</option>
                            <option>Ms.</option>
                            <option>Mrs.</option>
                        </select>
                        
                        
                        <label for="First-name">First Name:</label>
                        <input type="text" name="fname" required />

                        <label for="Last-name">Last Name:</label>
                        <input type="text" name="lname">

                        <label for="date-of-birth">Date of Birth:</label>
                        <input type="date" name="dob" required />

                        <label for="government-ID">Government ID No.</label>
                        <input type="text" name="ID" placeholder="eg: J44665-79000-41018">

                        <label for="email">Email:</label>
                        <input type="email" name="email" placeholder="eg: name@domain.com" required />

                        <label for="mobile-number">Primary Phone Number:</label>
                        <input type="tel" name="phonenumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="eg: 905-556-6548" required/>

                        <label for="address">Address:</label>
                        <input type="text" name="homeaddress">
                    
                </fieldset>
                    

                <!--fieldset for account details-->
                <fieldset>
                    <legend>Account Classification and Usage</legend>
                    <label for="account-type">Account type:</label>
                    <select name="accounttype" >
                        <option>Please Select</option>
                        <option>Savings</option>
                        <option>Current</option>
                    </select>

                    <label for="usage-purpose">What will you be using this account for?</label>
                    <select name="purpose" >
                        <option>Select a Purpose</option>
                        <option>Daily Banking</option>
                        <option>Emergency Fund</option>
                        <option>Savings/Investment</option>
                        <option>Leisure/Recreation</option>
                    </select>

                    <label for="employmentstatus">Employment Status:</label>
                    <select name="employmentstatus" >
                        <option>Please Select</option>
                        <option>Self-Employed</option>
                        <option>Government Official</option>
                        <option>Employed</option>
                        <option>Unemployed</option>
                        <option>Student</option>
                    </select>

                    <label for="income">Annual Income:</label>
                    <input type="text" name="income" required />

                    <label for="services">Additional Services Needed:</label>
                    <input type="checkbox" name="services">Cheque Book
                    <input type="checkbox" name="services">Linked Account/Automatic Transfers
                    <input type="checkbox" name="services">Low fee account options
                    <input type="checkbox" name="services">Monthly Account Statements(Paper)
                    <input type="checkbox" name="services">Overdraft Protection


                </fieldset>
                

                <!--fieldset for username and password-->
                <fieldset>
                    <legend>Username & Password</legend>
                    <h2>Set your Username & Password</h2>
                    <label for="username">Username:</label>
                    <input type="text" name="username" required />

                    <label for="password">Password:</label>
                    <input type="password" name="password" required />

                </fieldset>

                <!--submit button-->
                <button type="submit" class="btn btn-primary">Create Account</button>
                    
            </form>

            <?php
                require_once('database.php');
            
                if(!empty($_POST)){
                    $title = $_POST['title'];
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $IDno = $_POST['ID'];
                    $mailingaddress = $_POST['homeaddress'];
                    $phonenumber = $_POST['phonenumber'];
                    $employmentstatus = $_POST['employmentstatus'];
                    $income = $_POST['income'];
                    $accounttype = $_POST['accounttype'];
                    $usagepurpose = $_POST['purpose'];
                    

                    $res   = $database->create($title, $fname, $lname, $email, $IDno, $mailingaddress, $phonenumber, $employmentstatus, $income, $accounttype, $usagepurpose);
                    if($res){
                        echo "<p>Successfully inserted data</p>";
                    }
                    else{
                        echo "<p>Failed to insert data</p>";
                    }
                }
            ?>
        
        </main>

        <footer>
            <?php
                include("includes/global-footer-nav.php");
            ?>
        </footer>
        

       

    </body>
</html>