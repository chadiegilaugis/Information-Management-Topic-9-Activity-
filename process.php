<?php
session_start();

require_once 'connection.php';


/**
 * setting the insertion 
 * 
 */
try{
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $contact_number = $_POST['contact_number'];
    
    
        $sql = "INSERT INTO users(name,address,contact_number) VALUES(' $name','$address','$contact_number')";
    
        $conn->exec($sql);
        checkCredentials();
    }
    header('Location: index.php');
}catch (PDOException $e){
    die("Data is not save inserting data has a problem " . $e->getMessage());
}

/**
 * This function checks if one of input fields is empty 
 * and display a message according to the type of message
 * either success or fail
 */
function checkCredentials(){
    if(!empty($name) && !empty($address) && !empty($contact_number))
    {
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">Data saved to the database</div>';
    }
    else
    {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Data not saved missing fields</div>';
    }  
}