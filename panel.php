<?php
session_start();
?>
<head>
        <link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="css/admin.css">
</head>

<body>
        <div class="panel">
                <div class="panel-container">
                <div class="title-container">
                        <div class="title">
                          <h1>Вход</h1>
                        </div>
                </div>
                <form method='post' action='panel.php'>
                Username:
                <input type='text' name='username'>
                Password:
                <input type='password' name='passwd'>
                <input type='submit' value='Submit' class="panel-submit">
                <?php


                $username = 'silvia';
                $password = 'q5w1e3';

                if(isset($_POST['username'])){
                if($username==$_POST['username']&&$password==$_POST['passwd']){
                	
                	$_SESSION['username']='admin';
                	if($_SESSION['username']=='admin')
                	header('Location: /Photography/admin.php');

                }
                }
                ?>
                </div>
        </div>
</body>