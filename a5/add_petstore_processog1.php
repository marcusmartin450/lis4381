<?php
//show errors: at least 1 and 4...
ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//use for inital test of form inputs
//exit(print_r($_POST));

//exit(print_r($_POST)); //display $_POST array values from form

// or, for nicer display in browser...
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
//exit(); //stop processing, otherwise, errors below
//After testing, comment out above lines.
               
//code to process inserts goes here
$pst_name_v = $_POST['name'];
$pst_street_v = $_POST['street'];
$pst_city_v = $_POST['city'];
$pst_state_v = $_POST['state'];
$pst_zip_v = $_POST['zip'];
$pst_phone_v = $_POST['phone'];
$pst_email_v = $_POST['email'];
$pst_url_v = $_POST['url'];
$pst_ytd_sales_v = $_POST['ytd_sales'];
$pst_notes_v = $_POST['notes'];

exit(
    $pst_name_v . "," . 
    $pst_street_v . "," . 
    $pst_city_v . "," . 
    $pst_state_v . "," . 
    $pst_zip_v . "," . 
    $pst_phone_v . "," . 
    $pst_email_v . "," . 
    $pst_url_v . "," . 
    $pst_ytd_sales_v . "," . 
    $pst_notes_v
);

$pattern = '/^[\w\-\s]+$/';  // Matches Name validation
$valid_name = preg_match($pattern, $pst_name_v);

$pattern = '/^[a-zA-Z0-9,\-\.\s]+$/';  // Matches Street validation
$valid_street = preg_match($pattern, $pst_street_v);

$pattern = '/^[a-zA-Z0-9\-\s]+$/';  // Matches City validation
$valid_city = preg_match($pattern, $pst_city_v);

$pattern = '/^[a-zA-Z]{2}$/';  // Matches State validation
$valid_state = preg_match($pattern, $pst_state_v);

$pattern = '/^[0-9]{5,9}$/';  // Matches Zip validation
$valid_zip = preg_match($pattern, $pst_zip_v);

$pattern = '/^[0-9]{10}$/';  // Matches Phone validation
$valid_phone = preg_match($pattern, $pst_phone_v);

$pattern = '/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';  // Matches Email validation
$valid_email = preg_match($pattern, $pst_email_v);

$pattern = '/^(https?:\/\/)?([\w\-]+\.)+[a-zA-Z]{2,4}(\/.*)?$/';  // Matches URL validation
$valid_url = preg_match($pattern, $pst_url_v);

$pattern = '/^[0-9]+(\.[0-9]{1,2})?$/';  // Matches YTD Sales validation
$valid_ytd_sales = preg_match($pattern, $pst_ytd_sales_v);

$pattern = '/^.{0,100}$/';  // Matches Notes validation
$valid_notes = preg_match($pattern, $pst_notes_v);

if 
(
    empty($pst_name_v) || 
    empty($pst_street_v) || 
    empty($pst_city_v) || 
    empty($pst_state_v) || 
    empty($pst_zip_v) || 
    empty($pst_phone_v) || 
    empty($pst_email_v) || 
    empty($pst_url_v) || 
    empty($pst_ytd_sales_v) || 
    !isset($pst_ytd_sales_v)
)
{
    $error = "All fields require data except <b>Notes</b>. Check all fields and try again.";
    include('global/error.php');
}
else if (!is_numeric($pst_ytd_sales_v) || $pst_ytd_sales_v <= 0)
{
    $error = 'YTD Sales can only contain numbers (other than a decimal point); and must be equal or greater than zero.';
    include('global/error.php');
}
else if ($valid_name === false)
{
    echo 'Error in pattern for Name!';
}
else if ($valid_name === 0)
{
    $error = 'Name can only contain letters, numbers, hyphens, and spaces.';
    include('global/error.php');
}
else if ($valid_street === false)
{
    echo 'Error in pattern for Street!';
}
else if ($valid_street === 0)
{
    $error = 'Street can only contain letters, numbers, commas, hyphens, and periods.';
    include('global/error.php');
}
else if ($valid_city === false)
{
    echo 'Error in pattern for City!';
}
else if ($valid_city === 0)
{
    $error = 'City can only contain letters, numbers, hyphens, and spaces.';
    include('global/error.php');
}
else if ($valid_state === false)
{
    echo 'Error in pattern for State!';
}
else if ($valid_state === 0)
{
    $error = 'State can only contain letters.';
    include('global/error.php');
}
else if ($valid_zip === false)
{
    echo 'Error in pattern for Zip!';
}
else if ($valid_zip === 0)
{
    $error = 'Zip can only contain numbers.';
    include('global/error.php');
}
else if ($valid_phone === false)
{
    echo 'Error in pattern for Phone!';
}
else if ($valid_phone === 0)
{
    $error = 'Phone can only contain numbers.';
    include('global/error.php');
}
else if ($valid_email === false)
{
    echo 'Error in pattern for Email!';
}
else if ($valid_email === 0)
{
    $error = 'Invalid email address.';
    include('global/error.php');
}
else if ($valid_url === false)
{
    echo 'Error in pattern for URL!';
}
else if ($valid_url === 0)
{
    $error = 'Invalid URL.';
    include('global/error.php');
}
else if ($valid_ytd_sales === false)
{
    echo 'Error in pattern for YTD Sales!';
}
else if ($valid_ytd_sales === 0)
{
    $error = 'YTD Sales can only contain numbers and a decimal point (if used).';
    include('global/error.php');
}

else
{
    require_once('global/connection.php');



    
    $query = 
    "INSERT INTO petstore 
    (name, street, city, state, zip, phone, email, url, ytd_sales, notes)
    VALUES 
    (:pst_name_p, :pst_street_p, :pst_city_p, :pst_state_p, :pst_zip_p, :pst_phone_p, :pst_email_p, :pst_url_p, :pst_ytd_sales_p, :pst_notes_p)";
    exit($query);
try 
{

$statement = $db->prepare($query);
$statement->bindParam(':pst_name_p', $pst_name_v);
$statement->bindParam(':pst_street_p', $pst_street_v);
$statement->bindParam(':pst_city_p', $pst_city_v);
$statement->bindParam(':pst_state_p', $pst_state_v);
$statement->bindParam(':pst_zip_p', $pst_zip_v);
$statement->bindParam(':pst_phone_p', $pst_phone_v);
$statement->bindParam(':pst_email_p', $pst_email_v);
$statement->bindParam(':pst_url_p', $pst_url_v);
$statement->bindParam(':pst_ytd_sales_p', $pst_ytd_sales_v);
$statement->bindParam(':pst_notes_p', $pst_notes_v);
$statement->execute();
$statement->closeCursor();


$last_auto_increment_id = $db->lastInsertId();

















//include('index.php'); //forwarding is faster, one trip to server
header('Location: index.php'); //sometimes, redirecting is needed (two trips to server)
}

catch (PDOException $e)
    {
        $error = $e->getMessage();
        echo $error;
    }

}
?>
