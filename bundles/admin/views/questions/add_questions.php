
<?php echo Section::start('page-header');?>
<div id="page-content" class="clearfix">
    <div class="page-header position-relative">
        <h1>
            Question
            <small>
                <i class="icon-double-angle-right"></i>
                Add Question
            </small>
        </h1>
    </div>
</div>
<?php Section::stop();?>
<?php echo Section::start('contentWrapper')?>
    <div class="span5">

        <div class="widget-box table-bordered">
            <div class="widget-header">
                <h3>Test</h3>
            </div>

            <div class="widget-body">

                <br>
        <form action="<?php echo URL::to_route('AddQuestions'); ?>" method="post" class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="module_id">ModuleId:</label>
                <div class="controls"><select name="module_id" id="module_id">
                        <?php if(isset($data)){foreach($data as $module){?>
                        <option value="<?php echo $module->module_id; ?>"><?php echo $module->module_name; ?></option>
                        <?php }} ?>
                </select></div>
            </div>
            <div class="control-group">
                <label class="control-label" for="question">Question:</label>
                <div class="controls"><textarea name="question" id="question" cols="10" rows="3"></textarea></div>
            </div>
            <?php $i=1; for($i;$i<5;$i++){ ?>
            <div class="control-group">
                <label class="control-label" for="<?php echo $i.')'; ?>"><?php echo $i.')'; ?></label>
                <div class="controls"><input type="text" name="options[]" placeholder="options" class="span5    " id="<?php echo $i.')'; ?>"/>
                <input type="text" name="marks[]" placeholder="marks" class="span2"/></div>
            </div>

<?php } ?>
            <div class="control-group">
             <div class="controls">
             <button class="span3 btn btn-primary" type="submit">Add</button>
                       </div>
            </div>
        </form>
                </div>
            </div>

<?php Section::stop(); ?>
<?php echo render('admin::template.main'); ?>
