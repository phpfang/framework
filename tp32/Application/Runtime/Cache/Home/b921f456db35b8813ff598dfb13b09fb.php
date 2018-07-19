<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel</title>
    <!-- Bootstrap CSS 文件 -->
    <link rel="stylesheet" href="/tp32/Public/static/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="/tp32/Public/static/bootstrap/css/form.css">
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
            <li><a href="./login.html">登录</a></li>
            <li><a href="./register.html">注册</a></li>
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
        <h2>玩转laravel</h2>

        <p> 玩转- laravel</p>
    </div>
</div>

<!-- 中间内容区局 -->
<div class="container">
    <div class="row">

        <!-- 左侧菜单区域   -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="./index.html" class="list-group-item ">学生列表</a>
                <a href="./form.html" class="list-group-item active">新增学生</a>
            </div>
        </div>

        <!-- 右侧内容区域 -->
        <div class="col-md-9">

            <!-- 所有的错误提示 -->
            <div class="alert alert-danger">
                <ul>
                    <li>姓名不能为空</li>
                    <li>年龄只能为整数</li>
                    <li>请选择性别</li>
                </ul>
            </div>

            <!-- 自定义内容区域 -->
            <div class="panel panel-default">
                <div class="panel-heading">新增学生</div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="name"  class="col-sm-2 control-label">姓名</label>

                            <div class="col-sm-5">
                                <input type="text" name='name' class="form-control" id="name" placeholder="请输入学生姓名">
                            </div>
                            <div class="col-sm-5">
                                <p class="form-control-static text-danger">姓名不能为空</p>
                            </div>
                        </div>
                     <!--    <div class="form-group">
                            <label for="age" class="col-sm-2 control-label">密码</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="age" placeholder="请输入学生年龄">
                            </div>
                            <div class="col-sm-5">
                                <p class="form-control-static text-danger">密码不能为空</p>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label for="age" class="col-sm-2 control-label">年龄</label>

                            <div class="col-sm-5">
                                <input type="text" name='age' class="form-control" id="age" placeholder="请输入学生年龄">
                            </div>
                            <div class="col-sm-5">
                                <p class="form-control-static text-danger">年龄只能为整数</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">性别</label>

                            <div class="col-sm-5">
                                
                                <label class="radio-inline">
                                    <input type="radio" name="sex" value="1" checked> 男
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" value="0"> 女
                                </label>
                            </div>
                            <div class="col-sm-5">
                                <p class="form-control-static text-danger">请选择性别</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
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