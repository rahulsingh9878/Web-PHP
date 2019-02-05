<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body id="back">
        <div id="header">thursday's menu</div>
        <div>
            <div><marquee class="slide">mess timings:- breakfast:- 7:00am-9:00am &nbsp; &nbsp; lunch:- 12:00pm-2:00pm &nbsp; &nbsp; snack:1  &nbsp; &nbsp; dinner:- 7:30pm-9:00pm</marquee></div>
          <form action="thu.php" method="post">  
         <ul class="text" type="square">
        <li class="listing">breakfast</li>
             <ul type="disc">
              <?php $user = $_GET['user']; ?>
             <input type="text" name="user" value="<?php echo $user; ?>" style="display: none";>
             <input type="text" name="day" value="thursday" style="display: none";>
             <li class="meal">onion/green chilli/methi pratha <span><input class="checkmark"  name="a" value="onion/green chilli/methi pratha" type="checkbox"></span></li>
             <li class="meal">curd <span><input class="checkmark"  name="b" value="curd" type="checkbox"></span></li>
             <li class="meal">tea <span><input class="checkmark"  name="c" value="tea" type="checkbox"></span></li>
             </ul></ul>
        <ul class="text" type="square">
        <li class="listing">lunch</li>
            <ul type="disc">
            <li class="meal">karhi pakoda <span><input class="checkmark"  name="d" value="karhi pakoda" type="checkbox"></span></li>
            <li class="meal">aloo mutter <span><input class="checkmark" name="e" value="aloo mutter"  type="checkbox"></span></li>
            <li class="meal">salad <span><input class="checkmark"  name="f" value="salad" type="checkbox"></span></li>
            <li class="meal">roti <span><input class="checkmark"  name="g" value="roti" type="checkbox"></span></li>
            <li class="meal">rice <span><input class="checkmark"  name="h" value="rice" type="checkbox"></span></li></ul>
            </ul>
        <ul class="text" type="square">
        <li class="listing">snacks</li>
            <ul type="disc">
            <li class="meal">stuff kulcha <span><input class="checkmark"  name="i" value="stuff kulcha" type="checkbox"></span></li>
            <li class="meal">tea <span><input class="checkmark"  name="j" value="tea" type="checkbox"></span></li></ul>
        </ul>
        <ul class="text" type="square">
            <li class="listing">dinner</li>
                <ul type="disc">
                    <li class="meal">dal fry <span><input class="checkmark" name="k" value="dal fry"  type="checkbox"></span></li>
                <li class="meal">seasonal veg <span><input class="checkmark" name="l" value="seasonal veg"  type="checkbox"></span></li>
                <li class="meal">rice <span><input class="checkmark"  name="m" value="rice" type="checkbox"></span></li>
                <li class="meal">roti <span><input class="checkmark"  name="n" value="roti" type="checkbox"></span></li>
                <li class="meal">kulfi/kesar ladoo <span><input class="checkmark"  name="o" value="kulfi/kesar ladoo" type="checkbox"></span></li></ul>
             </ul></div>
      <div class="buttons"><input class="submit" type="submit" name="submit"></div>
                </form>
    </body>
</html>
 