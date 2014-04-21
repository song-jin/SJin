<!doctype html>
<html>
<head>
    <!--注意梅水徽音编码-->
    <meta charset='gbk'>
    <title>the spider of jyu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>
<style type="text/css">
</style>
<body>
<?php
    //加载遍历dom的PHP函数
    require_once("simple_html_dom.php");
    $lofter;
    $html;
    $url;
    function search_content($url)
    {
        //通过crul创建一个会话
        $session = curl_init();
        //获取站点内容
        curl_setopt($session, CURLOPT_URL, $url);
        //将头文件信息作为数据流输出 （没有设备检测可能没用）
        curl_setopt($session, CURLOPT_HEADER, false);
        //让$session不直接输出
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        //打印内容
        global $lofter;
        $lofter = curl_exec($session);
        //关闭
        curl_close($session); 
    }
    function echo_content() {
        global $html;
        global $url;
        global $lofter;
            $html = str_get_html($lofter);
            $url = $html->find(".xst");
        ?>
        <div data-role='content'>
            <ul data-role='listview' data-inset='true'>
            <?php for ($i=0; $i < count($url); $i++) :?>
                <li>
                    <a href="<?php echo 'http://www.jyubbs.com/bbs/'. $url[$i]->href ?>">
                        <?php echo $url[$i]->innertext ?>
                    </a>
                </li>
            <?php endfor; ?>
            </ul>
        </div>
        <?php 
    }
?>
    <!--出售页面开始-->
    <div data-role='page' id='sale'>
        <?php  
            search_content('http://www.jyubbs.com/bbs/forum.php?mod=forumdisplay&fid=38&typeid=8&typeid=8&filter=typeid&page=1');
            echo_content();
        ?>
        <div data-role='footer' data-position='fixed'>
            <div data-role='navbar'>
                <ul>
                    <li><a href="#sale" class='ui-btn-active ui-state-persist'>sale</a></li>
                    <li><a href="#job">job</a></li>
                    <li><a href="#another">another</a></li>
                </ul>
            </div>
        </div>
    </div>



    <!--招聘页面开始-->
    <div data-role='page' id='job'>
        <?php  
            search_content('http://www.jyubbs.com/bbs/forum.php?mod=forumdisplay&fid=38&typeid=11&typeid=11&filter=typeid&page=1');
            echo_content();
        ?>
        <div data-role='footer' data-position='fixed'>
            <div data-role='navbar'>
                <ul>
                    <li><a href="#sale">sale</a></li>
                    <li><a href="#job" class='ui-btn-active ui-state-persist'>job</a></li>
                    <li><a href="#another">another</a></li>
                </ul>
            </div>
        </div>
    </div>



    <!--其他页面开始-->
    <div data-role='page' id='another'>
        <?php  
            search_content('http://www.jyubbs.com/bbs/forum.php?mod=forumdisplay&fid=38&typeid=12&typeid=12&filter=typeid&page=1');
            echo_content();
        ?>
        <div data-role='footer' data-position='fixed'>
            <div data-role='navbar'>
                <ul>
                    <li><a href="#sale">sale</a></li>
                    <li><a href="#job">job</a></li>
                    <li><a href="#another" class='ui-btn-active ui-state-persist'>another</a></li>
                </ul>
            </div>
        </div>
    </div>



</body>
</html>
