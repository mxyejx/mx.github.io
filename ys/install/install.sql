DROP TABLE IF EXISTS `vip_config`;</explode>
CREATE TABLE `vip_config` (
  `k` varchar(255) NOT NULL,
  `v` text,
  PRIMARY KEY (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

INSERT INTO `vip_config` VALUES ('admin_user', 'admin');</explode>
INSERT INTO `vip_config` VALUES ('admin_pwd', 'www.1080kan.com');</explode>
INSERT INTO `vip_config` VALUES ('title', 'VIP电影在线播放');</explode>
INSERT INTO `vip_config` VALUES ('keywords', 'VIP,电影,在线,播放');</explode>
INSERT INTO `vip_config` VALUES ('description', 'VIP电影在线播放');</explode>
INSERT INTO `vip_config` VALUES ('jk', '<option value ="http://jx.71ki.com/index.php?url=">通用vip接口①</option>');</explode>
INSERT INTO `vip_config` VALUES ('gg', '网站底部必须保留链接,1080kan链接');</explode>
INSERT INTO `vip_config` VALUES ('cd', '<nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
       <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">VIP电影在线播放</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        	<ul class="nav navbar-nav navbar-nav">
				<!--<li><a href="/"><span class="glyphicon glyphicon-list"></span> 菜单</a></li>-->
        	</ul>
			<ul class="nav navbar-nav navbar-right">
			    <li><a href="about.php"><span class="glyphicon glyphicon-envelope"></span> 留言</a></li>
      	</div>
    </div>
</nav>');</explode>
INSERT INTO `vip_config` VALUES ('tj', '此统计代码是放在head标签里的');</explode>