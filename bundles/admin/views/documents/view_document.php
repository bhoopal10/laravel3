<?php echo Section::start('contentWrapper');?>
    <div class="clear-fix" id="page-content">
        <div class="page-header position-relative">
            <h1>
                Documents
                <small>
                    <i class="icon-double-angle-right"></i>
                   View Documents
                </small>
            </h1>

        </div>
    </div>
    <di class="row-fluid">
        <div class="span12">
            <a href="<?php echo URL::to_route('Documents'); ?>">
           <button class="btn btn-file" style="float: right"><i class="icon-plus"></i>Add new document</button>
            </a>
            <table id="table_bug_report" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>Document Name</th>
                    <th>Case Name</th>
                    <th>Upload Detail</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <tr class="">
                    <td>doc name1</td>
                    <td>case2</td>
                    <td>12/12/2013 12:30 upload by User6</td>
                    <td class="td-actions ">
                        <div class="hidden-phone visible-desktop btn-group">

                            <button class="btn btn-mini btn-info">
                                <i class="icon-edit bigger-120"></i>
                            </button>

                            <button class="btn btn-mini btn-danger">
                                <i class="icon-trash bigger-120"></i>
                            </button>

                            <button class="btn btn-mini btn-warning">
                                <i class="icon-flag bigger-120"></i>
                            </button>
                        </div>

                    </td>
                </tr>
                <tr class="">
                    <td>doc name2</td>
                    <td>case3</td>
                    <td>12/12/2013 12:30 upload by User1</td>
                    <td class="td-actions ">
                        <div class="hidden-phone visible-desktop btn-group">

                            <button class="btn btn-mini btn-info">
                                <i class="icon-edit bigger-120"></i>
                            </button>

                            <button class="btn btn-mini btn-danger">
                                <i class="icon-trash bigger-120"></i>
                            </button>

                            <button class="btn btn-mini btn-warning">
                                <i class="icon-flag bigger-120"></i>
                            </button>
                        </div>

                    </td>
                </tr>
                <tr class="">
                    <td>doc name4</td>
                    <td>case3</td>
                    <td>12/12/2013 12:30 upload by User3</td>
                    <td class="td-actions ">
                        <div class="hidden-phone visible-desktop btn-group">

                            <button class="btn btn-mini btn-info">
                                <i class="icon-edit bigger-120"></i>
                            </button>

                            <button class="btn btn-mini btn-danger">
                                <i class="icon-trash bigger-120"></i>
                            </button>

                            <button class="btn btn-mini btn-warning">
                                <i class="icon-flag bigger-120"></i>
                            </button>
                        </div>

                    </td>
                </tr>

                </tbody>
            </table>

        </div>
    </di>
    <script type="text/javascript">
        $(function() {

        });
    </script>

<?php Section::stop(); ?>
<?php echo render('admin::template.main'); ?>