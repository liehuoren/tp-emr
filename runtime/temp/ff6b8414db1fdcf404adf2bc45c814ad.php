<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\wamp64\www\tp-emr\public/../application/admin\view\widget\city.html";i:1502268289;}*/ ?>
<label class="col-lg-2 control-label">家庭住址</label>
<div class="col-lg-2">
    <select data-placeholder="-省份-" id="province-chosen-select" tabindex="2" name="pos_province">
    </select>
</div>
<div class="col-lg-2">
    <select data-placeholder="-城市-" id="city-chosen-select" tabindex="2" name="pos_city">
        
    </select>
</div>
<div class="col-lg-2">
    <select data-placeholder="-州县-" id="community-chosen-select" tabindex="2" name="pos_district">
        
    </select>
</div>
<script type="text/javascript">
    
    $(function(){
        $('#province-chosen-select').chosen({width:'100%'});
        $('#city-chosen-select').chosen({width:'100%'});
        $('#community-chosen-select').chosen({width:'100%'});
        var pid="<?php echo $pid; ?>";  //默认省份id
        var cid="<?php echo $cid; ?>";  //默认城市id
        var did="<?php echo $did; ?>";  //默认区县市id

        /*修复联动不及时的bug，陈一枭*/
    function change_province(pid){
            $.post("<?php echo url('admin/config/getprovince'); ?>", {pid: pid}, function(result){
                $("#province-chosen-select").html(result);
                $('#province-chosen-select').chosen("destroy").chosen({width:'100%'});
            });
            
        }

    function change_city(p_pid,p_cid){
        $.post("<?php echo url('admin/config/getcity'); ?>", {pid: p_pid, cid: p_cid}, function(result){
            $("#city-chosen-select").html(result);
            
            $('#city-chosen-select').chosen("destroy").chosen({width:'100%'});
        });


    }
    function change_district(p_cid,p_did){
        $.post("<?php echo url('admin/config/getdistrict'); ?>", {cid: p_cid, did: p_did}, function(result){
            $("#community-chosen-select").html(result);

            $('#community-chosen-select').chosen("destroy").chosen({width:'100%'});

        });
    }

        change_province(pid);
        change_city(pid,cid);
        change_district(cid,did);


        $('#province-chosen-select').change(function(){
            var pid_g=$(this).children('option:selected').val();
            change_city(pid_g)
            change_district(0);

        });

        $('#city-chosen-select').change(function(){
            var cid_g=$(this).children('option:selected').val();
            change_district(cid_g)


        });

        $('#community-chosen-select').change(function(){
            var did_g=$(this).children('option:selected').val();
        });

        

    });
    /*修复联动不及时的bug，陈一枭end*/

</script>