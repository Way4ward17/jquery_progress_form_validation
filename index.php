<?php
include("insert.php");
?>
  <!DOCTYPE html>
    <html lang="en">
    <head>
      
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
      <title>Interview Solution</title>
      <link rel="stylesheet" href="Style.css">

    </head>
    <body>
  
      <h1 >The Way4ward Bank Of Africa</h1>
    <form action="insert.php" method="POST" id="msform" name="registration">
     
    <ul id="progressbar">
      <li class="active">Account Setup</li>
      <li>Social Profiles</li>
      <li>Personal Details</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
      <h2 class="fs-title">Create bank Account</h2>
      <h3 class="fs-subtitle">Email Verification</h3>
      <input type="text" name="fullname" placeholder="Fullname" required/>
      <input type="text" name="email" placeholder="Email" required/>
      <div>          
        <input type="button" name= "next" class="next action-button" value="Next" />
        <a style="text-decoration:none" class="next action-button" href="login.php"> Login to view data</a>
      <div>
    </fieldset>

    <fieldset>      
        <h2 class="fs-title">Personal Information</h2>
        <h3 class="fs-subtitle">All fields are required</h3>
        <input type="text" name="firstname" placeholder="Firstname" />
        <input type="text" name="middlename" placeholder="Middlename" />
        <input type="text" name="lastname" placeholder="Lastname" />
        <input type="date" name="dob" placeholder="Date of birth" />
        <input type="text" name="address" placeholder="Permanent Home Address" />
        <input type="text" name="state" placeholder="State of Origin" />
        <input type="text" name="nationality" placeholder="Nationality" />
        <input type="text" name="nok" placeholder="Next of kin" />
        <input type="text" name="noka" placeholder="Next of kin address" />
        <input type="text" name="nokp" placeholder="Next of kin phonenumber" />      
        <div>
          <input type="button" name="previous" class="previous action-button" value="Previous" />
          <input type="button" name="next" class="next action-button" value="Next" />
        </div>
    </fieldset>

    <fieldset>
        <h2 class="fs-title">Account Details</h2>
        <h3 class="fs-subtitle">Fill Carefully</h3>
        <select name="accttype">
          <option value="">Account Type</option>
          <option value="Savings">Savings</option>
          <option value="Current">Current</option>
        </select>
        <select name="alerttype">
          <option value="">Alert Type</option>
          <option value="Email">Email</option>
          <option value="PhoneNumber">Phone Number</option>
        </select>
        <input type="number" name="deposit" placeholder="Initial Deposity" />
        <div>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" class="submit action-button" value="Submit" />
        </div>
    </fieldset>

  </form>
  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
   <script src="Jquery.js"></script>

  </body>
  </html>