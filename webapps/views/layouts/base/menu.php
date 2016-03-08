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
                            <?php
                            $attributes = array('id' => 'languageForm');
                            echo form_open('switchlanguage', $attributes);
                            ?>
                            <input type="hidden" name="redirurl" value="<? echo $_SERVER['REQUEST_URI']; ?>"/>
                            <input type="checkbox"
                                   id="languageToggle"
                                   name="languageToggle"
                                <?php
                                if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                    ?>
                                    checked
                                    <?php
                                }
                                ?>
                                   data-toggle="toggle"
                                   data-style="slow"
                                   data-on="<i class='fa fa-language'></i> Eng &nbsp;&nbsp;"
                                   data-off="<i class='fa fa-language'></i> Vie &nbsp;&nbsp;"
                                   data-size="mini"/>
                            </form
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

                <a class="navbar-brand" href="<?php echo site_url('home'); ?>">
                    <h1><img src="<?php echo base_url(); ?>/webresources/images/logo.png" alt="logo"></h1>
                </a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo site_url('home'); ?>"><?php echo $this->lang->line('MENU_HOME'); ?></a></li>
                    <li class="dropdown"><a href="<?php echo site_url('introduce'); ?>"><?php echo $this->lang->line('MENU_INTRODUCE'); ?> <i
                                class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="<?php echo site_url('introduce'); ?>"><?php echo $this->lang->line('MENU_ABOUT'); ?></a></li>
                            <li><a href="<?php echo site_url('factory'); ?>"><?php echo $this->lang->line('MENU_FACTORY'); ?></a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="<?php echo site_url('product'); ?>"><?php echo $this->lang->line('MENU_PRODUCT'); ?> <i
                                class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="<?php echo site_url('product_domestic'); ?>"><?php echo $this->lang->line('MENU_DOMESTIC'); ?></a></li>
                            <li><a href="<?php echo site_url('product_international'); ?>"><?php echo $this->lang->line('MENU_INTERNATIONAL'); ?></a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url('newsandevents'); ?>"><?php echo $this->lang->line('MENU_NEWS_EVENTS'); ?></a></li>
                    <li class="dropdown"><a href="<?php echo site_url('partners'); ?>"><?php echo $this->lang->line('MENU_PARTNERS'); ?> <i
                                class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="<?php echo site_url('financial_report'); ?>"><?php echo $this->lang->line('MENU_FINANCIAL_REPORT'); ?></a></li>
                            <li><a href="<?php echo site_url('partners_meeting'); ?>"><?php echo $this->lang->line('MENU_PARTNERS_MEETING'); ?></a></li>
                            <li><a href="<?php echo site_url('policy'); ?>"><?php echo $this->lang->line('MENU_COMPANY_POLICY'); ?></a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="<?php echo site_url('photos'); ?>"><?php echo $this->lang->line('MENU_PHOTOS'); ?> <i
                                class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="<?php echo site_url('photos_offices'); ?>"><?php echo $this->lang->line('MENU_OFFICES'); ?></a></li>
                            <li><a href="<?php echo site_url('photos_factories'); ?>"><?php echo $this->lang->line('MENU_FACTORIES'); ?></a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url('career'); ?>"><?php echo $this->lang->line('MENU_CAREER'); ?></a></li>
                    <li><a href="<?php echo site_url('contact'); ?>"><?php echo $this->lang->line('MENU_CONTACT'); ?></a></li>
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