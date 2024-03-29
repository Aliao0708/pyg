<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"E:\pyg\public/../application/admin\view\type\product-type-add.html";i:1575797755;}*/ ?>
﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="favicon.ico" >
<link rel="Shortcut Icon" href="favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/static/admin/lib/html5.js"></script>
<script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>添加模型 - 管理员管理 - H-ui.admin v3.0</title>
</head>
<body>
<article class="cl pd-20">
	<form action="<?php echo url('save'); ?>" method="post" class="form form-horizontal" id="form-add" enctype="multipart/form-data">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>模型名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="name" name="type_name" datatype="*2-16" nullmsg="模型名称不能为空">
			</div>
		</div>
		<div class="row cl">
			<table class="table table-border table-bordered table-bg table-sort">
				<thead>
					<tr class="text-c">
						<th width="15%">规格名称</th>
						<th width="10%">排序</th>
						<th width="">规格值</th>
						<th width="20%">操作</th>
					</tr>
					<tr class="text-c">
						<th colspan="4" style="text-align:left;">
							<a href="javascript:;" id="add_spec" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加规格</a>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-c">
						<td><input name="spec[0][name]" type="text" class="input-text" style="width:120px;" value=""></td>
						<td><input name="spec[0][sort]" type="text" class="input-text" style="width:120px;" value=""></td>
						<td class="text-l">
							<input name="spec[0][value][]" type="text" class="input-text" style="width:120px;" value="">
							<a href="javascript:;" class="add_value">添加</a>
							<!--<a href="javascript:;" class="delete_value">删除</a>-->
						</td>
						<td class="f-14 product-brand-manage">
							<a title="删除" data-url="" href="javascript:;" class="ml-5 delete" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;删除</i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row cl">
			<table class="table table-border table-bordered table-bg table-sort">
				<thead>
				<tr class="text-c">
					<th width="15%">属性名称</th>
					<th width="10%">排序</th>
					<th width="">属性值</th>
					<th width="20%">操作</th>
				</tr>
				<tr class="text-c">
					<th colspan="4" style="text-align:left;">
						<a href="javascript:;" id="add_attr" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加属性</a>
					</th>
				</tr>
				</thead>
				<tbody>
				<tr class="text-c">
					<td><input name="attr[0][name]" type="text" class="input-text" style="width:120px;" value=""></td>
					<td><input name="attr[0][sort]" type="text" class="input-text" style="width:120px;" value=""></td>
					<td class="text-l">
						<input name="attr[0][value][]" type="text" class="input-text" style="width:120px;" value="">
						<a href="javascript:;" class="add_value">添加</a>
						<!--<a href="javascript:;" class="delete_value">删除</a>-->
					</td>
					<td class="f-14 product-brand-manage">
						<a title="删除" data-url="" href="javascript:;" class="ml-5 delete" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;删除</i></a>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<button type="submit" class="btn btn-success radius" id="save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.page.js"></script>

<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/static/admin/logic/category.js"></script>
<script type="text/javascript">
$(function(){
	$('th a').click(function(){
		var $tr = $(this).closest('table').find('tbody tr:first-child').clone(true);
		$tr.find(':text').val('');
		var index = $(this).closest('table').find('tbody tr').length;
		$tr.find(':text').each(function(i,v){
			$(v).attr('name', $(v).attr('name').replace(/\[\d\]/, '['+index+']'));
		});
		$(this).closest('table').find('tbody').append($tr);
	});
	$('.add_value').click(function(){
		var $input = $(this).prev().clone(true);
		$input.val('');
		$(this).before($input);
	});

	$("#form-add").validate({
		rules:{
			name:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit(function(res){
				if(res.code == 200){
                    layer.msg('操作成功',{"icon":1,"time":"1000"},function(){
                        parent.location.reload();
                    });
				}else{
					layer.msg('操作失败:' + res.msg);
				}
			});

		}
	});
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>