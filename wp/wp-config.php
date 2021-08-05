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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cake_danil' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'danil' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '2wW-3cC-4fF-5rR' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AOg/N^;*+3P$6 f~MAoN(>f1UF/z/.^7]=@EPS7cbN;[V^S7l_%n:q[2bNklCZzr' );
define( 'SECURE_AUTH_KEY',  '}a~6*A?>1%3XI`)gGF{;K7hGT^n33`)x.IAiMS50Gl<_Mt}]{iCMgnO75NZUujJq' );
define( 'LOGGED_IN_KEY',    'om1j(y-+VXN+W7YsB>LlDzI25kQ}k}Mm|*xbNZ0N:Axq]JWIOh-1~? $hq/3.7/I' );
define( 'NONCE_KEY',        'MWxA`^N2?U?B?gwVd._k0mo$TaXz7Gs0,3ff7.Pn8Dn-h{sUEAT%E_@&d,)8k?y}' );
define( 'AUTH_SALT',        '_JYSmq2/$hDK6PQOd]BSHMmAX[kny1RumMH=}**]zE!,J.N5,XrJ)*j(gtPLG~nL' );
define( 'SECURE_AUTH_SALT', '^Ui;-xcFO/,6aICsbO7<oH)RrxU<$NT;~!f0t7IZAFvaMAq=UU(?0iw}[S?0%@vJ' );
define( 'LOGGED_IN_SALT',   'FTuoqw!/}SfgKXw5):E OZ0Y/e9EuVQS)]/G4wyByHyjW}WE HA.J},G{=]d: ?:' );
define( 'NONCE_SALT',       'X%r0oEX7a,f:hxGs)zncltAT~0Q<eg;[yN`KzYu=*jn%Q>L|_PB,_x#SfO[=F$sP' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');
define('WP_MEMORY_LIMIT', '256M');
