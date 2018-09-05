<?php
// 自动加载类
spl_autoload_register(function ($class) {
    require str_replace('\\', DIRECTORY_SEPARATOR, ltrim($class, '\\')) . '.php';
});

date_default_timezone_set('PRC');

use Michelf\Markdown;

// 保存wiki的目录
define('PAGEDIR', dirname(__FILE__) . '/pages');

// 页面名
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (isset($_GET['edit'])) {
    // 编辑页面
    pageheader($page);
    edit($page);
    pageFooter($page, false);
} else if (isset($_POST['edit'])) {
    // 编辑API
    file_put_contents(pageToFile($_POST['page']), $_POST['contents']);
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . '?page=' . urlencode($_POST['page']));
    exit();
} else {
    // 显示
    pageheader($page);
    if (is_readable(pageToFile($page))) {
        $text = file_get_contents(pageToFile($page));
        $text = Markdown::defaultTransform($text);
        $text = wikiLinks($text);
        echo $text;
        pageFooter($page, false);
    } else {
        edit($page, true);
        pageFooter($page, false);
    }
}

function pageheader($page)
{ ?>
    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Wiki: <?php echo htmlentities($page); ?></title>
    </head>
    <body>
    <h1><?php echo htmlentities($page); ?></h1>
    <hr/>
    <?php
}

function pageFooter($page, $displayEditLink)
{
    $timestamp = @filemtime(pageToFile($page));
    if ($timestamp) {
        $lastModifield = strftime('%C', $timestamp);
    } else {
        $lastModifield = 'Never';
    }
    if ($displayEditLink) {
        $editLink = '- <a href="?page=' . urlencode($page) . '&edit=true">Edit</a>';
    } else {
        $editLink = '';
    }
    ?>
    <hr/>
    <em>Last Modifield: <?php echo $lastModifield; ?></em>
    <?php echo $editLink; ?> - <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>">Home</a>
    </body>
    </html>
    <?php
}

function edit($page, $isNew = false)
{
    if ($isNew) {
        $contents = '';
        ?>
        <p><b>This page doesn't exist yet.</b>To create it, enter its contents below and click the <b>Save</b>
            button.</p>
        <?php
    } else {
        $contents = file_get_contents(pageToFile($page));
    }
    ?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']); ?>" method="post">
        <input type="hidden" name="edit" value="true"/>
        <input type="hidden" name="page" value="<?php echo htmlentities($page); ?>">
        <textarea name="contents" cols="60" rows="20"><?php echo htmlentities($contents); ?></textarea>
        <br/>
        <input type="submit" value="Save"/>
    </form>
    <?php
}

function pageToFile($page)
{
    return PAGEDIR . '/' . md5($page);
}

function wikiLinks($page)
{
    if (preg_match_all('/\[([^\]]+?)\]/', $page, $matchs, PREG_SET_ORDER)) {
        foreach ($matchs as $match) {
            $page = str_replace($match[0], '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . urlencode($match[1]) . '">' . htmlentities($match[1]) . '</a>', $page);
        }
    }
    return $page;
}

