<?php
defined( 'ABSPATH' ) || exit;

$rocket_cookie_hash = '331cf05957c023af0828fbe471308805';
$rocket_logged_in_cookie = 'wordpress_logged_in_331cf05957c023af0828fbe471308805';
$rocket_cache_mobile_files_tablet = 'desktop';
$rocket_cache_mobile = 1;
$rocket_do_caching_mobile_files = 1;
$rocket_cache_reject_uri = '/login/|/my-account/|/(?:.+/)?feed(?:/(?:.+/?)?)?$|/(?:.+/)?embed/|/checkout/(.*)|/basket/|/my-account/(.*)|/wc-api/v(.*)|/(index\.php/)?wp\-json(/.*|$)';
$rocket_cache_reject_cookies = 'wordpress_logged_in_.+|wp-postpass_|wptouch_switch_toggle|comment_author_|comment_author_email_';
$rocket_cache_reject_ua = 'facebookexternalhit|WhatsApp';
$rocket_cache_query_strings = array(
  0 => 'disable_trackers',
);
$rocket_secret_cache_key = '5c503e9e9466a301577827';
$rocket_cache_ssl = 1;
$rocket_cache_ignored_parameters = array(
  'utm_source' => 0,
  'utm_medium' => 1,
  'utm_campaign' => 2,
  'utm_expid' => 3,
  'utm_term' => 4,
  'utm_content' => 5,
  'mtm_source' => 6,
  'mtm_medium' => 7,
  'mtm_campaign' => 8,
  'mtm_keyword' => 9,
  'mtm_cid' => 10,
  'mtm_content' => 11,
  'pk_source' => 12,
  'pk_medium' => 13,
  'pk_campaign' => 14,
  'pk_keyword' => 15,
  'pk_cid' => 16,
  'pk_content' => 17,
  'fb_action_ids' => 18,
  'fb_action_types' => 19,
  'fb_source' => 20,
  'fbclid' => 21,
  'campaignid' => 22,
  'adgroupid' => 23,
  'adid' => 24,
  'gclid' => 25,
  'age-verified' => 26,
  'ao_noptimize' => 27,
  'usqp' => 28,
  'cn-reloaded' => 29,
  '_ga' => 30,
  'sscid' => 31,
  'gclsrc' => 32,
  '_gl' => 33,
  'mc_cid' => 34,
  'mc_eid' => 35,
  '_bta_tid' => 36,
  '_bta_c' => 37,
  'trk_contact' => 38,
  'trk_msg' => 39,
  'trk_module' => 40,
  'trk_sid' => 41,
  'gdfms' => 42,
  'gdftrk' => 43,
  'gdffi' => 44,
  '_ke' => 45,
  'redirect_log_mongo_id' => 46,
  'redirect_mongo_id' => 47,
  'sb_referer_host' => 48,
  'mkwid' => 49,
  'pcrid' => 50,
  'ef_id' => 51,
  's_kwcid' => 52,
  'msclkid' => 53,
  'dm_i' => 54,
  'epik' => 55,
  'pp' => 56,
  'gbraid' => 57,
  'wbraid' => 58,
);
$rocket_cache_mandatory_cookies = '';
$rocket_cache_dynamic_cookies = array();
