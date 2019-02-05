<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body id="back">
        <div id="header">tuesday's menu</div>
        <div>
            <div><marquee class="slide">mess timings:- breakfast:- 7:00am-9:00am &nbsp; &nbsp; lunch:- 12:00pm-2:00pm &nbsp; &nbsp; snack:1  &nbsp; &nbsp; dinner:- 7:30pm-9:00pm</marquee></div>
         <form action="tue.php" method="post">  
         <ul class="text" type="square">
        <li class="listing">breakfast</li>
             <ul type="disc">
              <?php $user = $_GET['user']; ?>
             <input type="text" name="user" value="<?php echo $user; ?>" style="display: none";>
             <input type="text" name="day" value="tuesday" style="display: none";>
             <li class="meal">dal pratha <span><input class="checkmark"   name="a" value="dal pratha" type="checkbox"></span></li>
             <li class="meal">curd <span><input class="checkmark"  name="b" value="curd"  type="checkbox"></span></li>
             <li class="meal">tea <span><input class="checkmark"   name="c" value="tea" type="checkbox"></span></li>
             </ul></ul>
        <ul class="text" type="square">
        <li class="listing">lunch</li>
            <ul type="disc">  
            <li class="meal">chana masala <span><input class="checkmark"   name="d" value="chana masala" type="checkbox"></span></li>
            <li class="meal">seasonal veg <span><input class="checkmark"  name="e" value="seasonal veg" type="checkbox"></span></li>
            <li class="meal">salad <span><input class="checkmark"   name="f" value="salad" type="checkbox"></span></li>
            <li class="meal">roti <span><input class="checkmark"   name="g" value="roti" type="checkbox"></span></li>
            <li class="meal">rice <span><input class="checkmark"   name="h" value="rice" type="checkbox"></span></li></ul>
            </ul>
        <ul class="text" type="square">
        <li class="listing">snacks</li>
            <ul type="disc">
            <li class="meal">samosa <span><input class="checkmark"   name="i" value="samosa" type="checkbox"></span></li>
            <li class="meal">tea <span><input class="checkmark"  name="j" value="tea"  type="checkbox"></span></li></ul>
        </ul>
        <ul class="text" type="square">
            <li class="listing">dinner</li>
                <ul type="disc">
                    <li class="meal">dal makhni <span><input class="checkmark"   name="k" value="dal makhni" type="checkbox"></span></li>
                <li class="meal">mix veg <span><input class="checkmark"   name="l" value="mix veg" type="checkbox"></span></li>
                <li class="meal">rice <span><input class="checkmark"   name="m" value="rice" type="checkbox"></span></li>
                <li class="meal">roti <span><input class="checkmark"   name="n" value="roti" type="checkbox"></span></li>
                <li class="meal">salad <span><input class="checkmark"   name="o" value="salad" type="checkbox"></span></li>
                <li class="meal">suzi ka halwa <span><input class="checkmark"   name="p" value="suzi ka halwa" type="checkbox"></span></li></ul>
             </ul></div>
         <div class="buttons"><input class="submit" type="submit" name="submit"></div>
                </form>
    </body>
</html>
 