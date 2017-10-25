<?php
//echo $_GET['type'];
//header("Content-type: text/html; charset=utf-8");
require "pdo_config.php";
//创建数据源
$dsn = "{$dbType}:host={$host};dbname={$dbName}";
if($_GET['type'] && $_GET['type'] > 0){
    try{
        //新建pdo对象
        $pdo = new PDO($dsn,$user,$password);
        echo "<!DOCTYPE html><html lang='zh'>".
                "<head>
                    <meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
                    <title>客户信息管理</title>
                    <meta content='width=device-width, initial-scale=1.0' name='viewport' />
                    <style type='text/css'>
                        td input{
                            width:100%;
                        }
                        .input1,.textarea1{
                            background-color: #00a157;
                            line-height: 30px;
                            border: 1px #CCCCCC ;
                            outline:none;
                            cursor: pointer;
                        }
                        .textarea1 {
                            width: auto;
                            height: auto;
                        }
                        #update,#update2{
                            color: #CCCCCC;
                        } 
                        .name2{
                            text-align: center;
                            font-weight: 900;
                        }
                    </style>
                    <script type='text/javascript' src='./assets/jquery-1.8.3.min.js'></script>
                </head>";
        echo "<body style='background-color: #00a157'>";
        echo "<a href='select_all.php' style='color: #CCCCCC;text-decoration:none;font-size: 18px' >&nbsp;[ 返 回 ] </a>";
        echo "<a href='index.php' style='color: #CCCCCC;text-decoration:none;font-size: 18px' >&nbsp;[ 添加客户 ]</a>";
        //fetch获取全部客户数据
        $sql = "SELECT * FROM tb_user WHERE user_id='{$_GET["type"]}'";
        $result = $pdo->query($sql);
        $row = $result->fetch();
        echo "<div>";
        echo "<h2 align='center'>客户【".$row['name']."】的详情表</h2>";
        echo "<table border='1' cellpadding='1' cellspacing='1' width='80%' align='center' style='line-height: 30px'>";
        echo "<form action='./user_update.php' method='post' onsubmit='return check();'>";
        echo
            "<tr>
                <td class='name2' style='width: 30%'> 姓名</td>
                <td style='width: 70%'  colspan='3'>
                    <input type='hidden' class='input1' name='user_id' id='user_id' value='{$row['user_id']}'>
                    <input type='text' class='input1'  name='name' id='name' value='{$row['name']}'>
                </td>
            </tr>".
            "<tr>
                <td class='name2' > 手机</td>
                <td><input type='text' class='input1'  name='phone' id='phone'  value='{$row['phone']}'/></td>
                <td class='name2'  style='width: 30%'>支付宝</td>
                <td><input type='text' class='input1'  name='account' id='account'  value='{$row['account']}'></td>
            </tr>".
            "<tr>
                 <td class='name2' >创建时间</td>
                 <td colspan='3'><input type='text' class='input1'  name='create_time'  value='{$row['create_time']}' readonly></td>
            </tr>".
            "<tr>
                <td class='name2' >更新时间</td>
                <td colspan='3'><input type='text' class='input1'  name='update_time'  value='{$row['update_time']}' readonly></td>
            </tr>".
            "<tr>
                <td class='name2' >客户信息</td>
                <td colspan='3' style='text-align: left'>
                <textarea class='textarea1' name='user_message'>".$row['user_message']."</textarea>
                </td>
            </tr>".
            "<tr>
                <td colspan='4'>
                    <input type='submit' class='input1' id='update' value='[ 修 改 客 户 信 息 ]' />
                </td>
            </tr>";
        echo "</form>";
        echo "<form action='./add_deal.php' id='div_toggle' method='post' align='center' onsubmit='return check_deal()'>".
            "<tr>
                 <td class='name2' >货物名称</td>
                 <input type='hidden' class='input1' name='user_id' id='user_id2' value='{$row['user_id']}'>
                 <td colspan='3'><input type='text' class='input1' name='deal_name' id='deal_name' placeholder='交易货物名称'></td>
            </tr>".
            "<tr>
                <td class='name2'>金额</td>
                <td colspan='3'><input type='text' class='input1' name='money' id='money' placeholder='金额'></td>
            </tr>".
            "<tr>
                 <td class='name2' >快递</td>
                 <td colspan='3'><input type='text' class='input1' name='courier'id='courier' placeholder='快递公司'></td>
            </tr>".
            "<tr>
                <td class='name2' >运单号</td>
                <td colspan='3'><input type='text' class='input1' name='courier_number' id='courier_number' placeholder='运单号'></td>
            </tr>".
            "<tr>
                 <td class='name2' >地址</td>
                 <td colspan='3'><input type='text' class='input1' name='address' id='address' placeholder='邮寄地址'></td>
            </tr>".
            "<tr>
                <td class='name2' >交易描述</td>
                <td colspan='3'><textarea class='input1' name='deal_message' id='deal_message'></textarea></td>
            </tr>".
            "<tr>
                <td colspan='4'>
                    <input type='submit' class='input1' id='update2' value='[ 添 加 一 条 交 易 信 息 ]' />
                </td>
            </tr>";
        echo "</form>";
        echo "</table>";
        echo "</div>";

//      交易信息
        echo "<div>";
        echo "<h2 align='center'>【".$row['name']."】的交易详情</h2>";
        echo "<table border='1' cellpadding='0' cellspacing='3' width='80%' align='center'>";
        echo
            "<th width='10%'>货物名称</th>".
            "<th width='5%'>金额/元</th>".
            "<th width='5%'>快递</th>".
            "<th width='10%'>运输单号</th>".
            "<th width='25%' colspan='2'>创建/更新时间</th>".
            "<th width='20%'>地址</th>".
            "<th width='20%'>备注</th>".
            "<th width='5%'>操作</th>";

        //fetchAll获取全部退款数据
        $sql = "SELECT * FROM tb_deal WHERE user_id=".$row['user_id']." && status=0 ORDER BY create_time";
        $deal_result = $pdo->query($sql);
        $deal_count = 0;
        if($deal_result){
            $deal_count = $deal_result->rowCount();
        }
        if($deal_result && $deal_count > 1){
            $deal_result->setFetchMode(PDO::FETCH_ASSOC);
            $deal_rows = $deal_result->fetchAll();
            foreach ($deal_rows as $deal_row){
                echo "<tr align='center'>";
                echo "<td>".
                    $deal_row['deal_name']."</td><td>".$deal_row['money']."</td><td>".$deal_row['courier']."</td><td>"
                    .$deal_row['courier_number']."</td><td colspan='2'>".$deal_row['create_time']."</td><td>".$deal_row['address']."</td><td>"
                    .$deal_row['deal_message']."</td><td>"
                    ."<a href='./deal_return.php?type=".$deal_row["deal_id"]."' style='text-decoration:none;color: #CCCCCC'>[ 退 货]</a>"
                    ."</td>";
                echo "</tr>";
            }
        }else if($deal_result && $deal_count == 1){
            $deal_row = $deal_result->fetch();
            echo "<tr align='center'>";
            echo "<td>".
                $deal_row['deal_name']."</td><td>".$deal_row['money']."</td><td>".$deal_row['courier']."</td><td>"
                .$deal_row['courier_number']."</td><td colspan='2'>".$deal_row['create_time']."</td><td>".$deal_row['address']."</td><td>"
                .$deal_row['deal_message']."</td><td>"
                ."<a href='./deal_return.php?type=".$deal_row["user_id"]."' style='text-decoration:none;color: #CCCCCC'>[ 退 货]</a>"
                ."</td>";
            echo "</tr>";
        }
        echo "<tr><td colspan='9'><p align='center' style='color: #CCCCCC'>[ 共有".$deal_count."次交易成功]"."</p></td></tr>";

        //fetchAll获取全部退款数据
        $refund_sql = "SELECT * FROM tb_deal WHERE user_id=".$row['user_id']."&& status=1 ORDER BY create_time";
        $refund_result = $pdo->query($refund_sql);
        $refund_count = 0;
        if($refund_result){
            $refund_count = $refund_result->rowCount();
        }
        if($refund_result && $refund_count > 1){
            $refund_result->setFetchMode(PDO::FETCH_ASSOC);
            $refund_rows = $refund_result->fetchAll();
            foreach ($refund_rows as $refund_row){
                echo "<tr align='center'>";
                echo "<td>".
                    $refund_row['deal_name']."</td><td>".$refund_row['money']."</td><td>".$refund_row['courier']."</td><td>"
                    .$refund_row['courier_number']."</td><td>".$refund_row['create_time']."</td><td>".$refund_row['update_time']."</td><td>".$refund_row['address']."</td>"
                    ."<td>".$refund_row['deal_message']."</td><td>无</td>";
                echo "</tr>";
            }
        }else if($refund_result && $refund_count == 1){
            $refund_row = $refund_result->fetch();
            echo "<tr align='center'>";
            echo "<td>".
                    $refund_row['deal_name']."</td><td>".$refund_row['money']."</td><td>".$refund_row['courier']."</td><td>"
                    .$refund_row['courier_number']."</td><td>".$refund_row['create_time']."</td><td>".$refund_row['update_time']."</td><td>".$refund_row['address']."</td>"
                    ."<td>".$refund_row['deal_message']."</td><td>无</td>";
            echo "</tr>";
        }
        echo "<tr><td colspan='9'><p align='center' style='color: #CCCCCC'>[ 共有".$refund_count."次退款记录]"."</p></td></tr>";
        echo "</table>";

        echo "<script type='text/javascript'>";
        echo
            "function check(){".
            "var name = $('#name').val();".
            "var account = $('#account').val();".
            "var phone = $('#phone').val();".
            "if(name == '' || name == null ||account == '' || account == null ||phone == '' || phone == null){
                        alert('填写完整信息');
                        return false;
                    }
                }";
        echo
            "function check_deal(){".
            "var user_id2 = $('#user_id2').val();".
            "var deal_name = $('#deal_name').val();".
            "var money = $('#money').val();".
            "var courier = $('#courier').val();".
            "var courier_number = $('#courier_number').val();".
            "var address = $('#address').val();".
            "if(user_id2 == '' || user_id2 == null ||deal_name == '' || deal_name == null ||money == '' || money == null 
            || courier == '' || courier == null || courier_number == '' || courier_number == null || address == '' || address == null ){
                        alert('填写完整交易信息');
                        return false;
                    }
                }";
        echo "</script>";
        echo "</html>";
        unset($pdo);
    }catch (PDOException $e){
        print "报错：".$e->getMessage();
    }
}
