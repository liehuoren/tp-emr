<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\widget\center.html";i:1502852810;s:75:"D:\wamp64\www\tp-emr\public/../application/admin\view\widget\diagnosis.html";i:1502768444;}*/ ?>
<select id="diagnosis-chosen-select" data-placeholder="请选择" tabindex="1" multiple name="diagnosis[]" aria-hidden="true" class="form-control">  
    <option></option>
    <?php if(is_array($diagnosis) || $diagnosis instanceof \think\Collection || $diagnosis instanceof \think\Paginator): $i = 0; $__LIST__ = $diagnosis;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <option value="<?php echo $vo['id']; ?>" <?php if(in_array(($vo['id']), is_array($dia_id)?$dia_id:explode(',',$dia_id))): ?>selected<?php endif; ?>><?php echo $vo['cn_name']; ?>（<?php echo $vo['en_name']; ?>）</option>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</select>
