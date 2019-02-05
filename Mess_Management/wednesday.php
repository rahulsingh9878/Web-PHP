<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body id="back">
       <div id="header">wednesday's menu</div>
        <div>
            <div><marquee class="slide">mess timings:- breakfast:- 7:00am-9:00am &nbsp; &nbsp; lunch:- 12:00pm-2:00pm &nbsp; &nbsp; snack:1  &nbsp; &nbsp; dinner:- 7:30pm-9:00pm</marquee></div>
          <form action="wed.php" method="post">  
         <ul class="text" type="square">
        <li class="listing">breakfast</li>
             <ul type="disc">
              <?php $user = $_GET['user']; ?>
             <input type="text" name="user" value="<?php echo $user; ?>" style="display: none";>
             <input type="text" name="day" value="wednesday" style="display: none";>
             <li class="meal">veg sandwich <span><input class="checkmark"  name="a" value="veg sandwich"  type="checkbox"></span></li>
             <li class="meal">daliya <span><input class="checkmark"  name="b" value="daliya" type="checkbox"></span></li>
             <li class="meal">tea <span><input class="checkmark"  name="c" value="tea" type="checkbox"></span></li>
             </ul></ul>
        <ul class="text" type="square">
        <li class="listing">lunch</li>
            <ul type="disc">
            <li class="meal">black channa <span><input class="checkmark"  name="d" value="black channa" type="checkbox"></span></li>
            <li class="meal">jeera rice <span><input class="checkmark"  name="e" value="jeera rice" type="checkbox"></span></li>
            <li class="meal">masal nutri <span><input class="checkmark" name="f" value="masal nutri"  type="checkbox"></span></li>
            <li class="meal">roti<span><input class="checkmark"  name="g" value="roti" type="checkbox"></span></li>
            <li class="meal">raita <span><input class="checkmark" name="h" value="raita"  type="checkbox"></span></li></ul>
            </ul>
        <ul class="text" type="square">
        <li class="listing">snacks</li>
            <ul type="disc">
            <li class="meal">muffin <span><input class="checkmark"  name="i" value="muffin" type="checkbox"></span></li>
            <li class="meal">tea <span><input class="checkmark" name="j" value="tea"  type="checkbox"></span></li></ul>
        </ul>
        <ul class="text" type="square">
            <li class="listing">dinner</li>
                <ul type="disc">
                    <li class="meal">maa chana dal <span><input class="checkmark"  name="k" value="maa chana dal" type="checkbox"></span></li>
                <li class="meal">chilli vegetable <span><input class="checkmark"  name="l" value="chilli vegetable" type="checkbox"></span></li>
                <li class="meal">rice <span><input class="checkmark"  name="m" value="rice" type="checkbox"></span></li>
                <li class="meal">roti <span><input class="checkmark" name="n" value="roti"  type="checkbox"></span></li>
                    <li class="meal">hot milk <span><input class="checkmark" name="o" value="hot milk"  type="checkbox"></span></li></ul>
             </ul></div>
       <div class="buttons"><input class="submit" type="submit" name="submit"></div>
                </form>
    </body>
</html>
 