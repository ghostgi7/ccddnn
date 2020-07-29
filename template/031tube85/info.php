<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <title>个人中心 - {cms_title}</title>
    <meta name="keywords" content="{cms_keywords}"/>
    <meta name="description" content="{cms_description}"/>
    {include file="include.php"}
</head>
<body>
{include file="toplink.php"}
<div class="container">
    {include file="header.php"}
    <div class="content">
        <div class="main-content">
            <div class="sidebar" style="width: 100%">


                <div class="headline">
                    <h2>{type_name}</h2>
                </div>
                <ul class="comments">
                    <div class="row">
                        <div class="col-sm-12" style="padding: 16px 0">
                            <table class="layui-table">
                                <colgroup>
                                    <col width="150">
                                    <col width="200">
                                    <col width="150">
                                    <col width="250">
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
                                    <td>{email}</td>
                                    <td>{:date('Y-m-d H:i:s',$userinfo['create'])}</td>
                                    <td>{if $userinfo['vip']>time()}{:date('Y-m-d H:i:s',$userinfo['vip'])}{else}非会员{/if}</td>
                                    <td>
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
                </ul>
            </div>

        </div>
        <p class="text">
            我們最新的網址 {cms_domain1} {cms_domain2} 如發現任何未成年内容請立刻舉報！
        </p>
    </div>

</div>
{include file="footer.php"}
<script>
    $('.changepwd').on('click',function () {
        var newpwd = prompt('请输入新密码','');
        if (newpwd!=null&&newpwd.length>=6){
            $.ajax({
                type:'post',
                data:'cz=changepwd&newpwd='+newpwd,
                success:function (data) {
                    if(data.success){
                        alert('修改成功!');
                    }else{
                        alert(data.msg);
                    }
                }
            })
        }
    })
    $('.vip').on('click',function () {
        var cardkey = prompt('请输入卡密','');
        if(cardkey!=null&&cardkey.length>=6){
            $.ajax({
                type:'post',
                data:'cz=vip&cardkey='+cardkey,
                success:function (data) {
                    if(data.success){
                        alert('充值成功!');
                        history.go(0);
                    }else{
                        alert(data.msg);
                    }
                }
            })
        }
    })
</script>
</body>
</html>