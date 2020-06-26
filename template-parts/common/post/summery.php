<div class="entry__text">
    <div class="entry__header">
        <div class="entry__date">
            <a href="<?php esc_html(the_permalink()); ?>"><?php echo esc_html( get_the_date() ); ?></a>
        </div>
        <h1 class="entry__title"><a href="<?php esc_url( the_permalink() );?>"><?php esc_html( the_title() ); ?> </a></h1>

    </div>
    <div class="entry__excerpt">
        <?php esc_html( the_excerpt() );?>
    </div>
    <div class="entry__meta">
        <span class="entry__meta-links">
            <?php echo esc_html( get_the_tag_list() ); ?>
        </span>
    </div>
</div>