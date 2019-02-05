<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body id="back">
       <div id="header">friday's menu</div>
        <div>
            <div><marquee class="slide">mess timings:- breakfast:- 7:00am-9:00am &nbsp; &nbsp; lunch:- 12:00pm-2:00pm &nbsp; &nbsp; snack:1  &nbsp; &nbsp; dinner:- 7:30pm-9:00pm</marquee></div>
         <form action="fri.php" method="post">  
         <ul class="text" type="square">
        <li class="listing">breakfast</li>
             <ul type="disc">
              <?php $user = $_GET['user']; ?>
             <input type="text" name="user" value="<?php echo $user; ?>" style="display: none";>
             <input type="text" name="day" value="friday" style="display: none";>
             <li class="meal">plain pratha <span><input  name="a" value="plain pratha" class="checkmark"  type="checkbox"></span></li>
             <li class="meal">sabzi <span><input name="b" value="sabzi"  class="checkmark"  type="checkbox"></span></li>
             <li class="meal">tea <span><input  name="c" value="tea" class="checkmark"  type="checkbox"></span></li>
             </ul></ul>
        <ul class="text" type="square">
        <li class="listing">lunch</li>
            <ul type="disc">
            <li class="meal">dal makhni <span><input  name="d" value="dal makhni" class="checkmark"  type="checkbox"></span></li>
            <li class="meal">aloo methi <span><input name="e" value="aloo methi"  class="checkmark"  type="checkbox"></span></li>
            <li class="meal">roti <span><input name="f" value="roti"  class="checkmark"  type="checkbox"></span></li>
            <li class="meal">rice <span><input name="g" value="rice"  class="checkmark"  type="checkbox"></span></li></ul>
            </ul>
        <ul class="text" type="square">
        <li class="listing">snacks</li>
            <ul type="disc">
            <li class="meal">mathi <span><input name="h" value="mathi"  class="checkmark"  type="checkbox"></span></li>
            <li class="meal">cofee <span><input name="i" value="cofee"  class="checkmark"  type="checkbox"></span></li></ul>
        </ul>
        <ul class="text" type="square">
            <li class="listing">dinner</li>
                <ul type="disc">
                    <li class="meal">rajmah <span><input name="j" value="rajmah"  class="checkmark"  type="checkbox"></span></li>
                <li class="meal">egg curry/mutter paneer <span><input  name="k" value="egg curry/mutter paneer" class="checkmark"  type="checkbox"></span></li>
                <li class="meal">rice <span><input  name="l" value="rice" class="checkmark"  type="checkbox"></span></li>
                <li class="meal">roti <span><input  name="m" value="roti" class="checkmark"  type="checkbox"></span></li>
                <li class="meal">rasgulla <span><input name="n" value="rasgulla"  class="checkmark"  type="checkbox"></span></li></ul>
             </ul></div>
       <div class="buttons"><input class="submit" type="submit" name="submit"></div>
                </form>
    </body>
</html>
 