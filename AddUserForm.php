<?php
    include 'mycon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Form</title>
    <style>
        body {
            background-color: beige;
            text-align: center;
            margin-top: 50px;
        }

        .container {
            background-color: aliceblue;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgb(36, 36, 36);
            display: inline-block;
        }

        .input-field {
            padding: 10px;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            margin-top: 10px;
            background-color: green;
            border-radius: 10px;
            padding: 10px 20px;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="AddUser.php" method="post">
            <div class="input-field">
                <label for="teacherId">Teacher Id:</label>
                <input type="text" id="teacherId" name="TchID" placeholder="Enter ID Here" required>
            </div>

            <div class="input-field">
                <label for="firstname">Firstname:</label>
                <input type="text" id="firstname" name="TchFName" placeholder="Enter Firstname Here" required>
            </div>

            <div class="input-field">
                <label for="lastname">Lastname:</label>
                <input type="text" id="lastname" name="TchLName" placeholder="Enter Lastname Here" required>
            </div>

            <div class="input-field">
                <label for="salary">Salary:</label>
                <input type="text" id="salary" name="Salary" placeholder="Enter Salary Here" required>
            </div>

            <button type="submit" name="create_user">Submit</button>
        </form>
    </div>
</body>
</html>
