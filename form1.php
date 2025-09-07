<?php
// if (isset($_POST['submit']))
// {

$Dedutrustname = $_POST["Dedutrustname"];
$educationalname = $_POST["educationalname"];
$educationaladdress = $_POST["educationaladdress"];
$location = $_POST["location"];
$educationalcontact = $_POST["educationalcontact"];
$educationalmobile = $_POST["educationalmobile"];
$educationalemail = $_POST["educationalemail"];
$presidentname = $_POST["presidentname"];
$presidentcontact = $_POST["presidentcontact"];
$Presidentmobile = $_POST["Presidentmobile"];
$presidentemail = $_POST["presidentemail"];
$secretaryname = $_POST["secretaryname"];
$secretarycontact = $_POST["secretarycontact"];
$secretarymobile = $_POST["secretarymobile"];
$secretaryemail = $_POST["secretaryemail"];
$coordinatorname = $_POST["coordinatorname"];
$coordinatorcontact = $_POST["coordinatorcontact"];
$coordinatormobile = $_POST["coordinatormobile"];
$coordinatoremail = $_POST["coordinatoremail"];
$date = $_POST["date"];
// echo $date;
// exit;
    //database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proforma";
    // creating a connection

    $con = mysqli_connect($host, $username, $password, $dbname);
// to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    $sql = "INSERT INTO `pofoma1` (`Dedutrustname`, `educationalname`, `educationaladdress`, `location`, `educationalcontact`, `educationalmobile`, `educationalemail`, `presidentname`, `presidentcontact`, `Presidentmobile`, `presidentemail`, `secretaryname`, `secretarycontact`, `secretarymobile`, `secretaryemail`, `coordinatorname`, `coordinatorcontact`, `coordinatormobile`, `coordinatoremail`, `date`)
    VALUES ('$Dedutrustname', '$educationalname', '$educationaladdress', '$location', 
    '$educationalcontact', '$educationalmobile', '$educationalemail', '$presidentname', 
    '$presidentcontact', '$Presidentmobile', '$presidentemail', '$secretaryname', 
    '$secretarycontact', '$secretarymobile', '$secretaryemail', '$coordinatorname', 
    '$coordinatorcontact', '$coordinatormobile', '$coordinatoremail', '$date')
    ON DUPLICATE KEY UPDATE
    Dedutrustname = VALUES(Dedutrustname),
    educationalname = VALUES(educationalname),
    educationaladdress = VALUES(educationaladdress),
    location = VALUES(location),
    educationalcontact = VALUES(educationalcontact),
    educationalmobile = VALUES(educationalmobile),
    educationalemail = VALUES(educationalemail),
    presidentname = VALUES(presidentname),
    presidentcontact = VALUES(presidentcontact),
    Presidentmobile = VALUES(Presidentmobile),
    presidentemail = VALUES(presidentemail),
    secretaryname = VALUES(secretaryname),
    secretarycontact = VALUES(secretarycontact),
    secretarymobile = VALUES(secretarymobile),
    secretaryemail = VALUES(secretaryemail),
    coordinatorname = VALUES(coordinatorname),
    coordinatorcontact = VALUES(coordinatorcontact),
    coordinatormobile = VALUES(coordinatormobile),
    coordinatoremail = VALUES(coordinatoremail),
    date = VALUES(date)";
$rs = mysqli_query($con, $sql);
if($rs)
{
    header("Location: form2.html");
    exit;

   //ob_start();
}
// ?>
// <h1> Proforma From no. 1</h1>
// <p> Name: <?php echo $Dedutrustname;?> </p>
// <p> Email: <?php echo $educationalname;?> </p>

// <?php
// $body = ob_get_clean();

// $body = iconv("UTF-8", "UTF-8//IGNORE", $body);

// include("mpdf-7.0.0/src/Mpdf.php");
// $mpdf=new \Mpdf('c','A4','','', 0,0,0,0,0,0);

// // write HTML TO DPF
// $mpdf->WriteHTML($body);

// //output pdf
// $mpdf->Output('form1.pdf', 'D');


//  // send query to the database to add values and confirm if successful
//     ?>

<!-- 
$body  include ("mpdf/mpdf.php"); $mpdf new \mPDF ('c', 'A4','','' , 0, 0, 0, 0, 0, 0); ob_get_clean ( ) ; //write html to PDF $mpdf->WriteHTML ($body); //output pdf $mpdf->Output ('demo.pdf', 'D'); -->
