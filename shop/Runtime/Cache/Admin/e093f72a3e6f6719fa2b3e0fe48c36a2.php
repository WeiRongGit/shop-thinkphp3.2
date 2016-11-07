<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="/730/shop/Public/Admin/CSS//mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="/730/shop/index.php/Admin/Goods/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="/730/shop/index.php/Admin/Goods/edit" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="f_goods_name" value="<?php echo ($data["goods_name"]); ?>" /></td>
                </tr>
                <tr>
                    <td>重量</td>
                    <td>
                        <input type="text" name="f_goods_weight" value="<?php echo ($data["goods_weight"]); ?>">
                    </td>
                </tr>
                <tr>
                    <td>数量</td>
                    <td>
                         <input type="text" name="f_goods_number" value="<?php echo ($data["goods_number"]); ?>">
                    </td>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="f_goods_price" value="<?php echo ($data["goods_price"]); ?>" /></td>
                </tr>
                <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="f_goods_image" value="<?php echo ($data["goods_big_img"]); ?>" /></td>
                </tr>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="f_goods_introduce"><?php echo ($data["goods_introduce"]); ?></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                     	<input type="hidden" name="goods_id" value="<?php echo ($data["goods_id"]); ?>" />
                        <input type="submit" value="修改">
                    </td>
                </tr>  
                
            </table>
            </form>
        </div>
    </body>
</html>