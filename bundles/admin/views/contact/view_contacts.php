<?php echo Section::start('contentWrapper');?>
<div class="clear-fix" id="page-content">
    <div class="page-header position-relative">
        <h1>
            Contact
            <small>
                <i class="icon-double-angle-right"></i>
                Contacts list
            </small>
        </h1>

    </div>
</div>

<div class="row-fluid">
    <select name="group" id="group" style="float: left">
        <option value="">All groups</option>
    </select>

    <a href="<?php echo URL::to_route('Contacts'); ?>">
        <button class="btn btn-file" style="float: right"><i class="icon-plus"></i>Add new contact</button>

    </a>
        <table id="table_report" class="table table-striped table-bordered table-hover dataTable" aria-describedby="table_report_info">
            <thead>
            <tr role="row">
                <th class="center sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 50px;" aria-label="">
                    <label>
                        <input type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </th>
                <th class="sorting" role="columnheader" tabindex="0" rowspan="1" colspan="1" style="width: 152px;">Name</th>
                <th class="sorting" role="columnheader" tabindex="0"  rowspan="1" colspan="1" style="width: 109px;">Email</th>
                <th class="hidden-480 sorting_asc" role="columnheader" tabindex="0"  rowspan="1" colspan="1" style="width: 120px">Mobile</th>
                <th class="hidden-phone sorting" role="columnheader" tabindex="0" rowspan="1" colspan="1" style="width: 177px;">
                    <i class="icon-time hidden-phone"></i>
                    Group
                </th>
                <th class="hidden-480 sorting" role="columnheader" tabindex="0" rowspan="1" colspan="1" style="width: 149px;">City</th>
                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 242px;" aria-label=""></th>
            </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
            <tr class="odd">
                <td class="center">
                    <label>
                        <input type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </td>

                <td class=" ">
                    xyz
                </td>
                <td class=" ">xyz@xyz.com</td>
                <td class="hidden-480  sorting_1">9898987898</td>
                <td class="hidden-phone">Group2</td>

                <td class="hidden-480">
                    city1
                </td>

                <td class="td-actions ">
                    <div class="hidden-phone visible-desktop btn-group">
                        <button class="btn btn-mini btn-success">
                            <i class="icon-ok bigger-120"></i>
                        </button>

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
            <tr class="odd">
                <td class="center">
                    <label>
                        <input type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </td>

                <td class=" ">
                    xyz
                </td>
                <td class=" ">xyz@xyz.com</td>
                <td class="hidden-480  sorting_1">9898987898</td>
                <td class="hidden-phone">Group</td>

                <td class="hidden-480">
                    city1
                </td>

                <td class="td-actions ">
                    <div class="hidden-phone visible-desktop btn-group">
                        <button class="btn btn-mini btn-success">
                            <i class="icon-ok bigger-120"></i>
                        </button>

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
<?php Section::stop(); ?>
<?php echo render('admin::template.main'); ?>