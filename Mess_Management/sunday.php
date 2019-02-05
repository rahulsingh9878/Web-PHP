<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body id="back">
       <div id="header">sunday's menu</div>
        <div>
            <div><marquee class="slide">mess timings:- breakfast:- 7:00am-9:00am &nbsp; &nbsp; lunch:- 12:00pm-2:00pm &nbsp; &nbsp; snack:1  &nbsp; &nbsp; dinner:- 7:30pm-9:00pm</marquee></div>
         <form action="sun.php" method="post">  
         <ul class="text" type="square">
        <li class="listing">breakfast</li>
             <ul type="disc">
              <?php $user = $_GET['user']; ?>
             <input type="text" name="user" value="<?php echo $user; ?>" style="display: none";>
             <input type="text" name="day" value="sunday" style="display: none";>
             <li class="meal">macroni <span><input value="macroni" name="a" class="checkmark"  type="checkbox"></span></li>
             <li class="meal">daliya <span><input value="daliya" name="b" class="checkmark"  type="checkbox"></span></li>
             <li class="meal">bread jam <span><input value="bread jam" name="c" class="checkmark"  type="checkbox"></span></li>
             <li class="meal">coffee <span><input value="coffee" name="d" class="checkmark"  type="checkbox"></span></li>
             </ul></ul>
        <ul class="text" type="square">
        <li class="listing">lunch</li>
            <ul type="disc">
            <li class="meal">dal makhni <span><input value="dal makhni" name="e" class="checkmark"  type="checkbox"></span></li>
            <li class="meal">veg briyani <span><input value="veg briyani" name="f" class="checkmark"  type="checkbox"></span></li>
            <li class="meal">roti <span><input value="roti" name="g" class="checkmark"  type="checkbox"></span></li>
            <li class="meal">raita <span><input  value="raita" name="h" class="checkmark"  type="checkbox"></span></li>
            <li class="meal">halwa <span><input value="halwa" name="i" class="checkmark"  type="checkbox"></span></li></ul>
            </ul>
        <ul class="text" type="square">
        <li class="listing">snacks</li>
            <ul type="disc">
            <li class="meal">sweet bun <span><input value="sweet bun" name="j" class="checkmark"  type="checkbox"></span></li>
            <li class="meal">tea <span><input value="tea" name="k" class="checkmark"  type="checkbox"></span></li></ul>
        </ul>
        <ul class="text" type="square">
            <li class="listing">dinner</li>
                <ul type="disc">
                    <li class="meal">rajmah <span><input value="rajmah" name="l" class="checkmark"  type="checkbox"></span></li>
                <li class="meal">dal amritsari <span><input value="dal amritsari" name="m" class="checkmark"  type="checkbox"></span></li>
                <li class="meal">mix veg <span><input value="mix veg" name="n" class="checkmark"  type="checkbox"></span></li>
                <li class="meal">roti <span><input value="roti" name="o" class="checkmark"  type="checkbox"></span></li>
                <li class="meal">rice <span><input value="rice" name="p" class="checkmark"  type="checkbox"></span></li>
                <li class="meal">gulab jamun <span><input value="gulab jamun" name="q" class="checkmark"  type="checkbox"></span></li></ul>
             </ul></div>
       <div class="buttons"><input class="submit" type="submit" name="submit"></div>
                </form>
    </body>
</html>
 