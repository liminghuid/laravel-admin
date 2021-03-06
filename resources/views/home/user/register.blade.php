<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
@section('base_header')
@include('home.block.base_header')
@parent
<link type="text/css" href="/site/dist/semantic.css" rel="stylesheet" />
@show
</head>

<body>
<!-- top -->
<div class="top">
   @section('header')
       @include('home.block.header')
   @show
</div>
<!-- end top -->
<!-- main -->
<div class="main">
    <div class="wrap">
       <div class="login">
	          <div class="register">
			         <div class="rgt-lf-img"><img src="/site/images/logo.png" width="432" height="79" /></div>
					 <div class="l_form">
					       <form class="ui form ajax-form" action="<?php echo action('Home\UserController@postRegister') ;?>" method="post" >
						      <div class="rgt-form">
							      <div class="inline field">
								     <label id="b-label">邮　　 　箱：</label>
								     <input type="text" placeholder="请输入邮箱" name="email" style="width:400px;">
								  </div>
							      <div class="inline field">
								     <label id="b-label">手 机 号 码：</label>
								     <input type="text" placeholder="请输入你的手机号" name="mobile" style="width:400px;">
								  </div>
								  <div class="inline fields">
										<div class="field">
										  <label id="b-label">验 　证　码：</label>
										  <input type="text" placeholder="" name="verify" style="width:200px;">
										</div>
										<div class="field">
										  <img src="/site/images/verify.png" height="33" width="100"/>
										</div>
								  </div>
								  <div class="inline field">
								     <label id="b-label">设 置 密 码：</label>
								     <input type="password" name="password" placeholder="请输入密码" style="width:400px;">
								  </div>
								  <div class="inline field">
								     <label id="b-label">确 认 密 码：</label>
								     <input type="password" name="password_confirmation" placeholder="请再一次输入密码" style="width:400px;">
								  </div>
								  <div class="inline field">
									<div class="ui checkbox" id="b-check">
									  <input type="checkbox" name="agreement">
									  <label>我同意并接收注册用户服务条款</label>
									</div>
								  </div>
								  <div class="inline fields">
								    <div class="field">
								      <div id="rgt-submit" class="ui submit  button">
								        <input type="submit" checked="checked" value="注册"/>
								      </div>
									</div>
									<div class="field">
									  <a href="<?php echo action('Home\UserController@getLogin') ;?>" class="login-btn">登录</a>
									</div>
								  </div>
								   <div class="hz_span">合作账号登录</div>
						   <div class="other_login">
								<a href=""></a>
								<a href=""></a>
								<a href=""></a>
								<a href=""></a>
								<a href=""></a>
								<a href=""></a>
						   </div>
							  </div>
							  <input name="_token" type="hidden" value="<?php echo csrf_token(); ?>" />
						   </form>
					 </div>

			  </div>
			  <div class="rst-r-img">
			         <img src="/site/images/registerimg.png" width="530" height="453" />
			  </div>
			  <div class="clear"></div>
	   </div>
	</div>
</div>
<!-- end main -->
<!-- footer -->
@section('footer')
@include('home.block.footer')
@parent
@show
<!-- end footer -->
</body>
</html>
