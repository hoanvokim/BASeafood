<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
                <div class="social-icons pull-right">
                    <ul class="nav nav-pills">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li>
                            <input type="checkbox"
                                   checked data-toggle="toggle"
                                   data-style="slow"
                                   data-on="<i class='fa fa-language'></i> Eng &nbsp;&nbsp;"
                                   data-off="<i class='fa fa-language'></i> Vie &nbsp;&nbsp;"
                                   data-size="mini"/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <h1><img src="<?php echo base_url(); ?>/webresources/images/logo-plus.png" alt="logo"></h1>
                </a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="dropdown"><a href="<?php echo site_url('introduce'); ?>">Introduce <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="<?php echo site_url('introduce'); ?>">About</a></li>
                            <li><a href="<?php echo site_url('factory'); ?>">Factory</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="<?php echo site_url('product'); ?>">Product <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="<?php echo site_url('product_domestic'); ?>">Domestic</a></li>
                            <li><a href="<?php echo site_url('product_international'); ?>">International</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url('newsandevents'); ?>">News | Events</a></li>
                    <li class="dropdown"><a href="<?php echo site_url('partners'); ?>">Partners <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="<?php echo site_url('financial_report'); ?>">Financial Report</a></li>
                            <li><a href="<?php echo site_url('partners_meeting'); ?>">Partners Meeting</a></li>
                            <li><a href="<?php echo site_url('policy'); ?>">Company Policy</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="<?php echo site_url('photos'); ?>">Photos <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="<?php echo site_url('photos_general'); ?>">General</a></li>
                            <li><a href="<?php echo site_url('photos_factories'); ?>">Factory</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url('career'); ?>">Career</a> </li>
                    <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                </ul>
            </div>
            <div class="search">
                <form role="form">
                    <i class="fa fa-search"></i>
                    <div class="field-toggle">
                        <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
