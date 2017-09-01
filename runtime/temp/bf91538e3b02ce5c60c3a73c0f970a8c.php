<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\widget\problem.html";i:1502768448;}*/ ?>
<select id="speech-chosen-select" data-placeholder="请选择" tabindex="1" name="problem[]" multiple aria-hidden="true" class="form-control">
    <option></option>
    <?php if(is_array($problem) || $problem instanceof \think\Collection || $problem instanceof \think\Paginator): $i = 0; $__LIST__ = $problem;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['pid'] == '0'): ?><optgroup label="<?php echo $vo['cn_name']; ?>（<?php echo $vo['en_name']; ?>）">
        <?php if(is_array($problem) || $problem instanceof \think\Collection || $problem instanceof \think\Paginator): $i = 0; $__LIST__ = $problem;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;if($vv['pid'] == $vo['id']): ?>
        <option value="<?php echo $vv['id']; ?>" <?php if(in_array(($vv['id']), is_array($pro_id)?$pro_id:explode(',',$pro_id))): ?>selected<?php endif; ?>><?php echo $vv['cn_name']; ?>（<?php echo $vv['en_name']; ?>）</option>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </optgroup><?php endif; endforeach; endif; else: echo "" ;endif; ?>
</select>