<?php echo Section::start('contentWrapper');?>
    <div class="clear-fix" id="page-content">
        <div class="page-header position-relative">
            <h1>
                Lawyer
                <small>
                    <i class="icon-double-angle-right"></i>
                    View Lawyers
                </small>
            </h1>

        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <a href="<?php echo URL::to_route('User'); ?>">
                <button class="btn btn-file" style="float: right"><i class="icon-plus"></i>Add new Lawyer</button>
            </a>
            <table id="table_bug_report" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>Lawyer Name</th>
                    <th>Lawyer ID</th>
                    <th>Lawyer Specialist</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <tr class="">
                    <td>lawyer1</td>
                    <td>112</td>
                    <td>Civil</td>
                    <td>xyz@example.com</td>
                    <td>1232323234</td>
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
                    <td>lawyer3</td>
                    <td>1345</td>
                    <td>RealEstate </td>
                    <td>xzt@example.com</td>
                    <td>9098989898</td>
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
                    <td>lawyer4</td>
                    <td>454</td>
                    <td>Land case </td>
                    <td>axzy@example.com</td>
                    <td>9898989898</td>
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
    </div>
    <script type="text/javascript">
        $(function() {

        });
    </script>

<?php Section::stop(); ?>
<?php echo render('admin::template.main'); ?>