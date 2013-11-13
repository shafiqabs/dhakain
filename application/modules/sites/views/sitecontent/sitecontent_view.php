<?php $this->load->view('admin/layouts/header')?>

<ul id="breadcrumbs">
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,NULL));?>" ><?php echo $this->uri->segment(1,NULL); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,NULL).'/'.$this->uri->segment(2,NULL));?>" ><?php echo $this->uri->segment(2,NULL); ?></a></li>
    <li id="breadcrumb-right"><button class="btn  btn-info" onclick="window.location='<?php echo site_url('sites/feature/create')?>'" ><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_feature'); ?></button></li>
</ul>

<div class="clear"></div>
<div id="content-box-container">
    <table style="height:100%;">
        <tbody>
        <tr><td height="20"></td></tr>
        <tr>
            <td  valign="top" id="bnc">
                <?php $this->load->view('admin/layouts/top_menu')?>
                <div id="wptouch-tabbed-area" class="round-6 box-shadow persist-area" ><!-- Start box -->
                    <div class="content-box">
                        <div class="left-area">
                            <?php $this->load->view('admin/layouts/left_menu'); ?>
                        </div>

                        <form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/sitecontent/save')?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="random_id" id="random_id" value="<?php echo isset($queryup->random_id)? $queryup->random_id :set_value('random_id');?>">
                            <div class="right-area ">
                                <div class="submit-bar persist-header" >
                                    <div id="message-box"><?php $this->load->view('admin/layouts/message'); ?></div>
                                    <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
                                </div>
                         
                                <?php if(validation_errors()){?>
                                    <div class="alert-error">
                                        <a class="close" data-dismiss="alert">×</a>
                                        <h4 class="alert-heading"><?php echo $this->lang->line('validation_error'); ?></h4>
                                        <div class="valiade_msg"><?php echo validation_errors(); ?></div>
                                    </div>
                                <?php }?>
                                <fieldset class="sheet">

                                    <div class="clear"></div>
                                    <legend><?php echo $title; ?></legend>
                                    <?php $this->load->view('admin/layouts/breadcrumbs'); ?>
                                    <div class="clear"></div>
                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('parent_menu'); ?></label>
                                        <div class="controls">
                                            <select id="parent_id" name="parent_id">
                                                <option value='0'>---<?php echo $this->lang->line('select_one'); ?>---</option>
                                                <?php
                                                $parent_id =(isset($queryup->parent_id))? $queryup->parent_id : set_value('parent_id');
                                                if(!empty($parentmenu)){
                                                foreach($parentmenu as $parents):
                                                ?>
                                                <option value="<?php echo $parents->sitecontent_id; ?>" <?php if($parent_id == $parents->sitecontent_id ){?> selected="selected" <?php } ?> ><?php echo $parents->menu_name; ?></option>
                                            <?php endforeach; } ?>
                                            </select>
                                        </div>
                                    </div><div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('menu_name'); ?></label>
                                        <div class="controls">
                                            <input type="text" placeholder="Type <?php echo $this->lang->line('menu_name'); ?>" class="validate[required] input-medium  span3" name="menu_name" id="menu_name" value="<?php echo(isset($queryup->menu_name))? $queryup->menu_name : set_value('menu_name'); ?>" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('title'); ?></label>
                                        <div class="controls">
                                            <input type="text" placeholder="Type <?php echo $this->lang->line('title'); ?>" class="validate[required] input-medium  span6" name="title" id="title" value="<?php echo(isset($queryup->title))? $queryup->title : set_value('title'); ?>" >
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('title'); ?></label>
                                        <div class="controls">
                                            <input type="text" name="datepicker" id="datepicker" value="" />
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label"><?php echo $this->lang->line('content'); ?></label>
                                        <div class="controls">
                                            <textarea name="content" id="content" rows="" cols="" class="input-textarea-large"><?php echo isset($queryup->content) ? $queryup->content : set_value('content'); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"><?php echo $this->lang->line('excerpt'); ?></label>
                                        <div class="controls">
                                            <textarea name="excerpt" id="excerpt" rows="" cols="" class="textarea-no-midum"><?php echo isset($queryup->excerpt) ? $queryup->excerpt : set_value('excerpt'); ?></textarea>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('image_name'); ?></label>
                                        <div class="controls">
                                            <?php $image_path = isset($queryup->image_path) ? $queryup->image_path : set_value('image_path'); ?>
                                            <input type="file" id="image_name" class="input-file" name="image_name">

                                        </div>
                                        <?php
                                        $image_path=isset($queryup->image_path)? $queryup->image_path :'';
                                        if($image_path){ ?>
                                            <div id="featureimage-box">
                                                <?php
                                                $image_path=isset($queryup->image_path)? $queryup->image_path :'';
                                                if(file_exists($image_path))
                                                    echo '<img id="featureimage" src="'.base_url().'/'.$image_path.'">';
                                                ?>
                                            </div>
                                        <?php } ?>
                                    </div>


                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('status'); ?></label>
                                        <div class="controls">
                                            <?php $status=(isset($queryup->status))? $queryup->status : set_value('status'); ?>
                                            <input type="checkbox" id="status" <?php if($status ==1){?> checked="checked" <?php } ?>  name="status" value="1" class="input-file">
                                        </div>
                                    </div>

                                </fieldset>

                            </div>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>

            </td>
        </tr>
        </tbody>
    </table>

    <!-- end of sidebar -->
    <!-- end of content -->
</div><!-- end of main -->
<?php $this->load->view('admin/layouts/footer'); ?>
<script language="javascript" type="text/javascript">

    $(document).ready(function(){
        $( "#datepicker" ).datepicker({ dateFormat: "dd-mm-yy" });
        //$('#basic_example_1').datetimepicker();

        /*$("input[type=file]").filestyle({
              image: "<?php echo base_url()?>/assets/images/upload_file.gif",
            imagewidth :78,
            imageheight : 29,
            width :145
        });*/
    });
</script>

