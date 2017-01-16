<?php if (!defined('THINK_PATH')) exit();?>
<ul>      
                  <?php if(is_array($TopCate)): foreach($TopCate as $key=>$Topcategory): ?><li class='Category' onmousemove="test(this)">
                        <div class="fj">
                            <span class="n_img"><span></span><img src="/PigpishCat/Public/Home/images/nav1.png" /></span>
                            <span class="fl"><?php echo ($Topcategory["goy_name"]); ?></span>

                        </div>

                        <div class="zj">
                            <div class="zj_l">
                                <?php if(is_array($SecCate[$Topcategory["goy_id"]])): foreach($SecCate[$Topcategory["goy_id"]] as $key=>$secondCate): ?><div class="zj_l_c">
                                   <h2><?php echo ($secondCate["goy_name"]); ?></h2>
                                   <?php if(is_array($ThreeCate[$secondCate["goy_id"]])): foreach($ThreeCate[$secondCate["goy_id"]] as $key=>$ThreeCategory): ?><a href="<?php echo U('Home/Classificationgoods/index',array('goy_id'=>$ThreeCategory['goy_id']));?>"><?php echo ($ThreeCategory['goy_name']); ?></a>|<?php endforeach; endif; ?>
                                </div><?php endforeach; endif; ?>
                                
                            </div>
                            <div class="zj_r">
                                <a href="#"><img src="/PigpishCat/Public/Home/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="#"><img src="/PigpishCat/Public/Home/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li><?php endforeach; endif; ?>
                </ul>