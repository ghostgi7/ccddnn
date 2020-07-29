<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>个人中心 - {cms_title}</title>
    <meta name="description" content="{cms_description}" />
    <meta name="keywords" content="{cms_keywords}" />
    {include file="include.php"}
</head>


<body class="no-touch">
    {include file="header.php"}

    <div class="container">
        <div class="content">
            <div class="main-content">
                <div class="main-container">
                    <div id="list_videos_most_recent_videos">
                        <div class="headline">
                            <h2><i class="layui-icon layui-icon-user" style="font-size: 24px;"></i>  个人中心</h2>
                        </div>

                        <div class="row">
                            <div class="col-sm-12" style="padding: 16px 0">
                                <div class="table-container">
                                <table class="layui-table">
                                    <colgroup>
                                        <col width="150">
                                        <col width="200">
                                        <col width="200">
                                        <col width="200">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th>邮箱</th>
                                        <th>注册时间</th>
                                        <th>会员状态</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="min-width: 80px;">{email}</td>
                                        <td style="min-width: 200px;">{:date('Y-m-d H:i:s',$userinfo['create'])}</td>
                                        <td style="min-width: 200px;">{if $userinfo['vip']>time()}{:date('Y-m-d H:i:s',$userinfo['vip'])}{else}非会员{/if}</td>
                                        <td style="min-width: 300px;">
                                            <a href="javascript:;" class="vip">充值会员</a>
                                            <a href="{$cms_config[buycard_url]}" target="_blank">购买卡密</a>
                                            <a href="javascript:;" class="changepwd">修改密码</a>
                                            <a href="{:U('user','login','logout',1)}">注销</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>
{include file="footer.php"}
<script>
    window.onload = function () {
        layui.use(['jquery'],function () {
            var $ = layui.jquery;
            $('.close-plus').on('click',function () {
                $(this).toggleClass('active');
                $(this).parent().next().toggleClass('active')
            })
            $('.changepwd').on('click',function () {
                layer.prompt({formType: 1,
                    value: '',
                    title: '请输入新密码',
            },function(value, index, elem){
                    if(value.length>=6){
                        $.ajax({
                            type:'post',
                            data:'cz=changepwd&newpwd='+value,
                            success:function (data) {
                                if(data.success){
                                    layer.msg('修改成功!');
                                }else{
                                    layer.msg(data.msg);
                                }
                                layer.close(index);
                            }
                        })
                    }
                });
            })
            $('.vip').on('click',function () {
                layer.prompt({formType: 0,
                    value: '',
                    title: '请输入卡密',
                },function(value, index, elem){
                    if(value.length>=6){
                        $.ajax({
                            type:'post',
                            data:'cz=vip&cardkey='+value,
                            success:function (data) {
                                if(data.success){
                                    layer.msg('充值成功!');
                                    history.go(0);
                                }else{
                                    layer.msg(data.msg);
                                }
                                layer.close(index);
                            }
                        })
                    }
                });
            })
        })

    }
</script>
</body>
</html>