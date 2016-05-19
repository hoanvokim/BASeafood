<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/4/16
 * Time: 12:48 AM
 */
?>
<?php foreach ($news as $new) { ?>
    <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInDown" data-wow-delay=".3s">
        <div class="single-blog single-column">
            <div class="post-thumb">
                <a href="<?php echo base_url(); ?>news-details/view/<?php echo $new->id ?>"> <img src="<?php
                    if (strpos($new->url_attached_file, 'pdf') !== false) {
                        echo base_url() . 'webresources/images/files/pdf.png';
                    } else if (strpos($new->url_attached_file, 'jpg') !== false) {
                        echo $new->url_attached_file;
                    } else {
                        echo base_url() . 'webresources/images/files/news.png';
                    }
                    ?>" class="<?php
                   if (strpos($new->url_attached_file, 'jpg') !== false) {
                        echo 'news--images';
                    } else {
                        echo 'icon--images';
                    }
                    ?>" alt="blog"/></a>

                <?php if (strpos($new->url_attached_file, 'pdf') !== false) { ?>
                    <a href="<?php echo $new->url_attached_file ?>">
                        <i class="fa fa-download news__download"></i>
                    </a>
                <?php } ?>
            </div>
        </div><!-- end image wrapper -->
        <div class="post-content overflow">
            <h2 class="post-title bold"><a
                    href="<?php echo base_url(); ?>news-details/view/<?php echo $new->id ?>">
                    <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                        echo $new->en_title;
                    } else {
                        echo $new->vi_title;
                    } ?>
                </a></h2>
            <a href="<?php echo base_url(); ?>news-details/view/<?php echo $new->id ?>"
               class="read-more">View More</a>
            <div class="post-bottom overflow">
                </ul>
            </div>
        </div><!--/ end media body -->
    </div><!--/ end media -->
<?php } ?>
