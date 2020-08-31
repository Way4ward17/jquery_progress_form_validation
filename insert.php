    <?php
    include("conn.php");
    $message_alert = '';

    if(isset($_POST['submit'])) {

        $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
        $middlename = mysqli_real_escape_string($conn,$_POST['middlename']);
        $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
        $dob = mysqli_real_escape_string($conn,$_POST['dob']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);
        $state = mysqli_real_escape_string($conn,$_POST['state']);
        $nationality = mysqli_real_escape_string($conn,$_POST['nationality']);
        $nok =mysqli_real_escape_string($conn,$_POST['nok']);
        $noka =mysqli_real_escape_string($conn,$_POST['noka']);
        $nokp =mysqli_real_escape_string($conn,$_POST['nokp']);

        $email =mysqli_real_escape_string($conn,$_POST['email']);
        $accttype =mysqli_real_escape_string($conn,$_POST['accttype']);
        $alerttype =mysqli_real_escape_string($conn,$_POST['alerttype']);
        $deposit =mysqli_real_escape_string($conn,$_POST['deposit']);

        $insert = "INSERT INTO `data`(`fullname`, `firstname`, `middlename`, `lastname`, `dob`, `address`,`state`, `nationality`, `nok`, `noka`, `nokp`, `email`, `accttype`, `alerttype`, `deposit`)VALUES('$fullname','$firstname','$middlename','$lastname','$dob','$address','$state','$nationality','$nok','$noka','$nokp','$email','$accttype','$alerttype','$deposit')";

       
            if (mysqli_query($conn, $insert)) {
               echo "Successfull Saved";
            } else {
                echo "Error in saving data";
            }
       
        }
    ?>