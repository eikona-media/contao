<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

// Namespaces
ClassLoader::addNamespaces(array
(
	'Contao',
));

// Templates
TemplateLoader::addFiles(array
(
	'analytics_google'    => 'vendor/contao/core-bundle/src/Resources/contao/templates/analytics',
	'analytics_piwik'     => 'vendor/contao/core-bundle/src/Resources/contao/templates/analytics',
	'be_ace'              => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_confirm'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_diff'             => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_error'            => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_forbidden'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_help'             => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_incomplete'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_insecure'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_install'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_login'            => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_main'             => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_maintenance'      => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_maintenance_mode' => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_navigation'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_no_active'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_no_forward'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_no_layout'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_no_page'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_no_root'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_pagination'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_password'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_picker'           => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_popup'            => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_preview'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_purge_data'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_rebuild_index'    => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_referer'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_switch'           => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_tinyFlash'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_tinyMCE'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_tinyNews'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_unavailable'      => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_welcome'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_widget'           => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_widget_chk'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_widget_pw'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_widget_rdo'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'be_wildcard'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/backend',
	'block_searchable'    => 'vendor/contao/core-bundle/src/Resources/contao/templates/block',
	'block_section'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/block',
	'block_sections'      => 'vendor/contao/core-bundle/src/Resources/contao/templates/block',
	'block_unsearchable'  => 'vendor/contao/core-bundle/src/Resources/contao/templates/block',
	'ce_accordionSingle'  => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_accordionStart'   => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_accordionStop'    => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_code'             => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_download'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_downloads'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_gallery'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_headline'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_html'             => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_hyperlink'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_image'            => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_list'             => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_markdown'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_player'           => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_sliderStart'      => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_sliderStop'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_table'            => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_teaser'           => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_text'             => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'ce_toplink'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/elements',
	'form'                => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_captcha'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_checkbox'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_explanation'    => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_fieldset'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_headline'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_hidden'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_html'           => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_message'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_password'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_radio'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_row'            => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_row_double'     => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_select'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_submit'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_textarea'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_textfield'      => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_upload'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'form_xml'            => 'vendor/contao/core-bundle/src/Resources/contao/templates/forms',
	'fe_page'             => 'vendor/contao/core-bundle/src/Resources/contao/templates/frontend',
	'gallery_default'     => 'vendor/contao/core-bundle/src/Resources/contao/templates/gallery',
	'image'               => 'vendor/contao/core-bundle/src/Resources/contao/templates/image',
	'j_accordion'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/jquery',
	'j_colorbox'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/jquery',
	'j_mediaelement'      => 'vendor/contao/core-bundle/src/Resources/contao/templates/jquery',
	'j_tablesort'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/jquery',
	'js_highlight'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/js',
	'js_slider'           => 'vendor/contao/core-bundle/src/Resources/contao/templates/js',
	'mail_default'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/mail',
	'member_default'      => 'vendor/contao/core-bundle/src/Resources/contao/templates/member',
	'member_grouped'      => 'vendor/contao/core-bundle/src/Resources/contao/templates/member',
	'mod_article'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_articlelist'     => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_articlenav'      => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_booknav'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_breadcrumb'      => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_change_password' => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_flash'           => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_html'            => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_login'           => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_message'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_navigation'      => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_password'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_quicklink'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_quicknav'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_randomImage'     => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_search'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'mod_sitemap'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/modules',
	'moo_accordion'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/mootools',
	'moo_chosen'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/mootools',
	'moo_mediabox'        => 'vendor/contao/core-bundle/src/Resources/contao/templates/mootools',
	'moo_tablesort'       => 'vendor/contao/core-bundle/src/Resources/contao/templates/mootools',
	'nav_default'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/navigation',
	'pagination'          => 'vendor/contao/core-bundle/src/Resources/contao/templates/pagination',
	'picture_default'     => 'vendor/contao/core-bundle/src/Resources/contao/templates/picture',
	'rss_default'         => 'vendor/contao/core-bundle/src/Resources/contao/templates/rss',
	'rss_items_only'      => 'vendor/contao/core-bundle/src/Resources/contao/templates/rss',
	'search_default'      => 'vendor/contao/core-bundle/src/Resources/contao/templates/search',
));
