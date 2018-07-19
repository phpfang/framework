<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel</title>
    <!-- Bootstrap CSS 文件 -->
    <link rel="stylesheet" href="/tp32/Public/static/bootstrap/css/bootstrap.min.css">
    <!-- 首页单独样式 -->
    <link rel="stylesheet" href="/tp32/Public/static/bootstrap/css/index.css">
</head>
<body>
<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="/" class="navbar-brand">首页</a>
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
            <span class="sr-only">菜单折叠</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="nav navbar-nav">
           <li class="active"><a href="/">开发</a></li>
            <li><a href="#">列表</a></li>
            <li><a href="#">头条</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">资讯 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">学习一</a></li>
                <li><a href="#">学习二</a></li>
                <li class="divider"></li>
                <li><a href="#">技术学习</a></li>
                <li class="divider"></li>
                <li><a href="#">jq学习</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search...">
            </div>
            <button type="submit" class="btn btn-default">搜索</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
                
               
               
                
       
                <?php if(isset($_SESSION['name'])): ?><li><a href="<?php echo U('login/login');?>">登录</a></li>
            <li><a href="<?php echo U('resgister/index');?>">注册</a></li>
            <?php else: ?>
            <li><a>欢迎登陆你<?php echo (session('name')); ?></a> </li>
            <li><a href="<?php echo U('login/tuichu');?>">退出</a></li><?php endif; ?>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">相关<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">系列一</a></li>
                <li class="divider"></li>
                <li><a href="#">系列二</a></li>
              </ul>
            </li>
          </ul>
        </div>
    </div>
</div>
<!-- 头部 -->
<div class="jumbotron jump">
    <div class="container">
        <h2>玩转laravel-之首页</h2>

        <p> 玩转- laravel</p>
    </div>
</div>

<!-- 中间内容区局 -->
<div class="container">
    <div class="row">

        <!-- 左侧菜单区域   -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="./index.html" class="list-group-item active">学生列表</a>
                <a href="<?php echo U('index/form');?>" class="list-group-item">新增学生</a>
            </div>
        </div>

        <!-- 右侧内容区域 -->
        <div class="col-md-9">

            <!-- 成功提示框 -->
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>成功!</strong> 操作成功提示！
            </div>

            <!-- 失败提示框 -->
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>失败!</strong> 操作失败提示！
            </div>

            <!-- 自定义内容区域 -->
            <div class="panel panel-default">
                <div class="panel-heading">学生列表</div>
                <table class="table table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>姓名</th>
                        <th>年龄</th>
                        <th>性别</th>
                        <th>添加时间</th>
                        <th width="120">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                  <?php if(is_array($students)): foreach($students as $key=>$student): ?><tr>
                        <th scope="row"><?php echo ($student["id"]); ?></th>
                        <td><?php echo ($student["name"]); ?></td>
                        <td><?php echo ($student["age"]); ?></td>
                        <td><?php echo ($student["sex"]); ?></td>
                        <td><?php echo date('Y-m-d h:m:s',$student['created_at']);?></td>
                     
                        <td>
                            <a href="<?php echo U('index/detail','id='.$student['id']);?>">详情</a>
                            
                            <a href="">修改</a>
                            <a href="">删除</a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                    
                    </tbody>
                </table>
            </div>

            <!-- 分页  -->
            <div>
                <ul class="pagination pull-right">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

<!-- 尾部 -->
<div class="jumbotron" style="margin:0;">
    <div class="container">
        <span>  @2017 laravel</span>
    </div>
</div>

<!-- jQuery 文件 -->
<script src="/tp32/Public/static/jquery/jquery.min.js"></script>
<!-- Bootstrap JavaScript 文件 -->
<script src="/tp32/Public/static/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>