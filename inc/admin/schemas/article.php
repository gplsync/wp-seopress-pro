<?php

defined( 'ABSPATH' ) or die( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

function seopress_get_schema_metaboxe_article($seopress_pro_rich_snippets_data, $key_schema = 0){
	$seopress_options_pro_rich_snippets_article_type = [
		[
			"value" => "Article",
			"label" => __( 'Article (generic)', 'wp-seopress-pro' )
		],
		[
			"value" => 'AdvertiserContentArticle',
			"label" => __( 'Advertiser Content Article', 'wp-seopress-pro' ),
		],
		[
			"value" => 'NewsArticle',
			"label" => __( 'News Article', 'wp-seopress-pro' ),
		],
		[
			"value" => 'Report',
			"label" => __( 'Report', 'wp-seopress-pro' ),
		],
		[
			"value" => 'SatiricalArticle',
			"label" => __( 'Satirical Article', 'wp-seopress-pro' ),
		],
		[
			"value" => 'ScholarlyArticle',
			"label" => __( 'Scholarly Article', 'wp-seopress-pro' ),
		],
		[
			"value" => 'SocialMediaPosting',
			"label" => __( 'Social Media Posting', 'wp-seopress-pro' ),
		],
		[
			"value" => 'BlogPosting',
			"label" => __( 'Blog Posting', 'wp-seopress-pro' ),
		],
		[
			"value" => 'TechArticle',
			"label" => __( 'Tech Article', 'wp-seopress-pro' ),
		],
		[
			"value" => 'AnalysisNewsArticle',
			"label" => __( 'Analysis News Article', 'wp-seopress-pro' ),
		],
		[
			"value" => 'AskPublicNewsArticle',
			"label" => __( 'Ask Public News Article', 'wp-seopress-pro' ),
		],
		[
			"value" => 'BackgroundNewsArticle',
			"label" => __( 'Background News Article', 'wp-seopress-pro' ),
		],
		[
			"value" => 'OpinionNewsArticle',
			"label" => __( 'Opinion News Article', 'wp-seopress-pro' ),
		],
		[
			"value" => 'ReportageNewsArticle',
			"label" => __( 'Reportage News Article', 'wp-seopress-pro' ),
		],
		[
			"value" => 'ReviewNewsArticle',
			"label" => __( 'Review News Article', 'wp-seopress-pro' ),
		],
		[
			"value" => 'LiveBlogPosting',
			"label" => __( 'Live Blog Posting', 'wp-seopress-pro' ),
		],
	];

	$seopress_pro_rich_snippets_article_type                        = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_type']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_type'] : "";
	$seopress_pro_rich_snippets_article_title                       = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_title']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_title'] : "";
	$seopress_pro_rich_snippets_article_img                         = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_img']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_img'] : "";
	$seopress_pro_rich_snippets_article_img_width                   = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_img_width']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_img_width'] : "";
	$seopress_pro_rich_snippets_article_img_height                  = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_img_height']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_img_height'] : "";
	$seopress_pro_rich_snippets_article_coverage_start_date         = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_coverage_start_date']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_coverage_start_date'] : "";
	$seopress_pro_rich_snippets_article_coverage_start_time         = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_coverage_start_time']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_coverage_start_time'] : "";
	$seopress_pro_rich_snippets_article_coverage_end_date           = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_coverage_end_date']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_coverage_end_date'] : "";
	$seopress_pro_rich_snippets_article_coverage_end_time           = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_coverage_end_time']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_article_coverage_end_time'] : "";

	?>
	<div class="wrap-rich-snippets-item wrap-rich-snippets-articles">
		<p class="seopress-notice notice notice-info">
			<?php _e('Proper structured data in your news, blog, and sports article page can enhance your appearance in Google Search results.','wp-seopress-pro'); ?>
		</p>
		<?php if (seopress_rich_snippets_publisher_logo_option() !=''): ?>
			<p class="seopress-notice notice-info"><span class="dashicons dashicons-yes"></span><?php _e('You have set a publisher logo. Good!','wp-seopress-pro'); ?></p>
		<?php else: ?>
			<p class="seopress-notice notice-error"><span class="dashicons dashicons-no-alt"></span>
				<?php /* translators: %s: link to plugin settings page */ echo sprintf(__('You don\'t have set a <a href="%s">publisher logo</a>. It\'s required for Article content types.','wp-seopress-pro'), admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_rich_snippets')); ?>
			</p>
		<?php endif; ?>

		<p>
			<label for="seopress_pro_rich_snippets_article_type_meta"><?php _e( 'Select your article type', 'wp-seopress-pro' ); ?></label>
			<select id="seopress_pro_rich_snippets_article_type_meta" name="seopress_pro_rich_snippets_data[<?php echo $key_schema; ?>][seopress_pro_rich_snippets_article_type]">
				<?php foreach($seopress_options_pro_rich_snippets_article_type as $key => $item): ?>
					<option <?php selected( $seopress_pro_rich_snippets_article_type, $item["value"]) ?> value="<?php echo $item["value"]; ?>"><?php echo $item["label"] ?></option>
				<?php endforeach; ?>
			</select>
		</p>
		<p style="margin-bottom:0">
			<label for="seopress_pro_rich_snippets_article_title_meta">
				<?php _e( 'Headline <em>(max limit: 110)</em>', 'wp-seopress-pro' ); ?></label>
				<?php _e('Default value if empty: Post title','wp-seopress-pro'); ?>
			<input type="text" id="seopress_pro_rich_snippets_article_title_meta" class="seopress_pro_rich_snippets_article_title_meta" name="seopress_pro_rich_snippets_data[<?php echo $key_schema; ?>][seopress_pro_rich_snippets_article_title]" placeholder="<?php echo esc_html__('The headline of the article','wp-seopress-pro'); ?>" aria-label="<?php _e('Headline <em>(max limit: 110)</em>','wp-seopress-pro'); ?>" value="<?php echo $seopress_pro_rich_snippets_article_title; ?>" />
			<div class="wrap-seopress-counters">
				<div class="seopress_rich_snippets_articles_counters"></div>
				<?php _e(' (maximum limit)','wp-seopress-pro'); ?>
			</div>
		</p>
		<p>
			<label for="seopress_pro_rich_snippets_article_img_meta"><?php _e( 'Image', 'wp-seopress-pro' ); ?></label>
			<?php _e('The representative image of the article. Only a marked-up image that directly belongs to the article should be specified. ','wp-seopress-pro'); ?><br>
			<?php _e('Default value if empty: Post thumbnail (featured image)','wp-seopress-pro'); ?>
			<span class="advise"><?php _e('Minimum size: 696px wide, JPG, PNG or GIF, crawlable and indexable (default: post thumbnail if available)', 'wp-seopress-pro'); ?></span>
			<input id="seopress_pro_rich_snippets_article_img_meta" type="text" name="seopress_pro_rich_snippets_data[<?php echo $key_schema; ?>][seopress_pro_rich_snippets_article_img]" placeholder="<?php echo esc_html__('Select your image','wp-seopress-pro'); ?>" aria-label="<?php _e('Image','wp-seopress-pro'); ?>" value="<?php echo $seopress_pro_rich_snippets_article_img; ?>" />
			<input id="seopress_pro_rich_snippets_article_img_width" type="hidden" name="seopress_pro_rich_snippets_data[<?php echo $key_schema; ?>][seopress_pro_rich_snippets_article_img_width]" value="<?php echo $seopress_pro_rich_snippets_article_img_width; ?>" />
			<input id="seopress_pro_rich_snippets_article_img_height" type="hidden" name="seopress_pro_rich_snippets_data[<?php echo $key_schema; ?>][seopress_pro_rich_snippets_article_img_height]" value="<?php echo $seopress_pro_rich_snippets_article_img_height; ?>" />
			<input id="seopress_pro_rich_snippets_article_img" class="button seopress_media_upload" type="button" value="<?php _e('Upload an Image','wp-seopress-pro'); ?>" />
		</p>
		<p>
			<label for="seopress-date-picker8">
				<?php _e( 'Coverage Start Date', 'wp-seopress-pro' ); ?>
			</label>
			<span class="description"><?php _e('To use with Live Blog Posting article type','wp-seopress-pro'); ?></span>
			<input type="text" id="seopress-date-picker8" class="seopress-date-picker" autocomplete="off" name="seopress_pro_rich_snippets_data[<?php echo $key_schema; ?>][seopress_pro_rich_snippets_article_coverage_start_date]" placeholder="<?php echo esc_html__('The beginning of live coverage. For example, "2017-01-24T19:33:17+00:00".','wp-seopress-pro'); ?>" aria-label="<?php _e('Coverage Start Date','wp-seopress-pro'); ?>" value="<?php echo $seopress_pro_rich_snippets_article_coverage_start_date; ?>" />
		</p>
		<p>
			<label for="seopress_pro_rich_snippets_article_coverage_start_time_meta">
				<?php _e( 'Coverage Start Time', 'wp-seopress-pro' ); ?>
			</label>
			<span class="description"><?php _e('To use with Live Blog Posting article type','wp-seopress-pro'); ?></span>
			<input type="text" id="seopress_pro_rich_snippets_article_coverage_start_time_meta" name="seopress_pro_rich_snippets_data[<?php echo $key_schema; ?>][seopress_pro_rich_snippets_article_coverage_start_time]" placeholder="<?php echo esc_html__('Eg: HH:MM','wp-seopress-pro'); ?>" aria-label="<?php _e('Coverage Start Time','wp-seopress-pro'); ?>" value="<?php echo $seopress_pro_rich_snippets_article_coverage_start_time; ?>" />
		</p>
		<p>
			<label for="seopress-date-picker9">
				<?php _e( 'Coverage End Date', 'wp-seopress-pro' ); ?>
			</label>
			<span class="description"><?php _e('To use with Live Blog Posting article type','wp-seopress-pro'); ?></span>
			<input type="text" id="seopress-date-picker9" class="seopress-date-picker" autocomplete="off" name="seopress_pro_rich_snippets_data[<?php echo $key_schema; ?>][seopress_pro_rich_snippets_article_coverage_end_date]" placeholder="<?php echo esc_html__('The end of live coverage. For example, "2017-01-24T19:33:17+00:00".','wp-seopress-pro'); ?>" aria-label="<?php _e('Coverage End Date','wp-seopress-pro'); ?>" value="<?php echo $seopress_pro_rich_snippets_article_coverage_end_date; ?>" />
		</p>
		<p>
			<label for="seopress_pro_rich_snippets_article_coverage_end_time_meta">
				<?php _e( 'Coverage End Time', 'wp-seopress-pro' ); ?>
			</label>
			<span class="description"><?php _e('To use with Live Blog Posting article type','wp-seopress-pro'); ?></span>
			<input type="text" id="seopress_pro_rich_snippets_article_coverage_end_time_meta" name="seopress_pro_rich_snippets_data[<?php echo $key_schema; ?>][seopress_pro_rich_snippets_article_coverage_end_time]" placeholder="<?php echo esc_html__('Eg: HH:MM','wp-seopress-pro'); ?>" aria-label="<?php _e('Coverage End Time','wp-seopress-pro'); ?>" value="<?php echo $seopress_pro_rich_snippets_article_coverage_end_time; ?>" />
		</p>
	</div>
	<?php
}
