<!-- 加载公用css -->
<?php $this->load->view('common/header');?>

<!-- 头部 -->
<?php $this->load->view('common/top');?>

<div class="main-container" id="main-container">
    <div class="main-container-inner">
        <!-- 左边导航菜单 -->
        <?php $this->load->view('common/left');?>

        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="#">首页</a>
                    </li>
                    <li>
                        <a href="#">报名管理</a>
                    </li>
                    <li class="active">方舟戏台演员</li>
                </ul>

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
                        <span class="input-icon">
                            <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                            <i class="icon-search nav-search-icon"></i>
                        </span>
                    </form>
                </div>
            </div>

            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <form class="form-horizontal" role="form" method="post" >
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 活动名称： </label>
                                <div class="col-sm-9">
                                	<input type="hidden" name="id" value="<?php echo $info['id']?>">
                                    <input type="text" name="title" value="<?php echo $info['title']?>" placeholder="活动名称" class="col-xs-10 col-sm-5">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 开始时间： </label>
                                <div class="col-sm-9">
                                	<input name="start_time" value="<?php echo $info['start_time'];?>" class="datainp col-xs-10 col-sm-5" id="start_time" type="text" placeholder="请选择"  readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 结束时间： </label>
                                <div class="col-sm-9">
                                    <input name="end_time" value="<?php echo $info['end_time'];?>" class="datainp col-xs-10 col-sm-5" id="end_time" type="text" placeholder="请选择"  readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 简介： </label>
                                <div class="col-sm-4">
                                    <textarea class="form-control limited" name="desc" style="margin-top: 0px; margin-bottom: 0px; height: 171px;"><?php echo $info['desc']?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 活跃度（访问）/次： </label>
                                <div class="col-sm-9">
                                    <input type="text" name="visits" value="<?php echo $info['visits']?>" class="col-xs-10 col-sm-5">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 状态： </label>
                                <label class="col-sm-4">
                                    <label><input type="radio" name="is_del" <?php if(isset($info) && $info['is_del'] == 0){echo 'checked';}?> value="0">正常</label>
                                    <label><input type="radio" name="is_del" <?php if(isset($info) && $info['is_del'] == 1){echo 'checked';}?> value="1">删除</label>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="col-md-offset-3 col-md-9">
                                    <button class="btn btn-info" type="submit">
                                        <i class="icon-ok bigger-110"></i>
                                        保存
                                    </button>
                                </div>
                            </div>
                            </from>
                    </div><!-- PAGE CONTENT ENDS -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 加载尾部公用js -->
<?php $this->load->view("common/footer");?>
<script src="/static/jedate/jedate.min.js"></script>
<script type="text/javascript">

    jeDate({
    	dateCell:"#start_time",
    	format:"YYYY-MM-DD hh:mm:ss",
    	isinitVal:true,
    	isTime:true, //isClear:false,
    	minDate:"2014-09-19 00:00:00",
    	okfun:function(val){}
    })
    jeDate({
    	dateCell:"#end_time",
    	format:"YYYY-MM-DD hh:mm:ss",
    	isinitVal:true,
    	isTime:true, //isClear:false,
    	minDate:"2014-09-19 00:00:00",
    	okfun:function(val){}
    })

    $('[data-rel=tooltip]').tooltip();
    $('.del-spa').click(function(){
        var _self = $(this);
        var d = dialog({
            title: "提示",
            content: '确定删除该规格吗？',
            okValue: '确定',
            ok: function () {
                window.location.href = '/specification/del/' + _self.attr('data-id') + '/' + _self.attr('data-del');
            },
            cancelValue: '取消',
            cancel: function () {}
        });
        d.width(320);
        d.showModal();
    });
</script>

<!-- 底部 -->
<?php $this->load->view("common/bottom");?>
