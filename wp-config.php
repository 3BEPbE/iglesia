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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'cAZ?TYaX8;vv(} 1q8zKEar1T=I|7eiVi%KV]hUUzShxU=1&lU]^vQ<U*9{Qe_-~' );
define( 'SECURE_AUTH_KEY',  '&[+GvJuF`Z,bR!tpx^lW9FY../QF5art61CCpV *Usn+z-^Q3~zb]4Y`bRB2uZXA' );
define( 'LOGGED_IN_KEY',    '~cM@xw9G/+W(Lu_KvoC:8C`6EA L:%o#/vpiSyHd]=46^e=n${%,HjuiLJ+N+,Xr' );
define( 'NONCE_KEY',        '<Ji(*_*t{-NG2ml:ZO!EtRTiqXsEwz&R-j>;JlAI1#gI|f,fx;3<b-zXydOcuQi?' );
define( 'AUTH_SALT',        '1?X!]w-CThC(VOY6d@jRE5O!9|HD ;|k^R:Py~$s>5tM]L5=hi;ie98jxX|1+rjq' );
define( 'SECURE_AUTH_SALT', 'iMq,YS)|j?eU^n.Qm,#0N4|CZdgOhwAliZtnqX!Ca.(-zj-4hXPehpcg@>1aivbg' );
define( 'LOGGED_IN_SALT',   'lq/7pSh:+]X >!J&C|%t;[giA77E%*)6!lDbi.Hfe8mVJOi_5)a%rN6KaC!C|`mw' );
define( 'NONCE_SALT',       '5{e4Y~ v0QSS}17$a8myurCk=Y`qr,t(^nT.6P%xJ8Vwr7}I5+jSC1Chz6jl)YG!' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ac_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
