<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'host1239175_2913' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'host1239175_2913' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '18714618' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HLobmGk >8L}-^^Uj|{,l*@l+iG-};bD3[$k/&&2u*cvE#juz}JtX0c)kLFa}G/7' );
define( 'SECURE_AUTH_KEY',  'wNr=djhuXe/RQjh$q.iNzkTH/fFN,ub~6Z>GZS(}[4bgvZj3>@_q0!GfI_4t;f_u' );
define( 'LOGGED_IN_KEY',    '>Fi!>To9?V(EhMC_`?C/_=G*!wH-!<|A)QdfY~j)t`Z#xasa-/SbHUG!DA3%fAeK' );
define( 'NONCE_KEY',        'EbnXA)}?DOM~TEBzG,%)@XyrheEv@ro5_Usmyqn*2x{IN`iwNs[#)O#-5B/vdOgf' );
define( 'AUTH_SALT',        '@blBq`yDrRVeGayYbhrl6o0;EY<tT~MLHiIICC3zkDkN@^l.]+pezcwb#i;0S~13' );
define( 'SECURE_AUTH_SALT', '9f *N5E*i0bYuxa!P!^hM~-aB(B9*S_u=|OS53xMBb ;OgA,3n;*Q5i;fW9E~({W' );
define( 'LOGGED_IN_SALT',   'xtHgV]L1dESFM|C=+8Rf4*(!VIJyn+PD|Md1 TqP))E:D`d[?j]$;R{/lkd}L4E|' );
define( 'NONCE_SALT',       'qLt 2,]`KG/fM[1_wx+`tYt]L&c:-e6&p OG#]+,N.`tp_%BSdpdJ#/;XOds0K>Z' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
