<?php

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = 'vlk57COXgi0FcM2c8tPep6-sSt4NhKeFyORVd1fGe0AwfQA8rdVXQVGaA7f4l3Edgp7sB3n74Q';

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = FALSE;

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

$settings['install_profile'] = 'standard';

$config_directories['sync'] = 'sites/default/files/config_aEUp-FILzWguAJwFiDFstnpJrPpK13ms34sFWV__fMspiC_ymZy6HS7fULCxgXd5M9Vhok6P8g/sync';

/**
 * Load local development override configuration, if available.
 *
 * Keep this code block at the end of this file to take full effect.
 */
if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}
