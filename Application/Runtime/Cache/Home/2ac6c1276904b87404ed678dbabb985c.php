<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="<?php echo C('PLUGIN');?>Bootstrap/js/jquery.js"></script>
    <script src="<?php echo C('PLUGIN');?>Bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="<?php echo C('PLUGIN');?>Bootstrap/css/bootstrap.css">
</head>

<body>

    <div class="container">
        <form method="post" action="<?php echo U('addArticle');?>">
            <h3>标题：</h3>

            <input type="text" name="title" class="form-control" value="" required="required">

            <h3>内容</h3>
            <textarea name="content" class="form-control" rows="20" required="required"></textarea>
            
            <br>
          
            <button type="submit" class="btn btn-large btn-block btn-primary">点我提交</button>
        </form>
    </div>
</body>

</html>