<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'szachylodz');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'szachylodz');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'szachylodz');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wLT$$BkjO^KlID8r%Xr!b1T &;$[GSMCe/+}MP]V)ET|PI#Jg<6.^P*J0yem$9O-');
define('SECURE_AUTH_KEY',  'rXcK3a>(K9`Nu,Yx]/Wn&(4;~I|hIu]h|5DkYv4uEJF_C;5zcWVUxk7[|+,3FWzp');
define('LOGGED_IN_KEY',    '9&0y:Qfjs27f?l1l:NxQM@[hy#e!imBQqw/U4J,>w:{?#aSg_1;IMyuMJz43s3Nn');
define('NONCE_KEY',        '8]QvUTdTPq2_P8<E3BLPGL!T?7-13@9VQ#f-Fq5*ZXWYl#C[b3PXf~@AfV,3wIUw');
define('AUTH_SALT',        'gIQ|@<43SHw`i9&u]R|S{|s8p.kY6.mM9z+q<CNgT28+gTxd#|lWFd;3Z ,uZ@K?');
define('SECURE_AUTH_SALT', '|d3sFM0k,761CL}OWL.+`7xeHc{yHj2h+XX/n5|, Uq9mO whiHfj_4CLhH8J4ho');
define('LOGGED_IN_SALT',   'B~s@8>_pri?T++E-D731|}.dTuq:W7WHE86tR6@5E5L#?8tfF%FE2z yFUZi_Of+');
define('NONCE_SALT',       'ze>,NfPA!n#xl%4stL;`?3}>*W/1:$p?aug,~WXIolyD[@)NM}.xU#`bP$>C!1_{');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'www_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');


