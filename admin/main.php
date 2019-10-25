<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>导航</title>
    <!--    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
    <script src="../static/js/jquery-3.4.1.min.js"></script>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
    }

    aside {
        width: 200px;
        /*background-color: red;*/
        position: absolute;
        top: 50px;
        bottom: 0;
        border-right: 1px solid #ddd;
    }

    main {
        position: absolute;
        top: 50px;
        left: 200px;
        right: 0;
        bottom: 0;
        padding: 15px;
    }

    main > iframe {
        width: 100%;
        height: 100%;
    }

    .panel {
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
    }

    aside > .panel {
        margin-bottom: 0;
        border-radius: 0;
    }

    aside .list-group-item {
        padding-left: 30px;
    }

    .list-group-item {
        border: 0;
    }

    .glyphicon {
        float: right;
        transition: all ease 0.3s;
    }

    .glyphicon.active {
        transform: rotateZ(90deg);
    }

    /*active使用交叉选择器*/


</style>
<body>
<!--导航条开始-->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">暖心花坊</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!--导航条结束-->

<!--右边部分的开始-->
<aside>
    <div class="panel">
        <div class="panel-heading"><i class="glyphicon glyphicon-menu-down"></i>导航管理</div>

        <ul class="list-group">
            <li class="list-group-item">
                <a href="navInsert.php" target="right">添加导航</a>
            </li>
            <li class="list-group-item">
                <a href="navSelect.php" target="right">查看导航</a>
            </li>
        </ul>
    </div>
    <div class="panel">
        <div class="panel-heading"><i class="glyphicon glyphicon-menu-down"></i>
            商品分类
        </div>

        <ul class="list-group">
            <li class="list-group-item">
                <a href="creatSelect.php" target="right">查看商品</a>
            </li>
        </ul>
    </div>
    <div class="panel">
        <div class="panel-heading"><i class="glyphicon glyphicon-menu-down"></i>
            商品管理
        </div>

        <ul class="list-group">
            <li class="list-group-item">
                <a href="goodsInsert.php" target="right">添加商品</a>
            </li>
            <li class="list-group-item">
                <a href="goodsSelect.php" target="right">查看商品</a>
            </li>
        </ul>
    </div>
    <div class="panel">
        <div class="panel-heading"><i class="glyphicon glyphicon-menu-down"></i>
            新闻资讯
        </div>

        <ul class="list-group">
            <li class="list-group-item">
                <a href="newsInsert.php" target="right">添加新闻</a>
            </li>
            <li class="list-group-item">
                <a href="newsSelect.php" target="right">查看新闻</a>
            </li>
        </ul>
    </div>
    <div class="panel">
        <div class="panel-heading"><i class="glyphicon glyphicon-menu-down"></i>
            在线预约
        </div>

        <ul class="list-group">
            <li class="list-group-item">
                <a href="orderSelect.php" target="right" >查看预约</a>
            </li>
        </ul>
    </div>

</aside>
<!--右边部分的结束-->

<!--左边部分的开始-->
<main>
    <iframe src="navSelect" frameborder="0" name="right"></iframe>
</main>
<!--左边部分的结束-->
</body>
</html>

<script>
    $('.panel-heading').on('click', function () {
        //点击导航使得收起，或者放出来
        $(this).next('.list-group').slideToggle();

        //导航的小按钮，实现一个旋转的效果
        $(this).children('i').toggleClass('active');


    })
</script>