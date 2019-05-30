<?php
/**
 * Created by PhpStorm.
 * User: Junxiang
 * Date: 2015/1/28
 * Time: 16:44
 */
?>
<?php include 'include/header.html.php' ?>
    <div id="container">
        <?php include 'include/nav.html.php' ?>
        <div id="content">
            <h2 class="alignCenter"><?php echo $theSubtitle['name']; ?></h2>
            <p><span>一、概述</span></p>
            <p>一个完整的C2C电子商务系统包括以下部分：</p>
            <ul>
                <li>商品交易</li>
                <p>实现网上商品交易相关业务逻辑。包括用户注册、登陆、个人信息维护，网站主要界面，店铺申请、商品管理、商品搜索、购买商品（交易）以及投诉功能。</p>
                <li>在线支付</li>
                <p>实现在线支付相关逻辑。包括支付界面、交易管理、用户资金账户注册及管理、支付安全认证。</p>
                <li>后台管理</li>
                <p>实现电子商务系的后台管理逻辑。包括管理员界面、实现普通用户，管理员用户和广告管理员用户信息管理、店铺审核、商品审核及仲裁功能。</p>
                <li>广告管理</li>
                <p>实现广告营销相关逻辑。广告管理， 包括广告定义、广告维护及广告跟踪； 活动管理，包括活动创建、修改及查询；广告发布等。</p>
            </ul>
        </div>
    </div>
<?php include 'include/footer.html.php' ?>