<?php echo Section::start('page-header');?>
<div id="page-content" class="clearfix">
    <div class="page-header position-relative">
        <h1>
            Cases
            <small>
                <i class="icon-double-angle-right"></i>
                Add Case
            </small>
        </h1>
    </div>
</div>
<?php Section::stop();?>
<?php echo Section::start('contentWrapper');?>
<?php $status=Session::get('status');
if(isset($status)){ ?>
    <div class="alert-success">
        <span><?php echo $status; ?></span>
    </div>
<?php }?>



    <div  id="page-content" class="clearfix">
    <div class="span12">
     <div class="row-fluid">
    <div id="fuelux-wizard" class="row-fluid">

        <ul class="wizard-steps">

            <li data-target="#step1" class="active" style="min-width: 25%; max-width: 25%;">
                <span class="step">1</span>
                <span class="title">Case Detail</span>
            </li>

            <li data-target="#step2" style="min-width: 25%; max-width: 25%;">
                <span class="step">2</span>
                <span class="title">Advocate Detail</span>
            </li>

            <li data-target="#step3" style="min-width: 25%; max-width: 25%;">
                <span class="step">3</span>
                <span class="title">Brief Description</span>
            </li>

            <li data-target="#step4" style="min-width: 25%; max-width: 25%;">
                <span class="step">4</span>
                <span class="title">Other Info</span>
            </li>
        </ul>

    </div>
    <hr>

    <div class="step-content row-fluid position-relative">
    <div class="step-pane active" id="step1">
  <!--    Case Form-->


    <form class="form-horizontal" id="case-form">
       <div class="control-group">
            <label class="control-label" for="case_number">Case Number:</label>

            <div class="controls">
                <input type="text" name="case_number" value="" id="case_number"/>
                <span class="help-inline"><a href="#">Search CaseNumber</a></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="case_name">Case Name:</label>
            <div class="controls">
                <input type="text" name="case_name" value="" id="case_name"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="case_type">Case Type:</label>

            <div class="controls">
                <select name="case_type" value="" id="case_type">
                    <option value="">Case Type</option>
                    </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="case_subject">Case Subject:</label>
            <div class="controls">
                <select name="case_subject" value="" id="case_subject">
                    <option value="">Case Subject</option>
                    </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="client_name">Client Name:</label>

            <div class="controls">
                <select name="client_name" value="" id="client_name" >
                    <option value="">Client Name</option>
                    </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="brief_given_by">Brief Given By:</label>

            <div class="controls">
                <input type="text" name="brief_given_by" value="" id="brief_given_by"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="date">Date of Filling:</label>

            <div class="controls">
                <input type="text" name="date" value="" id="date" class="date-picker">
            </div>
        </div>
    </form>
    </div>

<!--    case Form End-->
<!--    Lawyer Assignment   Begins -->

    <div class="step-pane" id="step2">
        <div class="row-fluid">
            <form class="form-horizontal" action="#" id="assign-form" method="post">
                <div class="control-group">
                    <label class="control-label" for="advocate">Advocate:</label>
                    <div class="controls">
                        <select name="advocate" id="advocate">
                            <option value="">Select Advocate</option>
                        </select>
                        <span><a href="#">Add New Advocates</a></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="opp_advocate">Opp. Advocate:</label>
                    <div class="controls">
                        <select name="opp_advocate" id="assign_advocate">
                            <option value="">Select Advocate</option>
                            </select>
                        <span><a href="#">Add New Advocates</a></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="opp_party_name">Opp.Party Name:</label>
                    <div class="controls">
                        <select name="opp_party_name" id="opp_party_name">
                            <option value="">Opp.Party Name</option>
                            </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="party_type">Party Type:</label>
                    <div class="controls">
                        <select name="party_type" id="party_type"/>
                        <option value="">Party Type</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="opp_party_type">Opp.Party Type:</label>
                    <div class="controls">
                        <select name="opp_party_type" id="opp_party_type">
                            <option value="">Opp.Party Type</option>
                            </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="court_name">CourtName:</label>
                    <div class="controls">
                        <select name="court_name" id="court_name">
                            <option value="">Select Court</option>
                            </select>
                        <span><a href="#">Add Court</a></span>
                    </div>
                </div>

            </form>

        </div>
    </div>

<!--    Lawyer Assignment End-->

<!--    Profile Form Begin-->


    <div class="step-pane" id="step3">
        <div class="row-fluid">
            <form action="#" method="post" class="form-horizontal">
                <div class="control-group">
                    <label for="claim" class="control-label">Claim</label>
                    <div class="controls">
                        <input type="text" name="claim" id="claim"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="citation">Citation Referred/ Title</label>
                    <div class="controls">
                        <textarea name="citation" id="citation" rows="2"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="case_description">Case description</label>
                    <div class="controls">
                        <textarea name="case_description" id="case_description" rows="2"></textarea>
                    </div>
                </div>
            </form>

        </div>
    </div>



    <div class="step-pane" id="step4">
        <div class="center">
            <h3 class="green">Confirmation!</h3>
            Your Client detail add to! Click finish to continue!
        </div>
    </div>
    </div>

    <hr>
    <div class="row-fluid wizard-actions">
        <button class="btn btn-prev">
            <i class="icon-arrow-left"></i>
            Prev
        </button>

        <button class="btn btn-success btn-next" data-last="Finish ">
            Next
            <i class="icon-arrow-right icon-on-right"></i>
        </button>
    </div>
    </div>
    </div>
    </div>
<?php Section::stop();?>
<?php echo Section::start('javascript-footer'); ?>
    <script type="text/javascript">
        $('.date-picker').datepicker();

        $(function() {



            $('[data-rel=tooltip]').tooltip();

            $(".chzn-select").css('width','150px').chosen({allow_single_deselect:true , no_results_text: "No such state!"})
                .on('change', function(){
                    $(this).closest('form').validate().element($(this));
                });


            var $validation = false;
            $('#fuelux-wizard').ace_wizard().on('change' , function(e, info){
                if(info.step == 1 && $validation) {
                    if(!$('#case-form').valid()) return false;
                }
            }).on('finished', function(e) {




                });



            $('#skip-validation').removeAttr('checked').on('click', function(){
                $validation = this.checked;
                if(this.checked) {
                    $('#case-form').show();
                    $('#profile-form').show();
                }
                else {
                    $('#validation-form').hide();
                    $('#sample-form').show();
                }
            });


            //documentation : http://docs.jquery.com/Plugins/Validation/validate


            $.mask.definitions['~']='[+-]';
            $('#phone').mask('(999) 999-9999');
            $('#mobile').mask('9999999999');

            jQuery.validator.addMethod("phone", function (value, element) {
                return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
            }, "Enter a valid phone number.");
            jQuery.validator.addMethod("mobile",function (value,element){
               return this.optional(element) || /^d{10}?$/.test(value);
            },"Enter Valid Mobile number");

            $('#profile-form').validate({
                errorElement: 'span',
                errorClass: 'help-inline',
                focusInvalid: false,
                rules: {
                    email: {
                        required: true,
                        email:true
                    },

                    password: {
                        required: true,
                        minlength: 5
                    },
                    password2: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password"
                    },
                    name: {
                        required: true
                    },
                    phone: {
                        required: true,
                        phone: 'required'
                    },
                    url: {
                        required: true,
                        url: true
                    },
                    comment: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    platform: {
                        required: true
                    },
                    subscription: {
                        required: true
                    },
                    gender: 'required',
                    agree: 'required'
                },

                messages: {
                    email: {
                        required: "Please provide a valid email.",
                        email: "Please provide a valid email."
                    },
                    password: {
                        required: "Please specify a password.",
                        minlength: "Please specify a secure password."
                    },

                    subscription: "Please choose at least one option",
                    gender: "Please choose gender",
                    agree: "Please accept our policy"
                },

                invalidHandler: function (event, validator) { //display error alert on form submit
                    $('.alert-error', $('.login-form')).show();
                },

                highlight: function (e) {
                    $(e).closest('.control-group').removeClass('info').addClass('error');
                },

                success: function (e) {
                    $(e).closest('.control-group').removeClass('error').addClass('info');
                    $(e).remove();
                },

                errorPlacement: function (error, element) {
                    if(element.is(':checkbox') || element.is(':radio')) {
                        var controls = element.closest('.controls');
                        if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                        else error.insertAfter(element.nextAll('.lbl').eq(0));
                    }
                    else if(element.is('.chzn-select')) {
                        error.insertAfter(element.nextAll('[class*="chzn-container"]').eq(0));
                    }
                    else error.insertAfter(element);
                },

                submitHandler: function (form) {
                },
                invalidHandler: function (form) {
                }
            });

        });

    </script>
<?php Section::stop(); ?>


<?php echo render('admin::template.main'); ?>