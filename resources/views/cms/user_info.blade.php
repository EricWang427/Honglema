@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">用户账号设置</strong></h2>
<div class="page_title">
    <h2 class="fl">修改用户信息</h2>
</div>
<form style="margin-left: 30%">
    <?php echo csrf_field(); ?>
    <div style="margin-top: 20px;">
        <label>用户邮箱：</label>
        <input class="textbox textbox_225" type="email" name="email" placeholder="请输入邮箱" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>当前密码：</label>
        <input class="textbox textbox_225" type="password" name="currentPassword" placeholder="请输入当前密码" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>用户密码：</label>
        <input class="textbox textbox_225" type="password" name="password" placeholder="请输入新密码" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>确认密码：</label>
        <input class="textbox textbox_225" type="password" name="passwordConfirm" placeholder="请确认新密码" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <input name="commit" type="submit" value="保存" class="link_btn" style="margin-left: 12%"/>
        <input name="cancel" type="button" value="取消" class="link_btn" style="margin-left: 5%"/>
    </div>
</form>
@endsection