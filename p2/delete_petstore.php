<?php
    //show errors: at least 1 and 4...
    ini_set('display_errors', 1);
    //ini_set('log_errors', 1); ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
    error_reporting(E_ALL);

    // Get item ID
    $pst_id_v = $_POST['pst_id'];
    //$pst_id_v = $_GET['pst_id_v'];

    require_once('../global/connection.php');

    // Delete item from database
    $query = 
        "DELETE FROM petstore
        WHERE pst_id = :pst_id_p";

    try
    {
        $statement = $db->prepare($query);
        $statement->bindParam(':pst_id_p', $pst_id_v);
        $row_count = $statement->execute();
        $statement->closeCursor();

        //view rows affected, comment when done testing
        //exit($row_count);

        //include('index.php'); //forwarding is faster, one trip to server
        header('Location: index.php'); //sometimes, redirecting is needed (two trips to server)
    }

    catch (PDOException $e)
    {
        $error = $e->getMessage();
        include('../global/error.php');
    }
?>
