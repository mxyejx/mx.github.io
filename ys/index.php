<?php
$jk=isset($_GET['jk'])?$_GET['jk']:'http://www.ou522.cn/t2/1.php?url=';
$url=isset($_GET['url'])?$_GET['url']:'http://www.iqiyi.com/v_19rramdo0g.html?fc=87bbded392d221f5';
?>
<?php
require './123/common.php';
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php echo $conf['title']?></title>
<meta name="keywords" content="<?php echo $conf['keywords']?>">
<meta name="description" content="<?php echo $conf['description']?>">
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="/tu/favicon.ico" />
    <link rel="bookmark" href="/tu/favicon.ico" />
    <STYLE type="text/css">body{cursor:url('/tu/S1.cur'), auto;} a{cursor:url('/tu/S2.cur'), auto;}</STYLE>
    <script type="text/javascript">var OriginTitile = document.title;
      var titleTime;
      document.addEventListener('visibilitychange',
      function() {
        if (document.hidden) {
          document.title = '(つェ⊂)我藏好了哦~ ' + OriginTitile;
          clearTimeout(titleTime);
        } else {
          document.title = '(*´∇｀*) 被你发现啦~ ' + OriginTitile;
          titleTime = setTimeout(function() {
            document.title = OriginTitile;
          },
          2000);
        }
      });</script>
	  <?php echo $conf['tj']?>
    <!--[if lt IE 9]>
      <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
      <script src="http://libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--></head>
  <body>
<?php echo $conf['cd']?>
    <br />
    <div class="container" style="padding-top:50px;">
      <div class="col-md-14 column">
        <div class="panel panel-default">
          <div class="panel-body">
		  <?php echo $conf['gg']?>
            <br /></div></div>
      </div>
      <div class="col-md-14 column">
        <div class="panel panel-default">
          <div class="panel-body">
			<iframe width="100%" height="450px" allowTransparency="true" frameborder="0" scrolling="no" src="<?=$jk?>&url=<?=$url?>"></iframe>
          </div>
        </div>
      </div>
      <div class="col-md-14 column">
        <form method="get">
<div class="input-group" style="width: 100%;">
   <span class="input-group-addon input-lg" style="width: 80px;">切换线路</span>
            	<select class="form-control input-lg" name="jk">
                    	<?php echo $conf['jk']?>
                	</select>
</div><br>
          <div class="input-group" style="width: 100%;">
            <span class="input-group-addon input-lg" style="width: 80px;">播放地址</span>
            <input class="form-control input-lg" type="text" name="url" placeholder="输入播放地址"></div>
          <br>
          <div>
            <button type="submit" class="btn btn-default btn-lg btn-block">立即播放</button></div>
        </form>
      </div>
    </div>
    <br>
    <br>
    <div class="copyright">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-12">
            <br>
			<a href="http://www.le.com/" rel="nofollow" target="_blank"><img src="http://n3.1080kan.com/pic/letvlogo.png"></a>
<a href="http://v.qq.com/" rel="nofollow" target="_blank"><img src="http://n3.1080kan.com/pic/qqlogo.png"></a>
<a href="http://www.youku.com/" rel="nofollow" target="_blank"><img src="http://n3.1080kan.com/pic/youkulogo.png"></a>
<a href="http://www.mgtv.com/" rel="nofollow" target="_blank"><img src="http://n3.1080kan.com/pic/hunantvlogo.png"></a>
<a href="http://tv.sohu.com/" rel="nofollow" target="_blank"><img src="http://n3.1080kan.com/pic/sohulogo.png"></a>
<a href="http://www.iqiyi.com/" rel="nofollow" target="_blank"><img src="http://n3.1080kan.com/pic/iqiyilogo.png"></a> <br><br>
            <span><b>声明：
本站仅提供在线播放服务，不参与录制、上传，且不储存任何资源，仅提供资源引用和分享。</b></span>
<span><b><font color="red">技术支持：<a href="http://www.1080kan.com/help" target="_blank">1080kan</a></font></b></span>
            
			</div></div>
      </div>
    </div>
  </body>
</html>