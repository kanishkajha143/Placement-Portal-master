<?php

//To Handle Session Variables on This Page
session_start();

//If user Not logged in then redirect them back to homepage. 
if (empty($_SESSION['id_user'])) {
  header("Location: ../index.php");
  exit();
}

require_once("../db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Calendar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(255, 255, 255);
        }
        #b {
            border: none;
            width: 80%;
            max-width: 800px;
            height: 600px;
        }
    </style>
</head>
<body>
    <?php
    include 'header.php'
    ?>
    <div id="b">
        <iframe src="https://calendar.google.com/calendar/embed?src=d014e784a020cc332c4af6531633abab82d8015d3fc77f47e40460b0866cdc91%40group.calendar.google.com&ctz=Asia%2FKolkata" style="border: 0" width="800" height="600" frameborder="10" scrolling="yes"></iframe>></iframe>
    </div>
    <?php include 'php/footer.php'; ?>
</body>
</html>



