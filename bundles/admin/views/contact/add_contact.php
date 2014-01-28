<?php echo Section::start('contentWrapper'); ?>
    <div class="clear-fix" id="page-content">
        <div class="page-header position-relative">
            <h1>
                Contact
                <small>
                    <i class="icon-double-angle-right"></i>
                    Add Contacts
                </small>
            </h1>

        </div>
    </div>

    <div class="row-fluid" xmlns="http://www.w3.org/1999/html">
        <div class="span12">

                <div>
                            <ul class="nav nav-tabs" id="myTab">
                            <li class="active">
                                <a data-toggle="tab" href="#contact-tab">Add Contact</a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#group-tab">Add Group</a>
                            </li>
                            </ul>

                </div>


                        <div class="tab-content">
<!--                        Add Contact Tab Beigns-->
                            <div id="contact-tab" class="tab-pane in active">

                                <form action="#" class="form-horizontal">

                                    <div class="control-group">
                                        <label for="first_name" class="control-label">First Name</label>
                                        <div class="controls">
                                            <input type="text" name="first_name" id="first_name"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label for="last_name" class="control-label">Last Name</label>
                                        <div class="controls">
                                            <input type="text" name="last_name" id="last_name"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label for="mobile" class="control-label">Mobile:</label>
                                        <div class="controls">
                                            <input type="text" name="mobile" id="mobile"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label for="phone" class="control-label">Phone:</label>
                                        <div class="controls">
                                            <input type="text" name="phone" id="phone"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                            <label for="email" class="control-label">Email-ID:</label>
                                            <div class="controls">
                                                <input type="text" name="email" id="email"/>
                                            </div>
                                    </div>

                                    <div class="control-group">
                                        <label for="group" class="control-label">Group:</label>
                                        <div class="controls">
                                            <select name="group" id="group">
                                                <option value="">Select Group</option>
                                                </select>
                                            <span>
                                                <a href="#" id="add_new_group">Add new group</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label for="city" class="control-label">City:</label>
                                        <div class="controls">
                                            <select name="city" id="city">
                                            <option value="">Select City</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label for="address" class="control-label">Address</label>
                                        <div class="controls">
                                            <textarea name="address" id="address"  rows="2">

                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls">
                                            <button class="btn btn-primary" type="submit">Add Contact</button>
                                            <button class="btn btn-danger" type="reset">Reset</button>

                                        </div>
                                    </div>

                                </form>
                            </div>
<!--                            Add Contact End     -->
<!--                                 Group tab Begin                                                       -->
                            <div id="group-tab" class="tab-pane">
                                <form action="#" class="form-horizontal">
                                    <div class="control-group">
                                        <label for="group_name" class="control-label">Group Name:</label>
                                        <div class="controls">
                                            <input type="text" name="group_name" id="group_name"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label for="group_description" class="control-label">Group Description:</label>
                                        <div class="controls">
                                            <input type="text" name="group_description" id="group_description"/>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <div class="controls">
                                            <button class="btn btn-primary">Add Group</button>

                                        </div>
                                    </div>


                                </form>

                            </div>
<!--                            Ends Group-->
<!--                              View Contacts                                -->
                            <div id="view-tab" class="tab-pane">
                            <div class="row-fluid">
                            <h3 class="header smaller lighter blue">Contacts List</h3>
                            <div id="table_report_wrapper" class="dataTables_wrapper" role="grid">
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
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="dataTables_info" id="table_report_info">Showing 1 to 20 of 25 entries</div>
                                    </div>
                                    <div class="span6">
                                        <div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev"><a href="#"><i class="icon-double-angle-left"></i></a></li><li><a href="#">1</a></li><li><a href="#">2</a></li><li class="active"><a href="#">3</a></li>
                                                <li class="next disabled"><a href="#">
                                                        <i class="icon-double-angle-right"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>


                            </div>
<!--                        Dialog Group beign-->
                            <div id="group-dialog" class="widget-box">
                                <div class="widget-header"><h5>Add Group</h5></div>
                                <div class="widget-body"><br>
                                    <form action="#" class="form-horizontal">
                                        <div class="control-group">
                                            <label for="group_name" class="control-label">Group Name:</label>
                                            <div class="controls">
                                                <input type="text" name="group_name" id="group_name"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="group_description" class="control-label">Group Description:</label>
                                            <div class="controls">
                                                <input type="text" name="group_description" id="group_description"/>
                                            </div>
                                        </div>


                                        <div class="control-group">
                                            <div class="controls">
                                                <button class="btn btn-primary">Add Group</button>

                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#group-dialog').hide();
        $('#add_new_group').on('click',function(){
            bootbox.dialog(
                $('#group-dialog').show()

            );
        });
    </script>


<?php Section::stop(); ?>
<?php echo render('admin::template.main'); ?>