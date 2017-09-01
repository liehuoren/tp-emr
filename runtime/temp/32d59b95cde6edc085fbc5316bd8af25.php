<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\widget\center.html";i:1502852810;}*/ ?>
<select data-placeholder="选择所在校区" id="school-chosen-select" tabindex="1" name="centers" class="form-control">   <option value=""></option>
    <?php if(is_array($centers_list) || $centers_list instanceof \think\Collection || $centers_list instanceof \think\Paginator): $i = 0; $__LIST__ = $centers_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <option value="<?php echo $vo['id']; ?>" <?php if($centers_id == $vo['id']): ?>selected<?php endif; ?> ><?php echo $vo['name']; ?></option>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</select>
<script type="text/javascript">

    $('#school-chosen-select').chosen({width:'100%',allow_single_deselect:true,no_results_text: "没有找到结果！"});

</script>