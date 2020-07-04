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
define( 'DB_NAME', 'unfktru' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'unfktru' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'vgEmA4nE0JEP0hEX' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'servers.ki-corporation.ru' );

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
define( 'AUTH_KEY',         '&.eTO(ML*E|xgY[X;}#|G?PYIaJ/W:F4~,Vok(C{>oi&2vWsZG2QPC=O3`RxfJr[' );
define( 'SECURE_AUTH_KEY',  'iqMic|l9EgMlrP*)FwkuM??(A}PG>#4mnr[!p[C!;L=</vzH6h:(WM-5Pf!3D:E@' );
define( 'LOGGED_IN_KEY',    'KCCW_t#5mqyrOGe7i?oCf|)o=1qN>!==n:Sj3{FEu[]=&KW%hn_`j~O!kZOK2C3e' );
define( 'NONCE_KEY',        '3P#^c8/sl e/F/+><j5E^5oqDN/)1Ho%H>Ml.@U7!rF!B_]^.Yl>!sWj{e__<(@i' );
define( 'AUTH_SALT',        'ZWHgMZG@JEtt_rmZX~J;3NAE6|FUPB&Fpyt_[1[bcl0%hHxThk9Ewd8viW%ws3`j' );
define( 'SECURE_AUTH_SALT', '~^Zg08:g38x:T9XaUT#3M?]gJk5ZUb~0M1r2^uN{64w}!3DG5Ef+|:j{`K[w42mw' );
define( 'LOGGED_IN_SALT',   'WQtHGgYyWKZ_]YvA39SEe*6zn[Et4#q:8Lm}Bp;Cb(w-CX0t{kR~4s`NICA#tj{R' );
define( 'NONCE_SALT',       'H% %3DY-s6F00mH-W4J_:8V;&(7^{T]DT+<?EtfG,R*H#oob}vO{xG|V%#cE%jZQ' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
define( 'FS_METHOD', 'direct');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
