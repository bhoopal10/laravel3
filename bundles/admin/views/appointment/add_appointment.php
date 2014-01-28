<?php echo Section::start('contentWrapper'); ?>
<div class="row-fluid">
<div id="page-content" class="clearfix">
    <div class="page-header position-relative">
        <h1>
            Appointment

            <small>
                <i class="icon-double-angle-right"></i>
                Add Appointment
            </small>
        </h1>
    </div>
</div>
<form class="form-horizontal" action="#">
    <div class="control-group">
        <label class="control-label" for="caselink">Case Link:</label>
        <div class="controls">
            <select name="caselink" id="caselink">
                <option value="">Select Case</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="event_name">Event Name:</label>
        <div class="controls">
            <input type="text" id="event_name" name="event_name" />
        </div>
    </div>
    <div class="control-group">
        <label for="lawyer" class="control-label">Handles:</label>
        <div class="controls">
            <select id="multiselect" name="lawyer[]" multiple="multiple">
                <option value="">law1</option>
                <option value="">law2</option>
                <option value="">law3</option>
                <option value="">law4</option>
                </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="from_date">From Date:</label>
        <div class="controls">
            <input type="text" name="from_date" id="from_date" class="span2 date-picker" data-date-format="dd-mm-yyyy">

                <input id="timepicker1" type="text" class="span1 input-small" value="08:00 am" style="width: 73px" />

            </div>
        </div>
    <div class="control-group">
        <label class="control-label" for="to_date">To Date:</label>
        <div class="controls">
           <input type="text" name="to_date" id="to_date" class="span2 date-picker">
            <input type="text" name="timepicker2" id="timepicker2" class=" span1 timepicker2" value="08:00 pm" style="width: 73px"/>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="location">Location</label>
        <div class="controls">
            <select name="location" id="location">
                <option value="">location</option>
            </select>
            <span><a href="#" id="add_location">Click Here</a> to add new location</span>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button class="btn btn-primary" type="submit">FixAppointment</button>
            <button class="btn btn-danger" type="reset">Reset</button>
        </div>
    </div>

</form>
<div id="location-dialog" style="display: none">
    <form class="form-inline" action="#">
        <div class="control-group">
            <label class="control-label" for="location_name">Location Name:</label>
            <div class="controls">
                <input type="text" name="location_name" id="location_name"/>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button class="btn btn-primary" type="submit">Add Location</button>

            </div>
        </div>
    </form>
</div>

</div>
<script type="text/javascript">

    $('#add_location').on('click',function()
    {
        bootbox.dialog(
            $('#location-dialog').show(),[{
                "label" : "Close",
                "class" : "btn-small btn-primary"
                    }]
        )

    });

    $('.date-picker').datepicker();


</script>



<?php Section::stop(); ?>
<?php echo render('admin::template.main'); ?>
