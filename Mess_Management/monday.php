<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body id="back">
        <div id="header">monday's menu</div>
        <div>
            <div><marquee class="slide">mess timings:- breakfast:- 7:00am-9:00am &nbsp; &nbsp; lunch:- 12:00pm-2:00pm &nbsp; &nbsp; snack:1  &nbsp; &nbsp; dinner:- 7:30pm-9:00pm</marquee></div>
            <form action="mon.php" method="post">  
         <ul class="text" type="square">
        <li class="listing">breakfast</li>
             <ul type="disc">
              <?php $user = $_GET['user']; ?>
             <input type="text" name="user" value="<?php echo $user; ?>" style="display: none";>
             <input type="text" name="day" value="monday" style="display: none";>
             <li class="meal">aloo pratha <span><input class="checkmark"   name="a" value="aloo pratha" type="checkbox"></span></li>
             <li class="meal">butter <span><input class="checkmark"   name="b" value="butter" type="checkbox"></span></li>
             <li class="meal">pickle <span><input class="checkmark"   name="c" value="pickle" type="checkbox"></span></li>
             <li class="meal">tea <span><input class="checkmark"  name="d" value="tea"  type="checkbox"></span></li></ul>
        </ul>
        <ul class="text" type="square">
        <li class="listing">lunch</li>
            <ul type="disc">
            <li class="meal">rajmah <span><input class="checkmark"   name="e" value="rajmah" type="checkbox"></span></li>
            <li class="meal">aloo jeera <span><input class="checkmark"  name="f" value="aloo jeera"  type="checkbox"></span></li>
            <li class="meal">rice <span><input class="checkmark"   name="g" value="rice" type="checkbox"></span></li>
            <li class="meal">roti <span><input class="checkmark"   name="h" value="roti" type="checkbox"></span></li>
            <li class="meal">raita <span><input class="checkmark"   name="i" value="raita" type="checkbox"></span></li></ul>
            </ul>
        <ul class="text" type="square">
        <li class="listing">snacks</li>
            <ul type="disc">
            <li class="meal">tea <span><input class="checkmark"   name="j" value="tea" type="checkbox"></span></li>
            <li class="meal">sandwich <span><input class="checkmark"  name="k" value="sandwich"  type="checkbox"></span></li></ul>
        </ul>
        <ul class="text" type="square">
            <li class="listing">dinner</li>
                <ul type="disc">
                <li class="meal">kadai paneer <span><input class="checkmark" name="l" value="kadai paneer"  type="checkbox"></span></li>
                <li class="meal">moong masur <span><input class="checkmark"  name="m" value="moong masur" type="checkbox"></span></li>
                <li class="meal">rice <span><input class="checkmark"  name="n" value="rice" type="checkbox"></span></li>
                <li class="meal">roti <span><input class="checkmark"  name="o" value="roti"   type="checkbox"></span></li>
                <li class="meal">salad <span><input class="checkmark"  name="p" value="salad" type="checkbox"></span></li>
                <li class="meal">hot milk <span><input class="checkmark"  name="q" value="hot milk" type="checkbox"></span></li></ul>
                </ul></div>
                <div class="buttons"><input class="submit" type="submit" name="submit"></div>
                </form>
    </body>
</html>
 