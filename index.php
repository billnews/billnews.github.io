<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <style>
        i {
            font-size: 15px;
            align-self: center;
        }

        li i {
            font-size: 50px;

        }

        * {
            font-family: 'Lato', sans-serif;
            font-size: 10px;
        }

        body {
            margin: 0;
        }

        #bar1 {
            width: 100%;
            height: 80px;
            text-transform: uppercase;
            position: fixed;
            top: 0;
            margin: auto;
            background-color: #18183c;
            border: solid #18183c;
            z-index: 100;
            font-size: 50px;
            text-align: left;
            font-family: 'Lato', sans-serif;
        }

        div {}

        #div1 {
            background-image: url(https://www.1zoom.me/big2/37/183195-frederika.jpg);
            background-size: 1500px;
            float: right;
            width: 100%;
            background-size: 70rem;
            text-align: center;
            height: 600px;
            font-size: 200px;
            background-size: auto;
            background-attachment: fixed;
        }

        #div2 {
            background-image: url(https://www.czechuniversities.com/uploads/2021/02/astronaut-deep-space.jpg);
            background-size: 2200px;
            float: right;
            width: 100%;
            color: beige;
            font-size: 6rem;
            background-size: cover;

        }

        header:first-letter {
            font-family: monospace;
            font-size: 100px;
            color: aqua;

        }

        header {
            text-align: center;
            font-family: monospace;
            font-size: 50px;
            padding-top: 100px;
            color: white;
        }

        blockquote {
            font-size: 50px;
            padding: 100px;
            transition-duration: 2s;
            color: white;
            text-shadow: 10px 0px white;
            text-shadow: 20px 0px white;
        }

        blockquote:hover {
            transition-duration: 2s;

            text-align: center;
            transform: rotate(360deg);
        }

        li {
            font-size: 58px;
        }

        * {
            text-shadow:
        }

        article {
            font-size: 50px;
        }

        #div3 {
            padding: 100px;
        }

        h1 {
            font-size: 4rem;
            color: black;
            text-align: center;
        }

        #div4 {
            background-image: url(https://twinfinite.net/wp-content/uploads/2021/07/Mini-Motorways-Screen.jpg);
            width: 100%;
            height: 400px;
            background-size: 100%;

        }

        #div5 {
            font-size: 12rem;
            text-align: center;
        }

        footer {
            text-align: center;
        }

        #div6 {
            background-image: url(https://t3.ftcdn.net/jpg/03/27/94/84/360_F_327948467_Wo2IMoWyNGB4J85wJrLX5Q0mF8Vr6gST.jpg);
            width: 100%;
            height: 400px;
            background-size: 100%;
        }
    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php
function visitor($record) {
  $db_host = "localhost";
  $db_username = "username"; 
  $db_password = "password";
  $db_name = "database-name";
  $db_table = "table-name";
  $counter_page = "access_page";
  $counter_field = "access_counter";

  $db = mysqli_connect ($db_host, $db_username, $db_password, $db_name) or die("Host or database not accessible");

  $sql_call = "INSERT INTO ".$db_table." (".$counter_page.", ".$counter_field.") VALUES ('".$record."', 1) ON DUPLICATE KEY UPDATE ".$counter_field." = ".$counter_field." + 1"; 
  mysqli_query($db, $sql_call) or die("Error while entering");

$sql_call = "SELECT ".$counter_field. " FROM ".$db_table." WHERE ".$counter_page. " = '".$record. "'";
$sql_result = mysqli_query($db, $sql_call) or die("SQL request failed ");
$row = mysqli_fetch_assoc($sql_result);
$x = $row[$counter_field];

mysqli_close($db);
return $x;
  }
?>
<?php
  $page_name = "Eh?";
?>
<?php
include "webcounter.php";
$access_number = visitor(Eh?);
?>
<body>

    <div id="div1">
        <header>This is my homepage</header>
        <blockquote> BAHAHAHA why not</blockquote>
        <!--
    <article>Some of the things i love:</article>
    <ul>
        <li>Marvel</li>
        <li>Fandoms</li>
        <li>Reading</li>
        <li>Lying at the beach/on a mountain </li>
-->
    </div>
    <div id="bar1"> HI </div>
    <form action="">
        <input type="text">
    </form>
    <div id="div3">
        <h1>Hello to my new awesomesauce Website!</h1>
        <i>-said someone once while building his website for fun while vibing to ticking by tin</i>
    </div>

    <div id="div4">

    </div>
    <h3>What you see there is one of my favourite games! </h3>

    <div id="div5">What I do:</div>
    <ul>
        <li>Teach Web Development <i class="icon-screen-desktop"></i></li>
        <li>Teach German <i class="icon-globe "></i></li>
        <li>Read Stuff <i class="icon-notebook"></i></li>
        <li>Go to School <i class="icon-graduation"></i></li>
        <li>Netflix and Chill <i class="icon-screen-tablet"></i></li>
        <li>Program <i class="icon-ghost"></i></li>
        <li>get rickrolled by the whole server...</li>
    </ul>

    <div id="div6">

    </div>

    <div id="div5">CV: </div>
    <footer>and yes it looks like an emoji face :(</footer>
    <ul>
        <li>Local Talent Program</li>
        <li>1st Prize in a National Music Competition</li>
        <li>1st Prize in a local Math Olympiade</li>
        <li>Attendance of a Fraunhofer Institut sponsored Camp</li>
    </ul>


    <footer>Copyright Bill Xiang &#169 2021</footer>
</body></html>

