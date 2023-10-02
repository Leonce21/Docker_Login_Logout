<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }
        .dashboard-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #007BFF;
        }
        .logout-button {
            background-color: #FF0000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .logout-button:hover {
            background-color: #CC0000;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome to the Dashboard, <?php echo $_SESSION['user']; ?>!</h1>
        <a class="logout-button" href="logout.php">Logout</a>
    </div>
</body>
</html>
