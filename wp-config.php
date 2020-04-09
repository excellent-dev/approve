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
define( 'DB_NAME', 'id13209209_wp_project' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'id13209209_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '*4h2M4^pR@fmGt!qgH' );

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
define( 'AUTH_KEY',         '#XU>s.Lj:3o)!sSKA:9=&XQ(Jz6twVWO#} *.>^5?[ugUXlxb}0n*smw?lry(DjP' );
define( 'SECURE_AUTH_KEY',  '!7 9YIG4(ZL65&~fuI^e]T;p?LaZeKRY]7|`P1+ghh?H}W]B5]Ej%,,92r#) k^9' );
define( 'LOGGED_IN_KEY',    'EW}y[:Q&6.=,4SIc}?/#nIQC+68|%.~ZnIqlRy Vu gNM,}NvwNq7B<nsq<Q#{7Z' );
define( 'NONCE_KEY',        '@ $].B-76)!!`u~!_ahdMi[xWHmCExY_K?HT*f>.NCwd7=hM}l-hG!fFzh[U$HwX' );
define( 'AUTH_SALT',        '02l4F00b]FLL,6Vgx_Rjr APqH^;43@uqxNn7?Ju66es>0DLfZpI<q<0G9-<Y=jy' );
define( 'SECURE_AUTH_SALT', 'YNntTdp^@Ua;k{`]bkibr=lge }+f,shDyRP& ,<r?<Js77SpIO!IueFZ/aT@r_$' );
define( 'LOGGED_IN_SALT',   '47p$qVA~vKC+Ji,:S{-.:~L[V]sw/,raDfJz@5.Lhga,_%1C82Ib84*2By|7J{$L' );
define( 'NONCE_SALT',       '`;!ynrUu:))0S:&gC@/HBL]Zd;<=uZ?OP@e5UxQ4BU@n^%>#Z`8/<uu.FFa !6,i' );

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
