<?php if((tally_option('header_social_icons') == 'on') && (tally_option('enable_social_icons') == 'on')): ?>
        <?php if(is_array(tally_option('social_icons'))): ?>
            <div class="tally-social-icons <?php echo $data['class']; ?>">
                <?php foreach(tally_option('social_icons') as $social_icon): ?>
                    <a href="<?php echo $social_icon['link']; ?>" class="<?php echo $social_icon['icon']; ?>" title="<?php echo $social_icon['title']; ?>" rel="nofollow" target="_blank">
                        <i class="fa <?php echo $social_icon['icon']; ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
<?php endif; echo tally_option('header_social_icons'); ?>