<?php echo Section::start('page-header');?>
    <div id="page-content" class="clearfix">
        <div class="page-header position-relative">
            <h1>
                Dashboard
                <small>
                    <i class="icon-double-angle-right"></i>
                    overview &amp; stats
                </small>
            </h1>
        </div>
    </div>
<?php Section::stop();?>
<?php echo Section::start('contentWrapper'); ?>
<div class="row-fluid">
    <div class="span7 infobox-container">
        <div class="infobox infobox-green  ">
            <div class="infobox-icon">
                <i class="icon-comments"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">32</span>
                <div class="infobox-content">comments + 2 reviews</div>
            </div>
            <div class="stat stat-success">8%</div>
        </div>

        <div class="infobox infobox-blue  ">
            <div class="infobox-icon">
                <i class="icon-twitter"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">11</span>
                <div class="infobox-content">new followers</div>
            </div>

            <div class="badge badge-success">
                +32%
                <i class="icon-arrow-up"></i>
            </div>
        </div>

        <div class="infobox infobox-pink  ">
            <div class="infobox-icon">
                <i class="icon-group"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">8</span>
                <div class="infobox-content">new clients</div>
            </div>
            <div class="stat stat-important">+4%</div>
        </div>

        <div class="infobox infobox-red  ">
            <div class="infobox-icon">
                <i class="icon-legal"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">7</span>
                <div class="infobox-content">Lawyers</div>
            </div>
        </div>

        <div class="infobox infobox-orange2  ">
            <div class="infobox-chart">
                <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">6,251</span>
                <div class="infobox-content">pageviews</div>
            </div>

            <div class="badge badge-success">
                7.2%
                <i class="icon-arrow-up"></i>
            </div>
        </div>

        <div class="infobox infobox-blue2  ">
            <div class="infobox-progress">
                <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                    <span class="percent">42</span>%
                </div>
            </div>

            <div class="infobox-data">
                <span class="infobox-text">Cases closed</span>


            </div>
        </div>

        <div class="space-6"></div>

        <div class="infobox infobox-green infobox-small infobox-dark">
            <div class="infobox-progress">
                <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                    <span class="percent">61</span>%
                </div>
            </div>

            <div class="infobox-data">
                <div class="infobox-content">Task</div>
                <div class="infobox-content">Completion</div>
            </div>
        </div>

        <div class="infobox infobox-blue infobox-small infobox-dark">
            <div class="infobox-chart">
                <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
            </div>

            <div class="infobox-data">
                <div class="infobox-content">Earnings</div>
                <div class="infobox-content">$32,000</div>
            </div>
        </div>

       
    </div>
</div>



<?php Section::stop(); ?>

<?php echo render('admin::template.main') ?>