<!DOCTYPE html>
<?php $user = $_GET['user']; ?>
<html>
    <head>
    <link href="style.css" rel="stylesheet">
    </head>
    <body id="background">
        <div id="heading">Welcome to chitkara mess
        </div>
        <div class="days"class="text" >
        <ul class="text" type="square">
        <li class="day"><a href="monday.php?user=<?php echo $user; ?>">Monday</a></li>
        <li class="day"><a href="tuesday.php?user=<?php echo $user; ?>">Tuesday</a></li>
        <li class="day"><a href="wednesday.php?user=<?php echo $user; ?>">Wednesday</a></li>
        <li class="day"><a href="thursday.php?user=<?php echo $user; ?>">Thursday</a></li>
        <li class="day"><a href="friday.php?user=<?php echo $user; ?>">Friday</a></li>
        <li class="day"><a href="saturday.php?user=<?php echo $user; ?>">Saturday</a></li>
        <li class="day"><a href="sunday.php?user=<?php echo $user; ?>">Sunday</a></li>
        </ul>
        </div>
    </body>
</html>
