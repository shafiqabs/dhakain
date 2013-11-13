<?php $this->load->view('layouts/header_admin')?>
<ul id="breadcrumbs"> <li><div id="home">Home</div><a href="<?php echo site_url();?>" id="first-bread">Home</a></li><li>Dashboard</li> 
<li id="breadcrumb-right"><button class="btn btn-inverse btn-primary"><i class="icon-edit icon-white"></i>Add New Shop</button></li>
</ul>

<div class="clear"></div>   
<div id="content-box-container">
<table style="height:100%;">
<tbody>
<tr><td height="20"></td></tr>
<!--<tr><td valign="top" class="left" align="left" >

<fieldset class="sheet">
<legend>Welcome to onClickBD.com</legend>
<div style="width:952px;">Sliding login panel Demo with jQuery You can put anything you want in this sliding panel: videos, audio, images, forms... The only limit is your.Sliding login panel Demo with jQuery You can put anything you want in this sliding panel: videos, audio, images, forms... The only limit is your </div>
</fieldset>

</td>
</tr>-->

<tr>
<td  valign="top" id="bnc">
<ul id="wptouch-top-menu">
<li><a href="">General</a></li>
<li><a href="" class="">Global Settings</a></li>
<li><a href="" class="active">Product Settings</a></li>
<li><a href="" class="">Service Settings</a></li>
<li><a href="" class="">Image Settings</a></li>

</ul>
<div id="wptouch-tabbed-area" class="round-6 box-shadow persist-area" ><!-- Start box -->
<div class="content-box">
<div class="left-area">
    <ul>
        <li><a href="<?php echo site_url('admin/settings')?>">Settings </a></li>
        <li><a href="<?php echo site_url('admin/settings_list')?>">Settings List</a></li>
        <li><a href="<?php echo site_url('admin/themes')?>" class="active">Themes</a></li>
        <li><a href="<?php echo site_url('admin/themes_list')?>">Themes List</a></li>
         <li><a href="<?php echo site_url('admin/layouts')?>">Layouts</a></li>
        <li><a href="<?php echo site_url('admin/layouts_list')?>">Layouts List</a></li>
        <li><a href="<?php echo site_url('admin/plugins')?>">Plugins</a></li>
        <li><a href="<?php echo site_url('admin/plugins_list')?>">Plugins List</a></li>
    </ul>
    <ul>
        <li><a href="<?php echo site_url('admin/settings')?>">Product Category</a></li>
        <li><a href="<?php echo site_url('admin/settings_list')?>">Product  Template</a></li>
        <li><a href="<?php echo site_url('admin/themes')?>">Product Template Category</a></li>
   </ul>
    <ul>
        <li><a href="<?php echo site_url('admin/settings')?>">Service Category</a></li>
        <li><a href="<?php echo site_url('admin/settings_list')?>">Service Template</a></li>
        <li><a href="<?php echo site_url('admin/themes')?>" class="">Service Template Category</a></li>
    </ul>
    <ul>
        <li><a href="<?php echo site_url('admin/settings')?>">Product Image Size</a></li>
        <li><a href="<?php echo site_url('admin/settings_list')?>">Image Category</a></li>
        <li><a href="<?php echo site_url('admin/themes')?>" class="">Service Image Size</a></li>
        <li><a href="<?php echo site_url('admin/themes_list')?>">Service Category</a></li>
        <li><a href="<?php echo site_url('admin/layouts')?>">Common Image size</a></li>
    </ul>
</div>
 <style>

 </style>       
            <div class="right-area ">
    <div class="submit-bar persist-header" >
    <div id="message-box"><div class="success_msg">Insert hsa been successfully</div></div>
    <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit">Save changes</button></li><li><button class="btn">Cancel</button></li></ul></div>
    </div>
    <div class="info_message">
    <a class="close" data-dismiss="alert">×</a>
    <h4 class="alert-heading">Instruction</h4>
   	<ul>
    <li>Demo with jQuery You can put anything you</li>
    <li>Demo with jQuery You can put anything you</li>
    <li>Demo with jQuery You can put anything you</li>
    <li>Demo with jQuery You can put anything you<a data-content="And here's some amazing content. It's very engaging. right?" rel="popover" class="btn btn-danger element" href="#" data-original-title="A Title">hover for popover</a></li>
    <li>Demo with jQuery You can put anything you <a href="#" rel="popover" class="element" title="first tooltip">hover over me</a></li>
   
    </ul>
    </div>
           
            <fieldset class="sheet">
         
           <div class="clear"></div>
<legend>Welcome to onClickBD.com</legend>
<div class="controls_action_button" style="width:735px;">
<!--  start step-holder -->
            <div id="step-holder">
            <div class="step-no-off">1</div>
			<div class="step-light-left"><a href="http://localhost/admin-ebdshop/index.php/listing_product/listing_product_edit/3/35">Edit products</a></div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no">2</div>
			<div class="step-dark-left"><a href="http://localhost/admin-ebdshop/index.php/listing_product/listing_product_type/3/35">Select Category</a></div>
			<div class="step-dark-right">&nbsp;</div>

			<div class="step-no-off">3</div>
			<div class="step-light-left"><a href="http://localhost/admin-ebdshop/index.php/listing_product/listing_product_specification/3/35">Specification</a></div>
			<div class="step-light-right">&nbsp;</div>
            <div class="step-no-off">4</div>
			<div class="step-light-left"><a href="http://localhost/admin-ebdshop/index.php/listing_product/add_listing_image/3/35">add image</a></div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no-off">5</div>
            <div class="step-light-left"><a href="http://localhost/admin-ebdshop/index.php/listing_product/listing_product_preview/3/35">Preview</a></div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
            </div>
<!--  end step-holder -->
</div>

<div class="clear"></div> 
<div class="content-inner-box">

    <form  id="formID4" method="post">
    <div class="line-small">
    <label>Label name</label>
    <input type="text" placeholder="Type something…" class="validate[required,custom[date]] text-input span3" name="date" id="date3" >
    </div>
    <div class="line-small">
    <label>Label name</label>
    <input type="text" class="span3" placeholder="Type something…">
    </div>
    <div class="line-small">
    <label>Label name</label>
    <input type="text" class="span3" placeholder="Type something…">
    </div>
    <div class="line-small">
    <label>Label name</label>
    <input type="text" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" data-items="4" data-provide="typeahead" style="margin: 0 auto;" class="span3">
    </div>
    
    <div class="clear"></div>
    <label class="checkbox">
    <input type="checkbox"> Check me out
    </label>
    <button type="submit" class="btn">Submit</button>
    </form>
<form class="form-horizontal">
         <div class="control-group">
            <label for="input01" class="control-label">Text input</label>
            <div class="controls">
              <input type="text" id="input01" class="input-xlarge">
              <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
            </div>
          </div>
          <div class="control-group">
            <label for="optionsCheckbox" class="control-label">Checkbox</label>
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" value="option1" id="optionsCheckbox">
                Option one is this and that&mdash;be sure to include why it's great
              </label>
            </div>
          </div>
          <div class="control-group">
            <label for="select01" class="control-label">Select list</label>
            <div class="controls">
              <select id="select01">
                <option>something</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label for="multiSelect" class="control-label">Multicon-select</label>
            <div class="controls">
              <select id="multiSelect" multiple="multiple">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label for="fileInput" class="control-label">File input</label>
            <div class="controls">
              <input type="file" id="fileInput" class="input-file">
            </div>
          </div>
          <div class="control-group">
            <label for="textarea" class="control-label">Textarea</label>
            <div class="controls">
              <textarea rows="3" id="textarea" class="input-xlarge"></textarea>
            </div>
          </div>
         
      </form>

</div>
<div class="span8">
      <form class="form-horizontal">
        <fieldset>
          <div class="control-group">
            <label class="control-label">Form grid sizes</label>
            <div class="controls docs-input-sizes">
              <input type="text" placeholder=".span1" class="span1">
              <input type="text" placeholder=".span2" class="span2">
              <input type="text" placeholder=".span3" class="span3">
              <select class="span1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <select class="span2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <select class="span3">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <p class="help-block">Use the same <code>.span*</code> classes from the grid system for input sizes.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Alternate sizes</label>
            <div class="controls docs-input-sizes">
              <input type="text" placeholder=".input-mini" class="input-mini">
              <input type="text" placeholder=".input-small" class="input-small">
              <input type="text" placeholder=".input-medium" class="input-medium">
              <p class="help-block">You may also use static classes that don't map to the grid, adapt to the responsive CSS styles, or account for varying types of controls (e.g., <code>input</code> vs. <code>select</code>).</p>
            </div>
          </div>
          <div class="control-group">
            <label for="prependedInput" class="control-label">Prepended text</label>
            <div class="controls">
              <div class="input-prepend">
                <span class="add-on">@</span><input type="text" size="16" id="prependedInput" class="span2">
              </div>
              <p class="help-block">Here's some help text</p>
            </div>
          </div>
          <div class="control-group">
            <label for="appendedInput" class="control-label">Appended text</label>
            <div class="controls">
              <div class="input-append">
                <input type="text" size="16" id="appendedInput" class="span2"><span class="add-on">.00</span>
              </div>
              <span class="help-inline">Here's more help text</span>
            </div>
          </div>
          <div class="control-group">
            <label for="appendedPrependedInput" class="control-label">Append and prepend</label>
            <div class="controls">
              <div class="input-prepend input-append">
                <span class="add-on">$</span><input type="text" size="16" id="appendedPrependedInput" class="span2"><span class="add-on">.00</span>
              </div>
            </div>
          </div>
          <div class="control-group">
            <label for="appendedInputButton" class="control-label">Append with button</label>
            <div class="controls">
              <div class="input-append">
                <input type="text" size="16" id="appendedInputButton" class="span2"><button type="button" class="btn">Go!</button>
              </div>
            </div>
          </div>
          <div class="control-group">
            <label for="appendedInputButtons" class="control-label">Two-button append</label>
            <div class="controls">
              <div class="input-append">
                <input type="text" size="16" id="appendedInputButtons" class="span2"><button type="button" class="btn">Search</button><button type="button" class="btn">Options</button>
              </div>
            </div>
          </div>
          <div class="control-group">
            <label for="inlineCheckboxes" class="control-label">Inline checkboxes</label>
            <div class="controls">
              <label class="checkbox inline">
                <input type="checkbox" value="option1" id="inlineCheckbox1"> 1
              </label>
              <label class="checkbox inline">
                <input type="checkbox" value="option2" id="inlineCheckbox2"> 2
              </label>
              <label class="checkbox inline">
                <input type="checkbox" value="option3" id="inlineCheckbox3"> 3
              </label>
            </div>
          </div>
          <div class="control-group">
            <label for="optionsCheckboxList" class="control-label">Checkboxes</label>
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" value="option1" name="optionsCheckboxList1">
                Option one is this and that&mdash;be sure to include why it's great
              </label>
              <label class="checkbox">
                <input type="checkbox" value="option2" name="optionsCheckboxList2">
                Option two can also be checked and included in form results
              </label>
              <label class="checkbox">
                <input type="checkbox" value="option3" name="optionsCheckboxList3">
                Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results
              </label>
              <p class="help-block"><strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Radio buttons</label>
            <div class="controls">
              <label class="radio">
                <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                Option one is this and that&mdash;be sure to include why it's great
              </label>
              <label class="radio">
                <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios">
                Option two can is something else and selecting it will deselect option one
              </label>
            </div>
          </div>
          <div class="form-actions">
          <a href="#" class="btn btn-danger"><i class="icon-trash icon-white"></i></a>
           <a href="#" class="btn btn-info"><i class="icon-edit icon-white"></i></a>
         
            <button class="btn btn-primary" type="submit">Save changes</button>
            <button class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>
    </div>
</fieldset>
<fieldset class="sheet">
<legend>Product category list</legend>
<div class="demo_jui">
<?php 
$arr=$this->paging_model->product_category_paging($per_page = 10,$num_link =3);	
$query=($arr[0]);
$paging=($arr[1]);
?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
					   <thead>
						<tr>
							<th>&nbsp;Category name</th>
							<th>&nbsp;Parent name</th>
							<th style="width:75px;">&nbsp;</th>
                           
						</tr>
					</thead>
               			  <tbody>
                          
              <?php 
//$query=$this->settings_model->categorylisting();
foreach ($query -> result() as $rows ){
?>
		<tr class="gradeX">
			<td><?php echo $rows->category_name; ?></td>
			<td><?php echo $this->settings_model->category_parent($rows->parent_id);  ?></td>
			<td class="center">
            <a class="edit_img" href="<?php echo site_url('product_category/product_category_edit')?>/<?php echo $this->uri->segment(3,0); ?>/<?php echo $rows->category_id ?>"></a>
			<a id="2" class="delete_img" href="<?php echo site_url('product_category/product_category_delete')?>/<?php echo $this->uri->segment(3,0); ?>/<?php echo $rows->category_id ?>"></a>
			<a id="2" class="view_img popup-window" href="javascript:void(0);"></a>
</td>
		</tr>

<?php } ?>
              </tbody>
		            
        			</table>
                    <?php if (isset($paging)){echo $paging; } ?>
                    

</div>
</fieldset>
</div>
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
<?php $this->load->view('layouts/footer_admin'); ?>

<script language="javascript" type="text/javascript">

$(function() {
		$("input[type=file]").filestyle({ 
			image: "<?php echo base_url()?>/assets/images/upload_file.gif",
			imagewidth :78,
			imageheight : 29,
			width :145
		});
		$("select").searchable();


       jAlert('Please attach choose your image', 'Alert Dialog');
	   
	    var jconfirm='Are sure went you submit ?';
        var confirm_title='Confirmation Dialog';
        jConfirm(jconfirm,confirm_title,function(r) {
            if(r){
                //document.form.submit();
            }
        });
       

});
</script>
