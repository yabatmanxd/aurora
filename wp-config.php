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
define( 'DB_NAME', 'aurora' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mynewpassword' );

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
define( 'AUTH_KEY',         'q{rRk>d;*}C1Erw<U:*H6Gw$ev$!B$4_$wSOIX Hte{/s!zr{.u()E$4H&;#5QHg' );
define( 'SECURE_AUTH_KEY',  '[{rS_WZp G pwhn[_bk@E@~^EcFn> -*wPfUq p2X?Z#yO=D]ygMI-rm>6}+]D#f' );
define( 'LOGGED_IN_KEY',    'qUkf_tx#)-V?~q{.q1Lv{H]Af*MBq7$F;X>I0R)F0{z3IN%ZW 6CAa!::fV~s^VO' );
define( 'NONCE_KEY',        '8:K:Dfk; =~K2;$F{:9piR:F6rL8L &pzl.Hi_%WszT[[Epk1,26_&O-q/|{S_E/' );
define( 'AUTH_SALT',        'oeq4fV<#`g!3Fuo@&9u}JAQqS)c|hp`)jOg-YS]zvyKTcA=gcn6CN+zdH#$&b B!' );
define( 'SECURE_AUTH_SALT', '9.}*fFQ{jsK$ ]&p(V^)VQDJe%A5I-Mwj^wNBXGH,07S44m-bNQ!cxm%g8<FS8=*' );
define( 'LOGGED_IN_SALT',   '{@aMabRha:G/KXHOR,47QID=;a%Uw=LI[$?M^s(j$_bWZm:*A#bq7#9T3bj66k(w' );
define( 'NONCE_SALT',       'S.>m%y.69ZIOmc,}V=KPFzovN+SR]O%w^6Ll`_]{Y#z/s3]z?[OO&XNt<d)iJ.Jz' );
define('FS_METHOD','direct');

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

