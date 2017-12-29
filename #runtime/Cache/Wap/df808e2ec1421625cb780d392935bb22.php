<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="telephone=no" name="format-detection" />
    <title><?php if( isset($SEO['title']) && !empty($SEO['title']) ): echo ($SEO['title']); endif; echo ($SEO['site_title']); ?></title>
    <meta name="description" content="<?php echo ($SEO['description']); ?>" />
    <meta name="keywords" content="<?php echo ($SEO['keyword']); ?>" />
    <link rel="stylesheet" type="text/css" href="/wap/css/subpage.css" />
    <script type="text/javascript" src="/wap/js/jquery.js"></script>
    <style>
        .head {
            background: #10b666
        }
        .foot {
            background: #10b666
        }
        .nav {
            background: #10b666
        }
        .nav_color {
            background: #10b666
        }
    </style>
    <link rel="stylesheet" type="text/css" href="/wap/css/master.css" />
    <link rel="stylesheet" type="text/css" href="/wap/css/swiper.css" />
    <script type="text/javascript" src="/wap/js/nav.js"></script>
    <script type="text/javascript" src="/wap/js/cart_icon.js"></script>
    <script type="text/javascript" src="/wap/js/swiper.js"></script>
    <script type="text/javascript" src="/wap/js/lihe.js"></script>
    <script type="text/javascript" src="/wap/js/form.js"></script>
</head>
<body>
<ul class="nav">
    <li><a href="index.php" title="网站首页"><span class="iconfont">&#xe607;</span>网站首页</a></li>
    <?php $content_tag = \Think\Think::instance("\Content\TagLib\Content"); if(method_exists($content_tag, "category")){ $data = $content_tag->category(array('action'=>'category','catid'=>'0','order'=>'listorder','num'=>'0','page'=>'0','pagefun'=>'page','return'=>'data',)); } if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo caturl($vo['catid']);?>"" title="<?php echo ($vo["catname"]); ?>"><span class="iconfont">&#xe607;</span><?php echo ($vo["catname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<?php if($catid == 0): ?><div class="allpage">
    <div class="black-fixed iconfont">&#xe60f;</div>
    <div class="header">
        <div class="head"> <a href="/index.php?g=wap" title="我的网站" class="logo"> <img src="<?php echo ($Config["sitewaplogo"]); ?>" alt="网站首页"/> </a>
            <div class="nav-btn commonfont">&#xe60b;</div>
            <div class="search_hl search_l iconfont">&#xe600;</div>
            <div class="search" style="display: block;">
                <form class="am-topbar-form am-topbar-left am-form-inline am-topbar-right" role="search" action="<?php echo U('Search/Index/index');?>" method="post" onsubmit="return p()">
                    <input type="hidden" name="g" value="Search" />
                    <a class="xbtn iconfont" href="javascript:;">&#xe60f;</a>
                    <input type="text" name="q" id="q" placeholder="请输入搜索关键词" class="search-input">
                    <input type="submit" class="search-btn iconfont" value="&#xe600;">
                </form>
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="allpage">
        <div class="black-fixed commonfont">&#xe607;</div>
        <div class="header">
            <div class="head"> <a href="/index.php?g=wap" title="网站首页" class="home-btn commonfont">&#xe608;</a>
                <p class="top-title"><?php echo (str_cut($title,5)); ?></p>
                <div class="class-btn"><span class="commonfont">&#xe60a;</span></div>
                <div class="nav-btn commonfont">&#xe60b;</div>
            </div>
            <div class="type">
                <h1>搜索：</h1>
                <div class="common-pro-search">
                    <form class="am-topbar-form am-topbar-left am-form-inline am-topbar-right" role="search"action="<?php echo U('Search/Index/index');?>" method="post" onsubmit="return p()">
                        <input type="hidden" name="g" value="Search" />
                        <input type="text" class="common-text" name="q" id="q"  placeholder="请输入搜索关键词"/>
                        <input type="submit" class="common-submit commonfont" value="&#xe602;"/>
                    </form>
                </div>
            </div>
        </div><?php endif; ?>
    <script>
        function p(){
            var aa = document.getElementById("q").value;

            if (!aa)
            {
                alert("请输入您要查询的内容")
                return false;
            }
        }
    </script>
    <div class="content">
        <div class="about">
            <h1><?php echo ($title); ?></h1>
            <center>
            </center>
            <span class="picContent">
                 <?php  $cache = 0; $cacheID = to_guid_string(array('sql'=>'select * from lvyecms_page where catid=76','page'=>'0','return'=>'data','pagefun'=>'page','cache'=>'0','num'=>'20','dbsource'=>'',)); if(0 && $_return = S( $cacheID ) ){ $data=$_return; }else{ $_sql = "select * from lvyecms_page where catid=76"; $get_db = M(); $data=$get_db->query($_sql." LIMIT 20 "); if(0){ S( $cacheID ,$data,$cache); }; } if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["content"]); endforeach; endif; else: echo "" ;endif; ?>
            </span>
        </div>
    </div>
<div class="footer">
    <div class="foot foot-relative" id="foot">
        <div class="foot-relative"> <a href="" title="地图"> <span class="commonfont">&#xe605;</span>
                <h3>地图</h3>
            </a><a href="tel:<?php echo cache('Config.phone');?>" title="电话"> <span class="commonfont">&#xe604;</span>
                <h3>电话</h3>
            </a><a href="sms:<?php echo cache('Config.phone');?>" title="短信"> <span class="commonfont">&#xe601;</span>
                <h3>短信</h3>
            </a><a href="" title="分享"> <span class="commonfont">&#xe600;</span>
                <h3>分享</h3>
            </a> </div>
    </div>
</div>
</div>
</div>
</body>
</html>
<script tylpe="text/javascript">

    $('.picContent').find('img').css({'width': '100%', 'height': 'auto', 'border': 0});

</script>