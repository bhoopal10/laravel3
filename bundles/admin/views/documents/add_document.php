<?php echo Section::start('contentWrapper');?>
<div class="clear-fix" id="page-content">
    <div class="page-header position-relative">
        <h1>
            Documents
            <small>
                <i class="icon-double-angle-right"></i>
                Add Documents
            </small>
        </h1>

    </div>
</div>
<di class="row-fluid">
    <div class="span12">
        <form class="form-horizontal" action="#">
            <div class="control-group">
                <label class="control-label" for="case_link">Case Link:</label>
                <div class="controls">
                    <select name="case_link" id="case_link">
                        <option value="">Select Case</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="doc_name">Document Name:</label>
                <div class="controls">
                    <input type="text" name="doc_name" id="doc_name"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="doc_file">Document:</label>
                <div class="controls">
                    <input type="file" name="doc_file" id="doc_file"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="description">Description:</label>
                <div class="controls">
                    <input type="text" name="description" id="description"/>
                </div>
            </div>
            <div class="control-group">
                 <div class="controls">
                    <button class="btn btn-primary" type="submit">Upload</button>
                    <button class="btn btn-danger" type="reset">Reset</button>
                </div>
            </div>


        </form>

    </div>
</di>
    <script type="text/javascript">
        $(function() {

        });
    </script>

<?php Section::stop(); ?>
<?php echo render('admin::template.main'); ?>