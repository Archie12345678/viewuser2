<?php
    if(isset($_POST['create_user']))
    {
        $db = mysqli_connect("localhost:3307", "root", "");
        if (!$db) {
            die('Could not connect: ' . mysqli_error());
        }
        
        $db_selected = mysqli_select_db($db, "univdata");
        if (!$db_selected) {
            die ('Can\'t use database: ' . mysqli_error());
        }

        $tchID = mysqli_real_escape_string($db, $_POST['TchID']);
        $tchfname = mysqli_real_escape_string($db, $_POST['TchFName']);
        $tchlname = mysqli_real_escape_string($db, $_POST['TchLName']);
        $sal = mysqli_real_escape_string($db, $_POST['Salary']);

        $qry = "INSERT INTO tblteacher(TchId, TchFName, TchLName, Salary) VALUES ('$tchID',  '$tchfname', '$tchlname', '$sal')";

        $result = mysqli_query($db, $qry);

        if($result) {
            echo '<script>window.alert("User added successfully");</script>';
            echo '<script>window.location.href = "ViewUser.php";</script>';
            exit;
        } else {
            echo 'Error inserting user: ' . mysqli_error($db);
        }
        mysqli_close($db);
    }
?>
