<?php
    //show errors: at least 1 and 4...
ini_set('display_errors', 1);
    //ini_set('log_errors', 1);
    //ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);
    //use for inital test of form inputs
    //exit(print_r($_POST));
        //code to process inserts goes here
$pst_name_v = $_POST['name'];
$pst_street_v = $_POST['street'];
$pst_city_v = $_POST['city'];
$pst_state_v = $_POST['state'];
$pst_zip_v = $_POST['zip'];
$pst_phone_v = $_POST['phone'];
$pst_email_v = $_POST['email'];
$pst_url_v = $_POST['url'];
$pst_ytd_sales_v = $_POST['ytdsales'];
$pst_notes_v = $_POST['notes'];
    //name
$pattern = '/^[a-zA-Z0-9\-_\s]+$/';
$valid_name = preg_match($pattern, $pst_name_v);
    //street
$pattern = '/^[a-zA-Z0-9,\s\.]+$/';
$valid_street = preg_match($pattern, $pst_street_v);
    //city
$pattern = '/^[a-zA-Z\s]+$/';
$valid_city = preg_match($pattern, $pst_city_v);
    //state
$pattern = '/^[a-zA-z]{2}+$/';
$valid_state = preg_match($pattern, $pst_state_v);
    //zip
$pattern = '/^\d{5,9}+$/';
$valid_zip = preg_match($pattern, $pst_zip_v);
    //phone
$pattern = '/^\d{10}+$/';
$valid_phone = preg_match($pattern, $pst_phone_v);
    //email
$pattern = '/^([a-zA-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/';
$valid_email = preg_match($pattern, $pst_email_v);
    //url
$pattern = '/^(https?:\/\/)?([\da-zA-Z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
$valid_url = preg_match($pattern, $pst_url_v);
    //ytdsales
$pattern = '/^\d{1,8}(?:\.\d{0,2})?$/';
$valid_ytd_sales = preg_match($pattern, $pst_ytd_sales_v);
if (empty($pst_name_v) ||
    empty($pst_street_v) ||
    empty($pst_city_v) ||
    empty($pst_state_v) ||
    empty($pst_zip_v) ||
    empty($pst_phone_v) ||
    empty($pst_email_v) ||
    empty($pst_url_v) ||
    !isset($pst_ytd_sales_v)) {
    $error = "All fields require data except <b>Notes</b>. Check all fields and try again";
    include('global/error.php');
} else if (!is_numeric($pst_ytd_sales_v) || $pst_ytd_sales_v <= 0) {
    $error = 'YTD Sales can only contain numbers (other than a decimal point); and must e equal to or grater than zero.';
    include('global/error.php');
} else if ($valid_name === false) {
    echo 'Error in pattern';
} else if ($valid_name === 0) {
    $error = 'Name can only contain numbers, letters, commas, and periods.';
    include('global/error.php');
} else if ($valid_street === false) {
    echo 'Error in pattern';
} else if ($valid_street === 0) {
    $error = 'Street can only contain numbers, letters, commas, and periods.';
    include('global/error.php');
} else if ($valid_city === false) {
    echo 'Error in pattern';
} else if ($valid_city === 0) {
    $error = 'City can only contain letters';
    include('global/error.php');
} else if ($valid_state === false) {
    echo 'Error in pattern';
} else if ($valid_state === 0) {
    $error = 'State can only contain two letters';
    include('global/error.php');
} else if ($valid_zip === false) {
    echo 'Error in pattern';
} else if ($valid_zip === 0) {
    $error = 'Zip can only contain 5 - 9 digits and no other characters';
    include('global/error.php');
} else if ($valid_phone === false) {
    echo 'Error in pattern';
} else if ($valid_phone === 0) {
    $error = 'Phone can only contain ten digits and no other characters';
    include('global/error.php');
} else if ($valid_email === false) {
    echo 'Error in pattern';
} else if ($valid_email === 0) {
    $error = 'Must be a valid email';
    include('global/error.php');
} else if ($valid_url === false) {
    echo 'Error in pattern';
} else if ($valid_url === 0) {
    $error = 'Must be a valid url';
    include('global/error.php');
} else if ($valid_ytd_sales === false) {
    echo 'Error in pattern';
} else if ($valid_ytd_sales === 0) {
    $error = 'YTD can only contain no more than 10 digits and a decimal point';
    include('global/error.php');
} else {
    require_once('global/connection.php');

    $query =
        "INSERT INTO petstore
        (pst_name, pst_street, pst_city, pst_state, pst_zip, pst_phone, pst_email, pst_url, pst_ytd_sales, pst_notes)
        VALUES
        (:pst_name_p, :pst_street_p, :pst_city_p, :pst_state_p, :pst_zip_p, :pst_phone_p, :pst_email_p, :pst_url_p, :pst_ytd_sales_p, :pst_notes_p )";

    try {
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
    } catch (PDOException $e) {
        $error = $e->getMessage();
        echo $error;
    }
}
?>