<?php 
    include "../db_conn.php";

    function inputsEmptyRegister($email){
        $value;
        if(empty($email)){
            $value = true;
        }else{
            $value = false;
        }
        return $value;
    }

    function emailAlreadyExists($conn, $email){
        $value;
        // SQL Query
        $sql = "SELECT * FROM newsletter WHERE emails = ?;";
        // Prepared statement initializing 
        $stmt = mysqli_stmt_init($conn);
        // Binding statement with the query and checking errors
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ./aboutus.php?err=failedstmt");
            exit();
        }
        else{
            // Binding data with the statement
            mysqli_stmt_bind_param($stmt, "s", $email);
            // Statement execution
            mysqli_stmt_execute($stmt);
            // Save results if available
            $data = mysqli_stmt_get_result($stmt);
            // Checking if there is at least one result
            if(!mysqli_fetch_assoc($data)){
                $value = false;
            }
            else{
                $value = true;
            }
        }
        // Closing the statement
        mysqli_stmt_close($stmt);

        return $value;
    }

    if(isset($_POST['btnSubmit'])){

        // Prevent SQL Injections attacks
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        if(inputsEmptyRegister($email)){
            header("location: ./aboutus.php?err=empty_inputs");
        }
        else if(emailAlreadyExists($conn, $email)){
            header("location: ./aboutus.php?err=email_already_exists");
        }
        else{
            $sql = "INSERT INTO newsletter(emails) VALUES('$email')";

            // Executing the query in the database
            if(mysqli_query($conn, $sql)){
                header("location: ./aboutus.php?err=subscribed_to_newsletter");
            }
        }
    }
    else{
        header("location: ./aboutus.php");
        exit();
    }
?>