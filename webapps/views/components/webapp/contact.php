<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/14/16
 * Time: 11:43 PM
 */
?>


<section id="video">

</section>

<div id="map" style="text-align: center" class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12" id="maps-section">
            <h3><img src="<?php echo base_url() . 'webresources/images/maps.png'; ?>"/>
                <span><?php echo $this->lang->line('GOOGLE_MAP_TITLE'); ?></span></h3>
            <div class="overlay" onClick="style.pointerEvents='none'"></div>
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.1879392011488!2d107.17178816410873!3d10.485845992922625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDI5JzA5LjEiTiAxMDfCsDEwJzI2LjEiRQ!5e0!3m2!1sen!2s!4v1466955062737"
                    width="100%" height="450px" frameborder="1" style="border:none;" allowfullscreen></iframe>
            </div>
            <div class="contact-info text-right">
                <h2 class="uppercase"><?php echo $this->lang->line('BASEAFOOD1'); ?></h2>
                <h4><?php echo $this->lang->line('ADDRESS'); ?></h4>
                <address>
                    <?php echo $this->lang->line('ADDRESS_VALUE'); ?>
                </address>
            </div>
            </address>
        </div>
        <div class="col-md-5 col-sm-12">
            <div style="margin-top: 20px;">
                <p>
                    <i class="ion ion-ios-location-outline"></i> <img
                        src="<?php echo base_url() . 'webresources/images/contact-us.png'; ?>" style="height: 84px;"/>
                <span class="uppercase">
                    <?php echo $this->lang->line('PERSONAL_CONTACT'); ?>
                </span>
                </p>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <a href="mailto:tuongf34@gmail.com"><img
                                src="<?php echo base_url(); ?>/webresources/images/tuong.jpg"
                                class="img-responsive inline" alt="" style="padding: 20px; max-width: 300px;"></a>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <a href="mailto:phuongf34@gmail.com"><img
                                src="<?php echo base_url(); ?>/webresources/images/phuong.jpg"
                                class="img-responsive inline" alt="" style="padding: 20px; max-width: 300px;"></a>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <a href="mailto:huyenf34@gmail.com"> <img
                                src="<?php echo base_url(); ?>/webresources/images/huyen.jpg"
                                class="img-responsive inline" alt="" style="padding: 20px; max-width: 300px;"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>