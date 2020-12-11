<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'E:\os\OSPanel\domains\localhost\avtograd.gs\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'avtograd-gs');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q[8:35[(<U#A|1tr&5zS4t3)xm G^zLixy@f7+m?*g|lPqRuVRf8&IIHQh3}(lrg');
define('SECURE_AUTH_KEY',  'D3-BxY]Rd$=ty?U*=>r(DO[=y5(IQ-:&:<>jba4g=%?fIUTqc+#%M]Bh^ue0TS?)');
define('LOGGED_IN_KEY',    'mQyM42XlP/*us&;FU_dxXzbmK1|g,3ygt] <;(AnOrSV%4vm <4E9Fp719Y4VM>x');
define('NONCE_KEY',        '8M?AXD^LB_I,%S 9e^FqIYyTPXA7hY@>1~kGmu`o<bpLeewVW+2r+uzGTsK`Pm,J');
define('AUTH_SALT',        'OP$3fkuFPoKc2Xh6d~I;BdeA2fy4g8&do5#a>;I`uA7ZHJsxeNU{y#$zz{!agK60');
define('SECURE_AUTH_SALT', '6TEg=y| Jv4)O4L2}uB:B~PJq.p9|b4I@}/QAKNT-|wOIoT9zTNMr(N=C0BKM~RH');
define('LOGGED_IN_SALT',   ')SHOJ=mUIyfQ=vG&=^Hv+G aUK|IfL2:v_hn_K$x>@gLWjVFie;o6ym|#YCWDsjK');
define('NONCE_SALT',       'ji6OB^|#jM6:y/[x?QpSE+ziFsfk)6yS~~8:78e:e8eJyY%SpBW5RGr+ DscM#?v');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'avt_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
