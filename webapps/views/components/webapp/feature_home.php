<ul class="ul-feature">
    <?php  foreach ($features as $feature){ ?>
        <li> <a>

                <span class="feature-icon"><i class="<?php echo $feature->icon; ?>"></i></span>
                <span class="feature-info"><?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                        echo $feature->en_name;
                    }
                    else {
                        echo $feature->vi_name;
                    } ?></span>

            </a>
        </li>
    <?php } ?>
</ul>