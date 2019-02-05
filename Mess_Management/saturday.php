<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body id="back">
       <div id="header">saturday's menu</div>
        <div>
            <div><marquee class="slide">mess timings:- breakfast:- 7:00am-9:00am &nbsp; &nbsp; lunch:- 12:00pm-2:00pm &nbsp; &nbsp; snack:1  &nbsp; &nbsp; dinner:- 7:30pm-9:00pm</marquee></div>
         <form action="sat.php" method="post">  
         <ul class="text" type="square">
        <li class="listing">breakfast</li>
             <ul type="disc">
              <?php $user = $_GET['user']; ?>
             <input type="text" name="user" value="<?php echo $user; ?>" style="display: none";>
             <input type="text" name="day" value="saturday" style="display: none";>
             <li class="meal">aloo pratha <span><input value="aloo pratha" name="a" class="checkmark"  type="checkbox"></span></li>
             <li class="meal">butter <span><input  value="butter" name="b"class="checkmark"  type="checkbox"></span></li>
             <li class="meal">pickle <span><input  value="pickle" name="c"class="checkmark"  type="checkbox"></span></li>
             <li class="meal">tea <span><input value="tea" name="d" class="checkmark"  type="checkbox"></span></li>
             </ul></ul>
        <ul class="text" type="square">
        <li class="listing">lunch</li>
            <ul type="disc">
            <li class="meal">black chana <span><input value="black chana" name="e" class="checkmark"  type="checkbox"></span></li>
            <li class="meal">soya champ <span><input  value="soya champ" name="f" class="checkmark"  type="checkbox"></span></li>
            <li class="meal">roti <span><input value="roti" name="g" class="checkmark"  type="checkbox"></span></li>
            <li class="meal">raita <span><input value="raita" name="h" class="checkmark"  type="checkbox"></span></li></ul>
            </ul>
        <ul class="text" type="square">
        <li class="listing">snacks</li>
            <ul type="disc">
            <li class="meal">patty/bread pakora <span><input value="patty/bread pakora" name="i" class="checkmark"  type="checkbox"></span></li>
            <li class="meal">tea <span><input value="tea" name="j" class="checkmark"  type="checkbox"></span></li></ul>
        </ul>
        <ul class="text" type="square">
            <li class="listing">dinner</li>
                <ul type="disc">
                    <li class="meal">moong masur <span><input value="moong masur" name="k" class="checkmark"  type="checkbox"></span></li>
                <li class="meal">pindi chana <span><input value="pindi chana" name="l" class="checkmark"  type="checkbox"></span></li>
                <li class="meal">rice <span><input value="rice" name="m" class="checkmark"  type="checkbox"></span></li>
                <li class="meal">roti <span><input value="roti" name="n" class="checkmark"  type="checkbox"></span></li>
                <li class="meal">cold cofee/hot milk <span><input value="cold cofee/hot milk" name="o" class="checkmark"  type="checkbox"></span></li></ul>
             </ul></div>
        <div class="buttons"><input class="submit" type="submit" name="submit"></div>
                </form> 
    </body>
</html>
 