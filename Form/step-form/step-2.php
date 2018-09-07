<form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="post">
    Favorite color: <input type="text" name="color"/> <br/>
    Favorite food: <input type="text" name="food"/> <br/>
    <input type="hidden" name="step" value="<?php echo $step + 1 ?>"/>
    <input type="submit" value="Done"/>
</form>
