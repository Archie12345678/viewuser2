<?php 
    $db = mysqli_connect("localhost:3307", "root", "");
    mysqli_select_db($db, "univdata");

    $tchID = mysqli_real_escape_string($db, $_POST['TchID']);
    $tchfname = mysqli_real_escape_string($db, $_POST['TchFName']);
    $tchlname = mysqli_real_escape_string($db, $_POST['TchLName']);
    $sal = mysqli_real_escape_string($db, $_POST['Salary']);

    //update
    if (isset($_POST['upd_btn'])) {
        $qryUpd = "UPDATE tblteacher 
        SET TchFName = '$tchfname', TchLName = '$tchlname', Salary = '$sal' 
        WHERE TchID = '$tchID'";


        if (mysqli_query($db, $qryUpd)) {
            echo '<script>window.alert("Successfully updated");</script>';
            echo '<script>window.location.href = "ViewUser.php";</script>';
        } else {
            echo "Error updating record: " . mysqli_error($db);
        }
    }

    //delete
    if (isset($_POST['del_btn'])) {
        $qryDel = "DELETE FROM tblteacher WHERE TchID = ?";
        $stmt = mysqli_prepare($db, $qryDel);
        mysqli_stmt_bind_param($stmt, 'i', $tchID);
    
        if (mysqli_stmt_execute($stmt)) {
            echo '<script>window.alert("Successfully deleted");</script>';
            echo '<script>window.location.href = "ViewUser.php";</script>';
        } else {
            echo "Error deleting record: " . mysqli_error($db);
        }
    }