<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/14/16
 * Time: 11:43 PM
 */
?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title"><?php echo $this->lang->line('MENU_CONTACT'); ?></h1>
                        <p><?php echo $this->lang->line('CONTACT_US_PLACEHOLDER'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->

<section id="map-section">
    <div class="container">
        <div id="gmap"></div>
        <div class="contact-info">
            <h2 class="uppercase"><?php echo $this->lang->line('BASEAFOOD'); ?></h2>
            <address>
                <?php echo $this->lang->line('EMAIL'); ?>: <a href="mailto:<?php echo $this->lang->line('EMAIL_VALUE'); ?>"><?php echo $this->lang->line('EMAIL_VALUE'); ?></a> <br>
                <?php echo $this->lang->line('PHONE'); ?>: <?php echo $this->lang->line('PHONE_VALUE'); ?><br>
                <?php echo $this->lang->line('FAX'); ?>: <?php echo $this->lang->line('FAX_VALUE'); ?><br>
            </address>

            <h2><?php echo $this->lang->line('ADDRESS'); ?></h2>
            <address>
                <?php echo $this->lang->line('ADDRESS_VALUE'); ?>
            </address>
        </div>
    </div>
</section> <!--/#map-section-->

