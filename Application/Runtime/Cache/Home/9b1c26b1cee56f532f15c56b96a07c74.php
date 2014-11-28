<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <link type="text/css" rel="stylesheet" href="/tfun/public/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="/tfun/public/css/mystyle.css"/>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">TFUN</a>
        </div>
</nav>

<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><div class="col-lg-3 col-md-4 col-sm-6">
        <div class="panel panel-default">
            <?php if(!empty($record['title'])){ ?>
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo ($record['title']); ?></h3>
                </div>
            <?php }?>
            <div class="panel-body">
                Basic panel example
            </div>
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
<script type="javascript" src="/tfun/public/js/jquery-1.10.2.min.js"></script>
<script type="javascript" src="/tfun/public/js/bootstrap.js"></script>
</body>
</html>