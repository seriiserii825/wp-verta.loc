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
define( 'DB_NAME', 'wp-verta' );

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
define( 'AUTH_KEY',         'zhh__!/6mP51%|c$$xnQaLwbA+hF&51=e.IuP2t 9DW82bHW[<Q<DIXcBA|JIV*A' );
define( 'SECURE_AUTH_KEY',  ' F*p514[8b4k6S&CS|})$SB{oLy^UkNj*lwU`6]8`!|a>KvYMm)-zdk WP_^%k~x' );
define( 'LOGGED_IN_KEY',    '?WpliZA;LjUPaT5Rw}u+kdGE&@4,95<+Y5tTB,U=+</g0u5a/R~m>_P7,}&aQb2l' );
define( 'NONCE_KEY',        'IUoi%NcCq@q(Ib|Xx;I(~P!#a:CICby=5<u>vmL&IaW/#+Fbp]XrVfzcQI+bwmd1' );
define( 'AUTH_SALT',        'IC394ZX|~mRqEoPG0(K/Ieg~q=cR Z{bbIN]nx}3I>H#x9f- EeTm^Cv M5@.jJ.' );
define( 'SECURE_AUTH_SALT', 'l->+{v&0pD82PoS8b*W*;<BsTT<`>g9Yb.*i|F]jBv,bS]QNvYXe(Zj;(,KUd(]2' );
define( 'LOGGED_IN_SALT',   ';MM@7A~qg[A&l/|&fPb$j3R3-A/[YIcT7g>7ZxzK;!]>jhr0`hsD)d~5DULnHe=3' );
define( 'NONCE_SALT',       '3C!u]aAB7r;5&n8,BD|NCsx#{ONR#d(][m>U_qZ/T]Oz$R%?}C-4AZ<{tYOjq0kU' );

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
