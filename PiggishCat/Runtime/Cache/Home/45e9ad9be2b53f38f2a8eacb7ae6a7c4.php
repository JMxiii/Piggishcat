<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="/PigpishCat/Public/Home/css/style.css" />
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/jquery-1.11.1.min_044d0927.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/jquery.bxslider_e88acd1b.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/menu.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/select.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/lrscroll.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/iban.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/fban.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/f_ban.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/mban.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/bban.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/hban.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/tban.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/Home/js/lrscroll_1.js"></script>
    <link rel="icon" type="image/png" href="/PigpishCat/Public/home/images/haixiu.png"> 

        
  
<title>馋猫</title>
</head>
<body>  
  
    <!--Begin Header Begin-->
    
<div class="soubg">
    <div class="sou">
        
        <span class="fr">
            <span class="fl">
            <!-- 判断用户是否登录 -->
            <?php if($_SESSION['homeuser']== ''): ?>你好，请<a href="<?php echo U('Home/Login/index');?>">登录</a>&nbsp; <a href="<?php echo U('Home/Regist/index');?>" style="color:#ff4e00;">免费注册</a>&nbsp;|&nbsp;
            <?php else: ?>
                     <!-- <div style="float: left;"> -->
                      欢迎回来 ， <a href="<?php echo U('Home/Clientuser/index');?>" style="color:#ff4e00"><?php echo ($_SESSION['homeuser']['clt_user']); ?></a>&nbsp;|&nbsp;<a href="<?php echo U('Home/Clientuser/outLogin');?>">退出</a>&nbsp;|&nbsp;
                      <!-- </div> --><?php endif; ?>
             <?php if($_SESSION['homeuser']== ''): ?><a href="<?php echo U('Home/Login/index');?>">我的订单</a>&nbsp;|</span>
             <?php else: ?>
             <a href="<?php echo U('Home/Orderform/index');?>">我的订单</a>&nbsp;|</span><?php endif; ?>
            <span class="ss">
                <div class="ss_list">
                    <a >收藏夹</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="<?php echo U('Home/Enshrine/index');?>">收藏的商品</a></li>
                                <li><a href="#">我的收藏夹</a></li>
                            </ul>
                        </div>
                    </div>     
                </div>
                <div class="ss_list"> 
                    <a href="#">客户服务</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="#">客户服务</a></li>
                                <li><a href="#">客户服务</a></li>
                                <li><a href="#">客户服务</a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
                <div class="ss_list">
                    <a href="#">网站导航</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="#">网站导航</a></li>
                                <li><a href="#">网站导航</a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </span>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="/PigpishCat/Public/Home/images/s_tel.png" align="absmiddle" /></a></span>
        </span>
    </div>
</div>
<div class="top">
<style>
    .logo{
      width: 232px;
      height: 67px;
    }

</style>
    <div class="logo"><a href="<?php echo U('Home/Index/index');?>"><img src="/PigpishCat/Public/Home/images/logo3.jpg" /></a></div>
    <div class="search">
      <form action="<?php echo U('Home/Search/Searchgoods');?>" method='get'/>
            <input type="text" placeholder="请键入你要搜索的商品名" name='gos_name' class="s_ipt"  required/>
            <input type="submit" value="搜索" class="s_btn " style='height:36px'/>
        </form>                                      
        <span class="fl"><a href="#">咖啡</a><a href="#">iphone 6S</a><a href="#">新鲜美食</a><a href="#">蛋糕</a><a href="#">日用品</a><a href="#">连衣裙</a></span>
    </div>
    <div class="i_car">
    
        <!-- 判断用户是否登录 -->
            <?php if($_SESSION['homeuser']== ''): ?><div class="car_t">&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo U('Home/Login/index');?>">购物车</a></div>
                      <!-- <div class="car_bg"> -->
                          <!--Begin 购物车未登录 Begin-->
                          <!-- <div class="un_login">请先登录！<a href="<?php echo U('Home/Login/index');?>" style="color:#ff4e00;">马上登录</a> </div> -->
                          <!--End 购物车未登录 End-->
                      <!-- </div> -->
            <?php else: ?>
                <div class="car_t">&nbsp; <a href="<?php echo U('Home/Shoppingcart/shopcart');?>">查看购物车</a> </div>  
                
                
                  
                  <!-- <div class="car_bg">
                      <?php if(is_array($TopCart)): foreach($TopCart as $key=>$val): ?><ul class="cars">
                          <li>
                              <div class="img"><a href="#"><img src="/PigpishCat/Public/image/goods/small_<?php echo ($val['gos_path']); ?>" width="58" height="58" /></a></div>
                              <div class="name"><a href="#"><?php echo ($val['gos_name']); ?></a></div>
                              <div class="price"><font color="#ff4e00">￥<?php echo ($val['gos_price']); ?></font> X<?php echo ($val['sht_num']); ?></div>
                          </li>
                          
                      </ul><?php endforeach; endif; ?> -->
                      <!-- <div class="price_sum">共计&nbsp; <font color="#ff4e00">￥</font><span>1058</span></div> -->
                      <!-- <div class="price_a"><a href="<?php echo U('Home/Shoppingcart/shopcart');?>">去购物车结算</a></div> -->
                      <!--End 购物车已登录 End-->
                  </div><?php endif; ?>

    </div>
</div>

    <!--End Header End-->  
<!--Begin Menu Begin-->

<div class="menu_bg">
    <div class="menu">
        <!--Begin 商品分类详情 Begin-->    
        <div class="nav">
            <div class="nav_t">全部商品分类</div>
            <div class="leftNav">
                   <?php W('Category/menu');?>
            </div>
        </div>  
        <!--End 商品分类详情 End-->                                                     
        <ul class="menu_r">                                                                                                                                               
            <li><a href="<?php echo U('Home/Index/Index');?>">首页</a></li>
    
            <?php if(is_array($TopCate)): foreach($TopCate as $key=>$Topcategory): ?><li><a href="<?php echo U('Home/Category/Category',array('goy_id'=>$Topcategory[goy_id]));?>"><?php echo ($Topcategory["goy_name"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
        <div class="m_ad">元旦送好礼！</div>
    </div>
</div>
<!--End Menu End--> 
<div class="i_bg bg_color">
    <div class="i_ban_bg">
        <!--Begin Banner Begin-->
        <div class="banner">        
            <div class="top_slide_wrap">
                <ul class="slide_box bxslider">
            <?php if(is_array($JsAdvpic)): foreach($JsAdvpic as $key=>$home_js): ?><li><img src="/PigpishCat/Public/image/Advpicture/homeAdv_<?php echo ($home_js["picture"]); ?>" width="740" height="401" /></li><?php endforeach; endif; ?>

                </ul>   

                <div class="op_btns clearfix">
                    <a href="#" class="op_btn op_prev"><span></span></a>
                    <a href="#" class="op_btn op_next"><span></span></a>
                </div>        
            </div>
        </div>
        <script type="text/javascript">
        //var jq = jQuery.noConflict();
        (function(){
            $(".bxslider").bxSlider({
                auto:true,
                prevSelector:jq(".top_slide_wrap .op_prev")[0],nextSelector:jq(".top_slide_wrap .op_next")[0]
            });
        })();
        </script>
        <!--End Banner End-->
        <div class="inews">
            <div class="news_t">
                <span class="fr"><a href="#"></a></span>公告资讯
            </div>
            <ul>
                <?php if(is_array($bunList)): foreach($bunList as $key=>$val): ?><li><span>[ 公告 ]</span><a href="<?php echo U('Home/Bulletin/index',array('bun_id'=>$val['bun_id']));?>"><?php echo ($val['bun_title']); ?></a></li><?php endforeach; endif; ?>
            </ul>
            <div class="charge_t">
                话费充值<div class="ch_t_icon"></div>
            </div>
            <form>
            <table border="0" style="width:205px; margin-top:10px;" cellspacing="0" cellpadding="0">
              <tr height="35">
                <td width="33">号码</td>
                <td><input type="text" value="" class="c_ipt" /></td>
              </tr>
              <tr height="35">
                <td>面值</td>
                <td>
                    <select class="jj" name="city">
                      <option value="0" selected="selected">100元</option>
                      <option value="1">50元</option>
                      <option value="2">30元</option>
                      <option value="3">20元</option>
                      <option value="4">10元</option>
                    </select>
                    <span style="color:#ff4e00; font-size:14px;">￥99.5</span>
                </td>
              </tr>
              <tr height="35">
                <td colspan="2"><input type="submit" value="立即充值" class="c_btn" /></td>
              </tr>
            </table>
            </form>
        </div>
    </div>
    <!--Begin 热门商品 Begin-->
    <div class="content mar_10">
        <div class="h_l_img">
            <div class="img"><img src="/PigpishCat/Public/Home/images/l_img.jpg" width="188" height="188" /></div>
            <div class="pri_bg">
                <span class="price fl">￥53.00</span>
                <span class="fr">16R</span>
            </div>
        </div>
        <div class="hot_pro">           
            <div id="featureContainer">
                <div id="feature">
                    <div id="block">
                        <div id="botton-scroll">
                            <ul class="featureUL">
                                 <?php if(is_array($bottomPic)): foreach($bottomPic as $key=>$bottomPicture): ?><li class="featureBox">
                                    <div class="box">
                                        <!-- <div class="h_icon"><img src="/PigpishCat/Public/image/goods/<?php echo ($bottomPicture["goe_path"]); ?>"  height="50" /></div> -->
                                        <div class="imgbg">
                                            <a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$bottomPicture[gos_id]));?>"><img src="/PigpishCat/Public/image/goods/<?php echo ($bottomPicture["goe_path"]); ?>" width="160" height="136" /></a>
                                        </div>                                        
                                        <div class="name">
                                            <a href="#">
                                            <h2><?php echo ($bottomPicture["gos_name"]); ?></h2>
                                            <?php echo ($bottomPicture["gos_description"]); ?>
                                            </a>
                                        </div>
                                        <div class="price">
                                            <font>￥<span> <?php echo ($bottomPicture["gos_price"]); ?></span></font>
                                        </div>
                                    </div>
                                </li><?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <a class="h_prev" href="javascript:void();">Previous</a>
                    <a class="h_next" href="javascript:void();">Next</a>
                </div>
            </div>
        </div>
    </div>
    <!--Begin 限时特卖 Begin-->
    <div class="i_t mar_10">
        <span class="fl">限时特卖</span>
        <span class="i_mores fr"><a href="#">更多</a></span>
    </div>
    <div class="content">
        <div class="i_sell">
            <div id="imgPlay">
                <ul class="imgs" id="actor">
                <?php if(is_array($Billing)): foreach($Billing as $key=>$Spring): ?><li><a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$Spring[gos_id]));?>"><img src="/PigpishCat/Public/image/goods/details_<?php echo ($Spring['goe_path']); ?>" height="357" /></a></li><?php endforeach; endif; ?> 
                </ul>
                <div class="previ">上一张</div>
                <div class="nexti">下一张</div>
            </div>        
        </div>
        <div class="sell_right">
            <div class="sell_1">
                <div class="s_img"><a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$hotGoods[0][gos_id]));?>"><img src="/PigpishCat/Public/image/goods/details_<?php echo ($hotGoods[0][goe_path]); ?>" width="185" height="155" /></a></div>
                <div class="s_price">￥<span><?php echo ($hotGoods[0][gos_price]); ?></span></div>
                <div class="s_name">
                    <h2><a href="#"><?php echo ($hotGoods[0][gos_name]); ?></a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_2">
                <div class="s_img"><a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$hotGoods[1][gos_id]));?>"><img src="/PigpishCat/Public/image/goods/details_<?php echo ($hotGoods[1][goe_path]); ?>" width="185" height="155" /></a></div>
                <div class="s_price">￥<span><?php echo ($hotGoods[0][gos_price]); ?></span></div>
                <div class="s_name">
                    <h2><a href="#"><?php echo ($hotGoods[1][gos_name]); ?></a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_b1">
                <div class="sb_img"><a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$hotGoods[2][gos_id]));?>"><img src="/PigpishCat/Public/image/goods/details_<?php echo ($hotGoods[2][goe_path]); ?>"  height="356" /></a></div>
                <div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                    <h2><a href="#"><?php echo ($hotGoods[2][gos_name]); ?></a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_3">
                <div class="s_img"><a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$hotGoods[3][gos_id]));?>"><img src="/PigpishCat/Public/image/goods/details_<?php echo ($hotGoods[3][goe_path]); ?>" width="185" height="155" /></a></div>
                <div class="s_price">￥<span><?php echo ($hotGoods[3][gos_price]); ?></span></div>
                <div class="s_name">
                    <h2><a href="#"><?php echo ($hotGoods[3][gos_name]); ?></a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_4">
                <div class="s_img"><a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$hotGoods[4][gos_id]));?>"><img src="/PigpishCat/Public/image/goods/details_<?php echo ($hotGoods[4][goe_path]); ?>" width="185" height="155" /></a></div>
                <div class="s_price">￥<span><?php echo ($hotGoods[4][gos_price]); ?></span></div>
                <div class="s_name">
                    <h2><a href="#"><?php echo ($hotGoods[4][gos_name]); ?></a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_b2">
                <div class="sb_img"><a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$hotGoods[5][gos_id]));?>"><img src="/PigpishCat/Public/image/goods/details_<?php echo ($hotGoods[5][goe_path]); ?>" width="242" height="356" /></a></div>
                <div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                    <h2><a href="#">美食</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
        </div>
    </div>
    <!--End 限时特卖 End-->
    <div class="content mar_20">
        <img src="/PigpishCat/Public/image/Advertising/banner_<?php echo ($AdvPicture[0]['picture']); ?>" width="1200" height='120'/>
    </div>
    <!--Begin 进口 生鲜 Begin-->
    <div class="i_t mar_10">
        <span class="floor_num">1F</span>
        <span class="fl">进口 <b>·</b> 生鲜</span>                
        <span class="i_mores fr"><a href="#">进口咖啡</a>&nbsp; &nbsp; &nbsp; <a href="#">进口酒</a>&nbsp; &nbsp; &nbsp; <a href="#">进口母婴</a>&nbsp; &nbsp; &nbsp; <a href="#">新鲜蔬菜</a>&nbsp; &nbsp; &nbsp; <a href="#">新鲜水果</a></span>
    </div>
    <div class="content">
        <div class="fresh_left">
            <div class="fre_ban">
                <div id="imgPlay1">
                    <ul class="imgs" id="actor1">
                    <?php if(is_array($Billing_two)): foreach($Billing_two as $key=>$Two_js): ?><li><a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$Two_js[gos_id]));?>"><img src="/PigpishCat/Public/image/goods/details_<?php echo ($Two_js['goe_path']); ?>" height="357" /></a></li><?php endforeach; endif; ?> 
                    </ul>
                    <div class="prevf">上一张</div>
                    <div class="nextf">下一张</div> 
                </div>   
            </div>
            <div class="fresh_txt">
                <div class="fresh_txt_c">
                  <?php if(is_array($Billing_two)): foreach($Billing_two as $key=>$Two_js): ?><a href="#"><?php echo ($Two_js[gos_name]); ?></a><?php endforeach; endif; ?> 
                </div>
            </div>
        </div>
        <div class="fresh_mid">
        <!-- 遍历小商品 -->
            <ul>
            <?php if(is_array($goodsInfo)): foreach($goodsInfo as $key=>$goods): ?><li>
                    <div class="name"><a href="#"><?php echo ($goods["gos_name"]); ?></a></div>
                    <div class="price">
                        <font>￥<span><?php echo ($goods["gos_price"]); ?></span></font>
                    </div>
                    <div class="img">
                         <a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$goods[gos_id]));?>">
                            <img src="/PigpishCat/Public/image/goods/home_<?php echo ($goods["goe_path"]); ?>" width="185" />
                        </a>
                    </div>
                </li><?php endforeach; endif; ?>
            </ul>
        <!-- 遍历小商品结束 -->


        </div>
        <div class="fresh_right">
            <ul>
                <li><a href="#"><img src="/PigpishCat/Public/Home/images/fre_b1.jpg" width="260" height="220" /></a></li>
                <li><a href="#"><img src="/PigpishCat/Public/Home/images/fre_b2.jpg" width="260" height="220" /></a></li>
            </ul>
        </div>
    </div>    
    <!--End 进口 生鲜 End-->
    <!--Begin 食品饮料 Begin-->
    <div class="i_t mar_10">
        <span class="floor_num">2F</span>
        <span class="fl">食品饮料</span>                                
        <span class="i_mores fr"><a href="#">咖啡</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">休闲零食</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">饼干糕点</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">冲饮谷物</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">营养保健</a></span>
    </div>
    <div class="content">
        <div class="food_left">
            <div class="food_ban">
                <div id="imgPlay2">
                    <ul class="imgs" id="actor2">
                     <?php if(is_array($Billing_three)): foreach($Billing_three as $key=>$Three_js): ?><li><a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$Three_js[gos_id]));?>"><img src="/PigpishCat/Public/image/goods/details_<?php echo ($Three_js["goe_path"]); ?>" height="286" /></a></li><?php endforeach; endif; ?>
                    </ul>
                    <div class="prev_f">上一张</div>
                    <div class="next_f">下一张</div> 
                </div>   
            </div>
            <div class="fresh_txt">
                <div class="fresh_txt_c">
                 <?php if(is_array($Billing_three)): foreach($Billing_three as $key=>$Three_js): ?><a href="#"><?php echo ($Three_js["gos_name"]); ?></a><?php endforeach; endif; ?>
                </div>
            </div>
        </div>
        <div class="fresh_mid">
            <ul>
            
            <?php if(is_array($secGoods)): foreach($secGoods as $key=>$secondGoods): ?><li>
                    <div class="name"><a href="#"><?php echo ($secondGoods["gos_name"]); ?></a></div>
                    <div class="price">
                        <font>￥<span><?php echo ($secondGoods["gos_price"]); ?></span></font>
                    </div>
                    <div class="img">
                         <a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$secondGoods[gos_id]));?>">
                            <img src="/PigpishCat/Public/image/goods/home_<?php echo ($secondGoods["goe_path"]); ?>" width="185"/>
                        </a>
                    </div>
                </li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="fresh_right">
            <ul>
                <li><a href="#"><img src="/PigpishCat/Public/Home/images/food_b1.jpg" width="260" height="220" /></a></li>
                <li><a href="#"><img src="/PigpishCat/Public/Home/images/food_b2.jpg" width="260" height="220" /></a></li>
            </ul>
        </div>
    </div>    
    <!--End 食品饮料 End-->
    <!--Begin 个人美妆 Begin-->
    <div class="i_t mar_10">
        <span class="floor_num">3F</span>
        <span class="fl">个人美妆</span>                                
        <span class="i_mores fr"><a href="#">洗发护发</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">面膜</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">洗面奶</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">香水</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">沐浴露</a></span>                
    </div>
    <div class="content">
        <div class="make_left">
            <div class="make_ban">
                <div id="imgPlay3">
                    <ul class="imgs" id="actor3">
                        <li><a href="#"><img src="/PigpishCat/Public/Home/images/make_r.jpg" width="211" height="286" /></a></li>
                        <li><a href="#"><img src="/PigpishCat/Public/Home/images/make_r.jpg" width="211" height="286" /></a></li>
                        <li><a href="#"><img src="/PigpishCat/Public/Home/images/make_r.jpg" width="211" height="286" /></a></li>
                    </ul>
                    <div class="prev_m">上一张</div>
                    <div class="next_m">下一张</div> 
                </div>   
            </div>
            <div class="fresh_txt">
                <div class="fresh_txt_c">
                    <a href="#">洗发护发</a><a href="#">牙刷牙膏</a><a href="#">面膜</a><a href="#">补水面膜</a><a href="#">香水</a><a href="#">面霜</a><a href="#">洗面奶</a><a href="#">脱毛膏</a><a href="#">沐浴露</a>
                </div>
            </div>
        </div>
        <div class="fresh_mid">
            <ul>
                 <?php if(is_array($Thrgoods)): foreach($Thrgoods as $key=>$ThreeGoods): ?><li>
                    <div class="name"><a href="#"><?php echo ($ThreeGoods["gos_name"]); ?></a></div>
                    <div class="price">
                        <font>￥<span><?php echo ($ThreeGoods["gos_price"]); ?></span></font>
                    </div>
                    <div class="img">
                         <a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$ThreeGoods[gos_id]));?>">
                            <img src="/PigpishCat/Public/image/goods/home_<?php echo ($ThreeGoods["goe_path"]); ?>" width="185"/>
                        </a>
                    </div>
                </li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="fresh_right">
            <ul>
                <li><a href="#"><img src="/PigpishCat/Public/Home/images/make_b1.jpg" width="260" height="220" /></a></li>
                <li><a href="#"><img src="/PigpishCat/Public/Home/images/make_b2.jpg" width="260" height="220" /></a></li>
            </ul>
        </div>
    </div>    
    <!--End 个人美妆 End-->
    <div class="content mar_20">
        <img src="/PigpishCat/Public/image/Advertising/banner_<?php echo ($AdvPicture[1]['picture']); ?>" width='1200' height='120'/>
    </div>
    <!--Begin 母婴玩具 Begin-->
    <div class="i_t mar_10">
        <span class="floor_num">4F</span>
        <span class="fl">母婴玩具</span>                                
        <span class="i_mores fr"><a href="#">营养品</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">孕妈背带裤</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">儿童玩具</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">婴儿床</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">喂奶器</a></span>                               
    </div>
    <div class="content">
        <div class="baby_left">
            <div class="baby_ban">
                <div id="imgPlay4">
                    <ul class="imgs" id="actor4">
                        <li><a href="#"><img src="/PigpishCat/Public/Home/images/baby_r.jpg" width="211" height="286" /></a></li>
                        <li><a href="#"><img src="/PigpishCat/Public/Home/images/baby_r.jpg" width="211" height="286" /></a></li>
                        <li><a href="#"><img src="/PigpishCat/Public/Home/images/baby_r.jpg" width="211" height="286" /></a></li>
                    </ul>
                    <div class="prev_b">上一张</div>
                    <div class="next_b">下一张</div> 
                </div>   
            </div>
            <div class="fresh_txt">
                <div class="fresh_txt_c">
                    <a href="#">孕妈必备</a><a href="#">儿童玩具</a><a href="#">重装童鞋</a><a href="#">辅助食品</a><a href="#">奶粉</a><a href="#">鲜活禽蛋</a><a href="#">维生素</a><a href="#">重装童鞋</a><a href="#">辅助食品</a>
                </div>
            </div>
        </div>
        <div class="fresh_mid">
            <ul>
                    <?php if(is_array($Fourgoods)): foreach($Fourgoods as $key=>$FGoods): ?><li>
                    <div class="name"><a href="#"><?php echo ($FGoods["gos_name"]); ?></a></div>
                    <div class="price">
                        <font>￥<span><?php echo ($FGoods["gos_price"]); ?></span></font>
                    </div>
                    <div class="img">
                         <a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$FGoods[gos_id]));?>">
                            <img src="/PigpishCat/Public/image/goods/home_<?php echo ($FGoods["goe_path"]); ?>" width="185"/>
                        </a>
                    </div>
                </li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="fresh_right">
            <ul>
                <li><a href="#"><img src="/PigpishCat/Public/Home/images/baby_b1.jpg" width="260" height="220" /></a></li>
                <li><a href="#"><img src="/PigpishCat/Public/Home/images/baby_b2.jpg" width="260" height="220" /></a></li>
            </ul>
        </div>
    </div>    
    <!--End 母婴玩具 End-->
   
    <!--Begin 猜你喜欢 Begin-->
    <div class="i_t mar_10">
        <span class="fl">猜你喜欢</span>
    </div>    
    <div class="like">          
        <div id="featureContainer1">
            <div id="feature1">
                <div id="block1">
                    <div id="botton-scroll1">
                        <ul class="featureUL">
                        <?php if(is_array($bottomPic)): foreach($bottomPic as $key=>$bottomPicture): ?><li class="featureBox">
                                <div class="box">
                                <a href="<?php echo U('Home/Goodsdetails/index',array('gos_id'=>$bottomPicture[gos_id]));?>">
                                    <div class="imgbg">
                                        <img src="/PigpishCat/Public/image/goods/<?php echo ($bottomPicture["goe_path"]); ?>" width="160" height="136" />
                                    </div>                                        
                                    <div class="name">
                                      <b>
                                       <?php echo ($bottomPicture["gos_name"]); ?>
                                        </b>
                                        <h2>原装货</h2>
                                        <!-- <a href="#"> -->
                                      
                                    </div>
                                    </a>
                                    <div class="price">
                                        <font>￥<span><?php echo ($bottomPicture["gos_price"]); ?></span></font>
                                    </div>
                                </div>
                            </li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
                <a class="l_prev" href="javascript:void();">Previous</a>
                <a class="l_next" href="javascript:void();">Next</a>
            </div>
        </div>
    </div>
    </div>
     <!-- 友情连接 Start -->
    <div style='border:1px solid #ccc;width:1176px;height:130px;padding:10px;margin-top:20px'>
    <p align='center'>馋猫友情链接</p>

    <?php if(is_array($link)): foreach($link as $key=>$Flinks): ?><div style='border:1px solid #ccc; width:150px;height:80px;float:left;margin-left:22px;overflow:hidden' >
    <a href="<?php echo ($Flinks['bll_address']); ?>" target='_blank' title='点击跳到此门口网站'>
        <img src="/PigpishCat/Public/image/Blogroll/<?php echo ($Flinks["bll_pic"]); ?>" height="80px" width='150px'/>
        </a>
    </div><?php endforeach; endif; ?>
</div>
    <!-- 友情连接 End -->
    <!--End 猜你喜欢 End-->
    
    <!--Begin Footer Begin -->

    <!--Begin Footer Begin -->
    <div class="b_btm_bg bg_color">
        <div class="b_btm">
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/PigpishCat/Public/Home/images/b1.png" width="62" height="62" /></td>
                <td><h2>正品保障</h2>正品行货  放心购买</td>
              </tr>
            </table>
			<table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/PigpishCat/Public/Home/images/b2.png" width="62" height="62" /></td>
                <td><h2>满38包邮</h2>满38包邮 免运费</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/PigpishCat/Public/Home/images/b3.png" width="62" height="62" /></td>
                <td><h2>天天低价</h2>天天低价 畅选无忧</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/PigpishCat/Public/Home/images/b4.png" width="62" height="62" /></td>
                <td><h2>准时送达</h2>收货时间由你做主</td>
              </tr>
            </table>
        </div>
    </div>
    <div class="b_nav">
    	<dl>                                                                                            
        	<dt><a href="#">新手上路</a></dt>
            <dd><a href="#">售后流程</a></dd>
            <dd><a href="#">购物流程</a></dd>
            <dd><a href="#">订购方式</a></dd>
            <dd><a href="#">隐私声明</a></dd>
            <dd><a href="#">推荐分享说明</a></dd>
        </dl>
        <dl>
        	<dt><a href="#">配送与支付</a></dt>
            <dd><a href="#">货到付款区域</a></dd>
            <dd><a href="#">配送支付查询</a></dd>
            <dd><a href="#">支付方式说明</a></dd>
        </dl>
        <dl>
        	<dt><a href="#">会员中心</a></dt>
            <dd><a href="#">资金管理</a></dd>
            <dd><a href="#">我的收藏</a></dd>
            <dd><a href="#">我的订单</a></dd>
        </dl>
        <dl>
        	<dt><a href="#">服务保证</a></dt>
            <dd><a href="#">退换货原则</a></dd>
            <dd><a href="#">售后服务保证</a></dd>
            <dd><a href="#">产品质量保证</a></dd>
        </dl>
        <dl>
        	<dt><a href="#">联系我们</a></dt>
            <dd><a href="#">网站故障报告</a></dd>
            <dd><a href="#">购物咨询</a></dd>
            <dd><a href="#">投诉与建议</a></dd>
        </dl>
        <div class="b_tel_bg">
        	<a href="#" class="b_sh1">新浪微博</a>            
        	<a href="#" class="b_sh2">腾讯微博</a>
            <p>
            服务热线：<br />
            <span>400-123-4567</span>
            </p>
        </div>
        <div class="b_er">
            <div class="b_er_c"><img src="/PigpishCat/Public/Home/images/er.gif" width="118" height="118" /></div>
            <img src="/PigpishCat/Public/Home/images/ss.png" />
        </div>
    </div>    
    <div class="btmbg">
		<div class="btm">
        	备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
            <img src="/PigpishCat/Public/Home/images/b_1.gif" width="98" height="33" /><img src="/PigpishCat/Public/Home/images/b_2.gif" width="98" height="33" /><img src="/PigpishCat/Public/Home/images/b_3.gif" width="98" height="33" /><img src="/PigpishCat/Public/Home/images/b_4.gif" width="98" height="33" /><img src="/PigpishCat/Public/Home/images/b_5.gif" width="98" height="33" /><img src="/PigpishCat/Public/Home/images/b_6.gif" width="98" height="33" />
        </div>    	
    </div>
    <!--End Footer End -->    
</div>

</body>


<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>

    <!--End Footer End -->   

<script type="text/javascript">
$(function() {
    $('.Category').each(function(i){
          this.title = i;
 });
})
 function test(obj){ 
    $('.zj').css('top',$(obj).attr('title') * -40) + 'px';
 }
</script>