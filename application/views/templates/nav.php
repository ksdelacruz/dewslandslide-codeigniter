<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?php echo base_url(); ?>home"><span><img src="/images/DEWSL.png" /></span> <strong>DEWS-L Project</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-nav">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Monitoring</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Site Alerts</li>
                        <li><a href="<?php echo base_url(); ?>dashboard">Monitoring Dashboard</a></li>
                        <li><a href="<?php echo base_url(); ?>monitoring/release_form">Early Warning Release Form</a></li>
                        <li><a href="<?php echo base_url(); ?>monitoring/events">Monitoring Events Table</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Communication</li>
                        <li><a href="<?php echo base_url(); ?>gold/chatterbox">Chatter Box</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>monitoring/faq">Primer and FAQs</a></li>
                    </ul>
                </li>
                
                <li class="dropdown dropdown-nav">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Analysis</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Sensors and Rain Gauges</li>
                        <li><a href="<?php echo base_url(); ?>gold/monitoring">Overview</a></li>
                        <li><a href="<?php echo base_url(); ?>gold/site">Site Level</a></li>
                        <li><a href="<?php echo base_url(); ?>gold/node">Node Level</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>gold/chartlist">Subsurface Data</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>gold/GroundMeas">Surficial Data</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Communication</li>
                        <li><a href="<?php echo base_url(); ?>gold/responsetracker">Response Tracker</a></li>
                    </ul>
                </li>

                <li class="dropdown dropdown-nav">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Node Status</li>
                        <li><a href="<?php echo base_url(); ?>gold/nodereport">Update Form</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Accomplishment and Narratives</li>
                        <li><a href="<?php echo base_url(); ?>reports/accomplishment/form">Filing Form and Report Generator</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Site Maintenance</li>
                        <li><a href="<?php echo base_url(); ?>gold/sitemaintenancereport">Filing Form</a></li>
                        <li><a href="<?php echo base_url(); ?>gold/sitemaintenancereport/all">All Reports Table</a></li>
                    </ul>
                </li>

                 <li class="dropdown dropdown-nav">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&ensp;<?php echo $first_name; ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><small><span class="glyphicon glyphicon-user"></span></small>&ensp;Profile</a></li>
                        <li><a href="#"><small><span class="glyphicon glyphicon-envelope"></span></small>&ensp;Inbox</a></li>
                        <li><a href="#"><small><span class="glyphicon glyphicon-cog"></span></small>&ensp;Settings</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="logout"><small><span class="glyphicon glyphicon-off"></span></small>&ensp;Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>