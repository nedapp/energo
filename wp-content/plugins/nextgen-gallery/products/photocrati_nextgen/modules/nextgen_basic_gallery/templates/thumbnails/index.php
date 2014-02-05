<?php

$this->start_element('nextgen_gallery.gallery_container', 'container', $displayed_gallery);

?>
<div
	class="ngg-galleryoverview<?php if (!intval($ajax_pagination)) echo ' ngg-ajax-pagination-none'; ?>"
	id="ngg-gallery-<?php echo_h($displayed_gallery_id)?>-<?php echo_h($current_page)?>">
	<!-- nemanja -->
<div class="gallery-arrow left"></div>
<div class="gallery-slider-wrapper">
<div class="gallery-slider">
	<!-- //nemanja-->
    <?php if (!empty($slideshow_link)): ?>
	<div class="slideshowlink">
        <a href='<?php echo $slideshow_link ?>'><?php echo $slideshow_link_text ?></a>
		
	</div>
	<?php endif ?>

	<?php if ($show_piclens_link): ?>
	<!-- Piclense link -->
	<div class="piclenselink">
		<a class="piclenselink" href="<?php echo esc_attr($piclens_link) ?>">
			<?php echo_h($piclens_link_text); ?>
		</a>
	</div>
	<?php endif ?>
	<?php

	$this->start_element('nextgen_gallery.image_list_container', 'container', $images);

	?>
	<!-- Thumbnails -->
	<?php for ($i=0; $i<count($images); $i++):
       $image = $images[$i];
       $thumb_size = $storage->get_image_dimensions($image, $thumbnail_size_name);
       $style = isset($image->style) ? $image->style : null;

       if (isset($image->hidden) && $image->hidden) {
          $style = 'style="display: none;"';
       }
       else {
       		$style = null;
       }

			 $this->start_element('nextgen_gallery.image_panel', 'item', $image);

			?>
			<div id="<?php echo_h('ngg-image-' . $i) ?>" class="ngg-gallery-thumbnail-box" <?php if ($style) echo $style; ?>>
				<?php

				$this->start_element('nextgen_gallery.image', 'item', $image);

				?>
        <div class="ngg-gallery-thumbnail">
            <a href="<?php echo esc_attr($storage->get_image_url($image, 'full', TRUE))?>"
               title="<?php echo esc_attr($image->description)?>"
               data-src="<?php echo esc_attr($storage->get_image_url($image)); ?>"
               data-thumbnail="<?php echo esc_attr($storage->get_image_url($image, 'thumb')); ?>"
               data-image-id="<?php echo esc_attr($image->{$image->id_field}); ?>"
               data-title="<?php echo esc_attr($image->alttext); ?>"
               data-description="<?php echo esc_attr(stripslashes($image->description)); ?>"
               <?php echo $effect_code ?>>
                <img
                    title="<?php echo esc_attr($image->alttext)?>"
                    alt="<?php echo esc_attr($image->alttext)?>"
                    src="<?php echo esc_attr($storage->get_image_url($image, $thumbnail_size_name, TRUE))?>"
                    width="<?php echo esc_attr($thumb_size['width'])?>"
                    height="<?php echo esc_attr($thumb_size['height'])?>"
                    style="max-width:none;"
                />
            </a>
        </div>
				<?php

				$this->end_element();

				?>
			</div> 
			<?php

			$this->end_element();

			?>

        <?php if ($number_of_columns > 0): ?>
            <?php if ((($i + 1) % $number_of_columns) == 0 ): ?>
                <br style="clear: both" />
            <?php endif; ?>
        <?php endif; ?>

	<?php endfor ?>
	<?php

	$this->end_element();

	?>

	<?php if ($pagination): ?>
	<!-- Pagination -->
	<?php echo $pagination ?>
	<?php else: ?>
	<div class="ngg-clear"></div>
	<?php endif ?>
	<!-- nemanja -->
</div>
</div>
<div class="gallery-arrow right"></div>
	<!-- //nemanja -->
</div>
<?php $this->end_element(); ?>

<script type="text/javascript">
	jQuery('.ngg-galleryoverview').each(function () {
		var gallery = jQuery(this);

		var slider = gallery.find('.gallery-slider'),
			lastImage = slider.find('.ngg-gallery-thumbnail-box:last'),
			maxLeft = slider.width(),
			currentLeft,
			previousLeft,
			step = 50;

		if (lastImage.length) {
			maxLeft = lastImage.position().left + lastImage.width() - slider.width();
			maxLeft = -maxLeft;
			step = slider.width();
		}

		var slide = function (left) {
			currentLeft = slider.position().left;
			if (left) {
				currentLeft -= step;
				if (currentLeft < maxLeft) {
					currentLeft = maxLeft;
				}

			} else {
				currentLeft += step;
				if (currentLeft > 0) {
					currentLeft = 0;
				}
			}
			if (currentLeft !== previousLeft) {
				slider.animate({
					left: currentLeft
				}, 1000);
			}

			previousLeft = currentLeft;
		};

		gallery.find('.gallery-arrow.left').on('click', function () {
			slide(true);
		});
		gallery.find('.gallery-arrow.right').on('click', function () {
			slide();
		});


	});
</script>