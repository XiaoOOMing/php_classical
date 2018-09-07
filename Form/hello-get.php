<form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
    <p>What's your first name?</p>
    <input type="text" name="first_name">
    <br>
    <p>What's your age?</p>
    <input type="text" name="age">
    <br>
    <p>What's your email?</p>
    <input type="text" name="email">
    <br>
    <input type="submit" value="Say hello">
</form>
