<!DOCTYPE html>
<html>
<head>
    <title>Baron - Home</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style>
        .container {
            text-align: center;
            padding: 20px;
        }

        .welcome-message {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
            background-color: #f2f2f2;
            border-radius: 5px;
            margin-top: 20px;
        }

        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff0000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    // Check if user is not logged in, redirect to login.php
    if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
        header('Location: login.php');
        exit();
    }
    ?>

    <div class="container">
        <h1>Welcome to the Barbershop!</h1>
        <p class="welcome-message">Hello, <?php echo $_SESSION['username']; ?>!</p>
        <div class="content">
            <p>Put your content here.</p>
        </div>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>