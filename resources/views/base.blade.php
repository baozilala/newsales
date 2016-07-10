<!DOCTYPE html>
<html>
<head>
    <title>COMS - Customer Order Manage System</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <i class="fa fa-users"></i> 客户订单管理系统
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">录入<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/add/order">录入订单</a></li>
                        <li><a href="/add/ship">登记邮寄</a></li>
                        <li><a href="/add/customer">添加顾客</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">查询<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/order">查询订单</a></li>
                        <li><a href="/ship">邮寄跟踪</a></li>
                        <li><a href="/customer">顾客查询</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">财务<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="sales_status.php">消费统计</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('header')
<div class="container">
    <div class="content">
        @yield('content')
    </div>
    @yield('footer')
    <footer>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="text-center">Copyright 浩展工作室</h5>
                </div>
            </div>
        </div>
    </footer>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js" charset="utf-8"></script>
    <script src="js/script.js" charset="utf-8"></script>
</body>
</html>
