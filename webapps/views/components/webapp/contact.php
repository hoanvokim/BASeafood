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
                    <div class="col-sm-4 col-md-4">
                        <a href="mailto:tuongf34@gmail.com"><img
                                src="<?php echo base_url(); ?>/webresources/images/tuong.png"
                                class="img-responsive inline" alt="" style="padding: 20px; max-width: 140px;"></a>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <a href="mailto:phuongf34@gmail.com"><img
                                src="<?php echo base_url(); ?>/webresources/images/phuong.png"
                                class="img-responsive inline" alt="" style="padding: 20px; max-width: 140px;"></a>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <a href="mailto:huyenf34@gmail.com"> <img
                                src="<?php echo base_url(); ?>/webresources/images/huyen.png"
                                class="img-responsive inline" alt="" style="padding: 20px; max-width: 140px;"></a>
                    </div>
                </div>
            </div>
            <div style="margin-top: 20px;">
                <div class="contact-form bottom">
                    <h2><?php echo $this->lang->line('SEND_MESSAGE'); ?></h2>
                    <form class="contact-form" id="ContactForm" method="post"
                          action="<?php echo base_url().'sentmail-contact-submit'; ?>">
                    <div class="form-group">
                        <input type="text" name="consult_name" class="form-control" required="required"
                               placeholder="<?php echo $this->lang->line('NAME'); ?>">
                    </div>
                    <div class="form-group">
                        <input type="email" name="consult_email" class="form-control" required="required"
                               placeholder="<?php echo $this->lang->line('EMAIL'); ?>">
                    </div>
                    <div class="form-group">
                            <textarea name="consult_content" id="message" required="required" class="form-control" rows="8"
                                      placeholder="<?php echo $this->lang->line('TEXT'); ?>"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send_submit" class="btn btn-submit"
                               value="<?php echo $this->lang->line('SEND'); ?>">
                    </div>
                    </form>
                    <p class="message <?php echo $status; ?>"><?php echo $status; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>