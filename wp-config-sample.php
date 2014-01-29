<?php
/**
 * Основне поставке Вордпреса.
 *
 * Ова датотека садржи следеће поставке: MySQL подешавања, префикс табеле,
 * тајне кључеве, језик Вордпреса и ABSPATH. Можете сазнати више
 * посетом {@link http://codex.wordpress.org/Editing_wp-config.php Уређивање
 * wp-config.php} странице документације. Можете добити MySQL подешавања од свог домаћина.
 *
 * Ова датотека се користи од стране скрипте за прављење wp-config.php током
 * инсталирања. Не морате да користите веб место, само умножите ову датотеку
 * у "wp-config.php" и попуните вредности.
 *
 * @package WordPress
 */

// ** MySQL подешавања - Можете добити ове податке од свог домаћина ** //
/** Име базе података за Вордпрес */
define('DB_NAME', 'ime_baze_ovde');

/** Корисничко име MySQL базе */
define('DB_USER', 'korisnicko_ime_ovde');

/** Лозинка MySQL базе */
define('DB_PASSWORD', 'lozinka_ovde');

/** MySQL домаћин */
define('DB_HOST', 'localhost');

/** Скуп знакова за коришћење у прављењу табела базе. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Не мењајте ово ако сте у сумњи. */
define('DB_COLLATE', '');

/**#@+
 * Јединствени кључеви за аутентификацију.
 *
 * Промените ово у различите јединствене изразе!
 * Можете направити ово користећи {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org услугу тајних кључева}
 * Ово можете променити у сваком тренутку да бисте поништили све постојеће колачиће.
 * Ово ће натерати кориснике да се поново пријаве.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ovde stavite svoj jedinstveni izraz');
define('SECURE_AUTH_KEY',  'ovde stavite svoj jedinstveni izraz');
define('LOGGED_IN_KEY',    'ovde stavite svoj jedinstveni izraz');
define('NONCE_KEY',        'ovde stavite svoj jedinstveni izraz');
define('AUTH_SALT',        'ovde stavite svoj jedinstveni izraz');
define('SECURE_AUTH_SALT', 'ovde stavite svoj jedinstveni izraz');
define('LOGGED_IN_SALT',   'ovde stavite svoj jedinstveni izraz');
define('NONCE_SALT',       'ovde stavite svoj jedinstveni izraz');

/**#@-*/

/**
 * Префикс табеле Вордпресове базе података.
 *
 * Можете имати више инсталација Вордпреса у једној бази уколико свакој
 * дате јединствени префикс. Само бројеви, слова и доње цртице!
 */
$table_prefix  = 'wp_';

/**
 * Језик Вордпреса.
 *
 * Промените ово да бисте локализовали Вордпрес. Одговарајућа MO датотека за изабрани
 * језик мора бити постављена у wp-content/languages. На пример, поставите
 * ru_RU.mo у wp-content/languages и поставите WPLANG у 'ru_RU' да бисте омогућили
 * подршку за руски језик.
 */
define('WPLANG', 'sr_RS');

/**
 * За градитеље: исправљање грешака у Вордпресу ("WordPress debugging mode").
 *
 * Промените ово у true да бисте омогућили приказ напомена током градње.
 * Веома се препоручује да градитељи тема и додатака користе WP_DEBUG
 * у својим градитељским окружењима.
 */
define('WP_DEBUG', false);

/* То је све, престаните са уређивањем! Срећно блоговање. */

/** Апсолутна путања ка Вордпресовом директоријуму. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Поставља Вордпресове променљиве и укључене датотеке. */
require_once(ABSPATH . 'wp-settings.php');
