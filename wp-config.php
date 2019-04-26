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
define( 'DB_NAME', 'dz2' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'p#/@)-/rFP..4yQG=WwyPM)rN d,cw3Gh5{Oj=Yrw+ffz?U`)HR5MzM}7?KH8WH_' );
define( 'SECURE_AUTH_KEY',  'D:4u7pF,`wAB7DnE5W7>n*dGgf`l{]ZGo>314X*[=L@B!J&p x2K)Y+ssN7,*yWq' );
define( 'LOGGED_IN_KEY',    '$zy;tPgKa_##gB%;<,jtjP5Ce*pVnr^BQ>l1{&Ju^F+oo[@jErzAQ.SYYOWwD#Sj' );
define( 'NONCE_KEY',        'LXIU BWe=m@or<5TNKCZsrjmHT{qHUAAh/:9A,&|}Ko2)d|%`X]Mbqh!O]S>ZO^d' );
define( 'AUTH_SALT',        'TXCB3g& shrXQ.7udLfP.cDR3!I;`w=@~hY9#u@82@YxO=*#YFF}(/Qo#p`~HL5$' );
define( 'SECURE_AUTH_SALT', 's*n6}3%=Vk*.PWMEvPw#~%dB.Ke<2b,}s-s-y*11w=&L2)XJ$7M%9Dz:HLbfMf^%' );
define( 'LOGGED_IN_SALT',   '+Z8E(b/jm0k{;a/f)9AzX:m32Jp@/g}% 7@B0G+0WQYVn|{X^B}l7du9Mj+%WZn+' );
define( 'NONCE_SALT',       'i9qBM<7B[lG,1t/U11tF`>F_|tYpU81mXda=gQ0FU2?|p})=DyD<X0mmsnOoF->w' );

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
