<?php
include("conn.php");
$query = "SELECT * FROM data";
?>

<html>
    <head>      
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
      <title>Interview Solution</title>
      <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <div style="overflow-x:auto;"> 
            <table> 
                <thead> 
                    <td> <font face="Arial">ID</font> </td> 
                    <td> <font face="Arial">FULLNAME</font> </td> 
                    <td> <font face="Arial">FIRSTNAME</font> </td> 
                    <td> <font face="Arial">MIDDLENAME</font> </td> 
                    <td> <font face="Arial">LASTNAME</font> </td> 
                    <td> <font face="Arial">D.O.B</font> </td> 
                    <td> <font face="Arial">ADDRESS</font> </td> 
                    <td> <font face="Arial">STATE</font> </td> 
                    <td> <font face="Arial">NATIONALITY</font> </td> 
                    <td> <font face="Arial">NEXT OF KIN</font> </td> 
                    <td> <font face="Arial">NOK ADDRESS</font> </td> 
                    <td> <font face="Arial">NOK PHONE NUMBER</font> </td> 
                    <td> <font face="Arial">EMAIL</font> </td> 
                    <td> <font face="Arial">ACCOUNT TYPE</font> </td> 
                    <td> <font face="Arial">ALERT TYPE</font> </td> 
                </thead>
                <tbody>
                    <?php 
                        if ($result = $conn->query($query)) {
                            while ($row = $result->fetch_assoc()) {
                                $field1name = $row["id"];
                                $field2name = $row["fullname"];
                                $field3name = $row["firstname"];
                                $field4name = $row["middlename"];
                                $field5name = $row["lastname"];
                                $field6name = $row["dob"];
                                $field7name = $row["address"];
                                $field8name = $row["state"];
                                $field9name = $row["nationality"];
                                $field10name = $row["nok"];
                                $field11name = $row["noka"];
                                $field12name = $row["nokp"];
                                $field13name = $row["email"];
                                $field14name = $row["accttype"];
                                $field15name = $row["alerttype"];
                                $field16name = $row["deposit"];  
                        
                                echo '<tr> 
                                        <td>'.$field1name.'</td> 
                                        <td>'.$field2name.'</td> 
                                        <td>'.$field3name.'</td> 
                                        <td>'.$field4name.'</td> 
                                        <td>'.$field5name.'</td> 
                                        <td>'.$field6name.'</td> 
                                        <td>'.$field7name.'</td> 
                                        <td>'.$field8name.'</td> 
                                        <td>'.$field9name.'</td> 
                                        <td>'.$field10name.'</td> 
                                        <td>'.$field11name.'</td> 
                                        <td>'.$field12name.'</td> 
                                        <td>'.$field13name.'</td> 
                                        <td>'.$field14name.'</td> 
                                        <td>'.$field15name.'</td> 
                                        <td>'.$field16name.'</td> 
                                        
                                    </tr>';
                            }
                            $result->free();
                        } 
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>

