<?php
/**
 * Created by PhpStorm.
 * User: TuanMap
 * Date: 2/27/14
 * Time: 10:52 AM
 */
?>
<div class="slide">
    <div class="tz_carousel_link">

        <span class="icon-link"></span>

        <a class="title"
           href="<?php echo $item->link_url; ?>"
           target="<?php echo $item->link_target; ?>"
           rel="<?php echo $item->link_follow; ?>">
            <?php echo $item->link_title ?>
        </a>
        <?php if ($des == 1) : ?>
            <div class="dv1">
                <span class="tz_carousel_description">
                    <?php if ($limittext) :
                        echo substr($item->intro, 3, $limittext);
                    else :
                        echo $item->intro;
                    endif;?>
                </span>
            </div>
        <?php endif; ?>
        <?php if ($date == 1 or $hits == 1 or $author_new == 1 or $cats_new == 1): ?>
            <div class="dv2">
                <?php if ($hits == 1) : ?>
                    <span class="tz_carousel_hits">
                        <?php echo JText::sprintf('MOD_TZ_NEWS_HIST_LIST', $item->hit) ?>
                    </span>
                <?php endif; ?>
                <?php if ($author_new == 1): ?>
                    <span class="tz_carousel_author">
                        <?php echo JText::sprintf('MOD_TZ_NEWS_AUTHOR', $item->author); ?>
                    </span>
                <?php endif; ?>

                <?php if ($cats_new == 1): ?>
                    <span class="tz_carousel_category">
                        <?php echo JText::sprintf('MOD_TZ_NEWS_CATEGORY', $item->category); ?>
                    </span>
                <?php endif; ?>
                <?php if ($date == 1) : ?>
                    <span class="tz_carousel_date">
                        <?php echo JText::sprintf('MOD_TZ_NEWS_DATE_ALL', JHtml::_('date', $item->created, JText::_('MOD_TZ_NEWS_DATE_FOMAT'))); ?>
                    </span>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="clearfix"></div>
</div>