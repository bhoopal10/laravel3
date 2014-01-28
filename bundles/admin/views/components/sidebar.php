<div id="sidebar" style="position: fixed;margin-top: 46px">
    <div id="sidebar-shortcuts">
        <div id="sidebar-shortcuts-large">
            <button class="btn btn-small btn-success">
                <i class="icon-signal"></i>
            </button>

            <button class="btn btn-small btn-info">
                <i class="icon-pencil"></i>
            </button>

            <button class="btn btn-small btn-warning">
                <i class="icon-group"></i>
            </button>

            <button class="btn btn-small btn-danger">
                <i class="icon-cogs"></i>
            </button>
        </div>

        <div id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!--#sidebar-shortcuts-->

    <ul class="nav nav-list">
        <li class="active">
            <a href="<?php echo URL::to_route('Home'); ?>">
                <i class="icon-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
<!--            <script type="text/javascript">-->
<!--               $(function(){-->
<!--                   $(".dropdown-toggle").click(function(){-->
<!--                      if($(this).attr('dt').is)-->
<!--                   })-->
<!--               });-->
<!--            </script>-->
            <a href="#" class="dropdown-toggle" dt="ff">
                <i class="icon-time"></i>
                <span>Appointment</span>
                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="<?php echo URL::to_route('Appointment'); ?>">
                        <i class="icon-plus"></i>
                        Add Appointment
                    </a>
                </li>
                <li>
                    <a href="<?php echo URL::to_route('ViewAppointment'); ?>">
                        <i class="icon-plus"></i>
                        View Appointment
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-book"></i>
                <span>Documents</span>
                <b class="arrow icon-angle-down"></b>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo URL::to_route('Documents') ?>">
                        <i class="icon-plus"></i>
                        Add Document
                    </a>
                </li>
                <li>
                    <a href="<?php echo URL::to_route('ViewDocuments'); ?>">
                        <i class="icon-plus"></i>
                        View Document
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-tasks"></i>
                <span>Tasks</span>
                <b class="arrow icon-angle-down"></b>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo URL::to_route('Tasks') ?>">
                        <i class="icon-plus"></i>
                        Add Task
                    </a>
                </li>
                <li>
                    <a href="<?php echo URL::to_route('ViewTasks'); ?>">
                        <i class="icon-plus"></i>
                        View Task
                    </a>
                </li>
            </ul>
        </li>
             <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-group"></i>
                        <span>Lawyers</span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">


                        <li>
                            <a href="<?php echo URL::to_route('User') ?>">
                                <i class="icon-plus"></i>
                                Add Lawyer
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo URL::to_route('ViewUser') ?>">
                                <i class="icon-plus"></i>
                                View Lawyer
                            </a>
                        </li>

                    </ul>
                 </li>
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-briefcase"></i>
                <span>Cases</span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="<?php echo URL::to_route('Cases'); ?>">
                        <i class="icon-plus"></i>
                        Add Case
                    </a>
                </li>
                <li>
                    <a href="<?php echo URL::to_route('ViewCases'); ?>">
                        <i class="icon-plus"></i>
                        View Cases
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-user"></i>
                <span>Contacts</span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="<?php echo URL::to_route('Contacts'); ?>">
                        <i class="icon-plus"></i>
                        Add Contacts
                    </a>
                </li>
                <li>
                    <a href="<?php echo URL::to_route('ViewContacts'); ?>">
                        <i class="icon-plus"></i>
                        View Contacts
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-calendar"></i>
                <span>Calender</span>
                <b class="arrow icon-angle-down"></b>
            </a>
            <ul class="submenu">
                <li>
                <a href="<?php echo URL::to_route('Calender'); ?>">
                    <i class="icon-plus"></i>
                    Calender
                </a>
                </li>
            </ul>
        </li>



            <!--/.nav-list-->

