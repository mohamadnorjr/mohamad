<?php
/**
 * The base configuration for WordPress by TasteWP.com
 * Generated for site: divergentchalk.s2-tastewp.com
 * Version: 2.1
 */

define('DB_NAME',     'wp_divergentchalk');
define('DB_USER',     'wp_divergentchalk');
define('DB_PASSWORD', '8_ND0l2kyA5cLYgaDcVlbDpYD8UbeUZedZP0caGg8yg');
define('DB_HOST',     '127.0.0.1');
define('DB_CHARSET',  'utf8mb4');
define('DB_COLLATE',  '');

define('AUTH_KEY',         'C2LzSiibMmeD5PEXdztizr95qP3VLgSgzTOtv2u0s4opeTaBCCgudKVMOMQ96X8A');
define('SECURE_AUTH_KEY',  'oUJbxtGv15gewqWlXIdjInthR89WRm3GvGVbLHOdWADThgxrjI1D33F2DfCVCdEL');
define('LOGGED_IN_KEY',    'OBo31xx8fKsU8iJglrKfdECKhLkCXkKDmR149xl5PuEzcf2sYfTN0BWhGOSQHTvd');
define('NONCE_KEY',        'DHJu4yuyZQ0LpdBMzcA4zITgJUPWT05SYr5VZpnuCXBej9LRlI3fWCvvxybccCxw');
define('AUTH_SALT',        'gJx7YJYUOe6fEQ5ZbL6vqCwJka4e16AnLBsNNYN724MT3iEAydt2wXFwSbZJJBwO');
define('SECURE_AUTH_SALT', 'JCylRzVzIb6go5nTdYfx4A2jHXA3HnxRyW9CZdZcRTC3mILQFVK0DtKv2197HlSL');
define('LOGGED_IN_SALT',   'lyx82JD2HWtKOiKdfalKZ0gOzlCliOthqJg2NZfrCwNgwTriElQ1jS4s83glhL6k');
define('NONCE_SALT',       'LTzYXDKkH012gU5ySZ8M9t2lQU5SX1WzHH8Z5R3qmzpAJIT65TxSPgRnCSR0jwpm');

$table_prefix = 'wp_';

define('WP_TEMP_DIR',         '/s2-divergentchalk/wordpress/tmp');
define('WP_MEMORY_LIMIT',     '128M');
define('WP_MAX_MEMORY_LIMIT', '128M');
define('FS_METHOD', 'direct');

define('WP_HOME', 'https://divergentchalk.s2-tastewp.com');
define('WP_SITEURL', 'https://divergentchalk.s2-tastewp.com');

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', '/s2-divergentchalk/wordpress/debug.log');

define('WP_DEBUG_DISPLAY', true);
define('CONCATENATE_SCRIPTS', true);







if (!defined('ABSPATH')) define('ABSPATH', __DIR__ . '/');
require_once ABSPATH . 'wp-settings.php';
