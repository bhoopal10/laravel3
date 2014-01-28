<?php echo Section::start('contentWrapper'); ?>
<div id="page-content" class="clearfix">

    <div class="page-header position-relative">
        <h1>
            Appointment

            <small>
                <i class="icon-double-angle-right"></i>
                View Appointment
            </small>
        </h1>
    </div>
</div>

<div class="row-flow">

<div class="row-fluid">
<div class="span12">
    <a href="<?php echo URL::to_route('Appointment'); ?>">
        <button class="btn btn-file" style="float: right"><i class="icon-plus"></i>Add new appointment</button>
    </a>
<table id="table_bug_report" class="table table-striped table-bordered table-hover">
<thead>
<tr>
    <th class="center">
        <label>
            <input type="checkbox">
            <span class="lbl"></span>
        </label>
    </th>
    <th>Name</th>
    <th>Case Name</th>
    <th>Appointment Date and Time</th>
    <th>Location</th>
    <th>Status</th>
    <th></th>
</tr>
</thead>

<tbody>
<tr class="">
    <td class="center">
        <label>
            <input type="checkbox">
            <span class="lbl"></span>
        </label>
    </td>

    <td>xyz</td>
    <td>xyz case</td>
    <td>12/12/2013 12:30pm</td>
    <td>Location1</td>
    <td>pending</td>
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
    <td class="center">
        <label>
            <input type="checkbox">
            <span class="lbl"></span>
        </label>
    </td>

    <td>xyz</td>
    <td>xyz case</td>
    <td>12/12/2013 12:30pm</td>
    <td>Location1</td>
    <td>pending</td>
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
    <td class="center">
        <label>
            <input type="checkbox">
            <span class="lbl"></span>
        </label>
    </td>

    <td>xyz</td>
    <td>xyz case</td>
    <td>12/12/2013 12:30pm</td>
    <td>Location1</td>
    <td>pending</td>
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
</div><!--/span-->
</div>

</div>

<?php Section::stop(); ?>
<?php echo render('admin::template.main'); ?>
