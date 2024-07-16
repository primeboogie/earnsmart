<?php

if (isset($_POST['time'])){
    $min = $_POST['min'];
    setcookie("token", "token1234", time() + 60 * $min, "/");
    echo "Chonjo na hio $min Minutes";
}
?>
<form action="time.php" method="POST">
<input type="number" placeholder="Enter minutes" name="min">
<button name="time" >Submit</button>
</form>