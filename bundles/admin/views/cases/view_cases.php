<?php echo Section::start('contentWrapper');?>
    <div class="clear-fix" id="page-content">
        <div class="page-header position-relative">
            <h1>
                Case
                <small>
                    <i class="icon-double-angle-right"></i>
                    View Cases
                </small>
            </h1>

        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <a href="<?php echo URL::to_route('Cases'); ?>">
                <button class="btn btn-file" style="float: right"><i class="icon-plus"></i>Add new case</button>
            </a>
            <table id="table_bug_report" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>Case Name</th>
                    <th>Case Number</th>
                    <th>Practice Area</th>
                    <th>Client Name</th>
                    <th>Lawyer</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <tr class="">
                    <td>case5</td>
                    <td>112/44</td>
                    <td>Accident</td>
                    <td>client name3</td>
                    <td>Lawyer5</td>
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
                    <td>case9</td>
                    <td>112/14</td>
                    <td>Personal Injury </td>
                    <td>client name9</td>
                    <td>Lawyer2</td>
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
                    <td>case3</td>
                    <td>112/44</td>
                    <td>Personal Injury </td>
                    <td>client name3</td>
                    <td>Lawyer4</td>
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