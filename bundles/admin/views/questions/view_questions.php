<?php echo Section::start('page-header');?>
    <div id="page-content" class="clearfix">
        <div class="page-header position-relative">
            <h1>
                Question
                <small>
                    <i class="icon-double-angle-right"></i>
                    View Question
                </small>
            </h1>
        </div>
    </div>
<?php Section::stop();?>
<?php echo Section::start('contentWrapper'); ?>

    <div class="span12">
        <div class="widget-box">
            <div class="widget-header">
                <h3>View Questions</h3>
            </div>
            <div class="widget-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <th>Question Id</th>
                    <th>Question</th>
                    <th>Module Id</th>
                    <th></th>
                    </thead>
                    <?php if(isset($data)){foreach($data as $question){?>
                    <tr>
                        <td><?php echo $question->question_id; ?></td>
                        <td><?php echo $question->question; ?></td>
                        <td><?php echo $question->module_id; ?></td>
                        <td><a href="#"><i class="icon-edit-sign"></i></a> | <a href="#"><i class="icon-trash"></i></a></td>
                    </tr>
    <?php }} ?>

                </table>
            </div>
        </div>
    </div>

<?php Section::stop(); ?>
<?php echo render('admin::template.main'); ?>