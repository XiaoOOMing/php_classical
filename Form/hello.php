<?php

// 表单页面和逻辑在一个页面中
if ($_SERVER['REQUEST_METHOD'] == 'GET') {?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
        <p>What's your first name?</p>
        <input type="text" name="first_name">
        <input type="submit" value="Say hello">
    </form>
<?php
} else {
    echo 'Hello ' . $_POST['first_name'];
}
