<?php if (function_exists('wc_get_product') && (is_cart() || is_shop() || is_product())) { the_content(); } else { ?><?php global $post;
if (!theme_the_post()) return;
 $post0 = $post;
 ?>
<?php $skip_min_height = false; ?><section class="u-align-center u-clearfix u-section-1" id="sec-789f">
  <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1"><!--post_details--><!--post_details_options_json--><!--{"source":""}--><!--/post_details_options_json--><!--blog_post-->
    <div class="u-container-style u-expanded-width u-post-details u-post-details-1">
      <div class="u-container-layout u-valign-middle u-container-layout-1"><!--blog_post_image-->
        <?php if ($post0 !== null) { ?><?php
                            $post_image = theme_get_post_image(array('class' => 'u-blog-control u-expanded-width u-image u-image-default u-image-1', 'default' => '/images/1.jpeg'));
                            if ($post_image) echo $post_image; else { echo '<div class="hidden-image"></div>'; $skip_min_height = true; } ?><?php } ?><!--/blog_post_image--><!--blog_post_header-->
        <?php if ($post0 !== null) { ?><h2 class="u-blog-control u-text u-text-1">
          <?php if (!is_singular()): ?><a class="u-post-header-link" href="<?php the_permalink(); ?>"><?php endif; ?><?php the_title(); ?><?php if (!is_singular()): ?></a><?php endif; ?>
        </h2><?php } ?><!--/blog_post_header--><!--blog_post_metadata-->
        <div class="u-blog-control u-metadata u-metadata-1"><!--blog_post_metadata_date-->
          <?php if ($post0 !== null) { ?><span class="u-meta-date u-meta-icon"><?php if($post->post_type !== "page"){ echo get_the_date(); }?></span><?php } ?><!--/blog_post_metadata_date--><!--blog_post_metadata_category-->
          <?php if ($post0 !== null) { ?><?php $categories = theme_get_category_list(); if ($categories):?><span class="u-meta-category u-meta-icon"><?php echo $categories; ?></span><?php endif; ?><?php } ?><!--/blog_post_metadata_category--><!--blog_post_metadata_comments-->
          <?php if ($post0 !== null) { ?><?php if (comments_open()): ?><span class="u-meta-comments u-meta-icon"><a class="u-textlink" href="<?php echo get_comments_link(); ?>">
                                        <?php _e(sprintf(__('Comments (%d)', 'aboutreske_tk_v_2_0'), (int)get_comments_number())); ?>
                                   </a></span><?php endif; ?><?php } ?><!--/blog_post_metadata_comments-->
        </div><!--/blog_post_metadata--><!--blog_post_content-->
        <?php if ($post0 !== null) { ?><div class="u-align-justify u-blog-control u-post-content u-text u-text-2"><?php echo is_singular() ? theme_get_content() : theme_get_excerpt(); ?></div><?php } ?><!--/blog_post_content-->
      </div>
    </div><!--/blog_post--><!--/post_details-->
  </div>
</section><?php if ($skip_min_height) { echo "<style> .u-section-1, .u-section-1 .u-sheet {min-height: auto;}</style>"; } ?>
<?php } ?>