<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table border="1" cellspacing="0" width="100%">
    <tr>
        <th width="20%">文章标题</th>
        <th width="70%">文章内容</th>
        <th width="10%">操作</th>
    </tr>
    <?php if(is_array($articles)): foreach($articles as $key=>$v): ?><tr align="center">
        <td><?php echo ($v["title"]); ?></td>
        <td><?php echo ($v["content"]); ?></td>
        <td><a href="">修改</a> <a href="">删除</a></td>
    </tr><?php endforeach; endif; ?>
</table>
</body>
</html>