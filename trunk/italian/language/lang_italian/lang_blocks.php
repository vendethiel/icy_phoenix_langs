<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// BLOCKS TITLES - BEGIN
	'cms_block_ads' => 'Annunci',
	'cms_block_ads_tla' => 'Annunci TLA',
	'cms_block_ads_tla_new' => 'Annunci TLA',
	'cms_block_ajax_shoutbox' => 'Chat AJAX',
	'cms_block_album' => 'Album',
	'cms_block_birthdays' => 'Compleanni',
	'cms_block_calendar' => 'Calendario',
	'cms_block_calendar_events' => 'Eventi',
	'cms_block_center_downloads' => 'Downloads',
	'cms_block_clock' => 'Orologio',
	'cms_block_donate' => 'Donazioni',
	'cms_block_dyn_menu' => 'Menu Navigazione',
	'cms_block_flash' => 'Flash',
	'cms_block_flash_news' => 'Flash News',
	'cms_block_forum' => 'Articoli',
	'cms_block_forum_articles' => 'Articoli',
	'cms_block_forum_attach' => 'Articoli',
	'cms_block_forum_list' => 'Lista Forum',
	'cms_block_full_search' => 'Ricerca Avanzata',
	'cms_block_global_header' => 'Intestazione Globale',
	'cms_block_global_header_simple' => 'Intestazione Globale Semplice',
	'cms_block_global_header_simple_menu' => 'Menu Intestazione',
	'cms_block_gsearch' => 'Ricerca Google',
	'cms_block_gsearch_hor' => 'Ricerca Google',
	'cms_block_index' => 'Mappa Sito',
	'cms_block_jumpbox' => 'Jumpbox',
	'cms_block_kb' => 'Knowledge Base',
	'cms_block_links' => 'Links',
	'cms_block_menu' => 'Navigazione Sito',
	'cms_block_nav_header' => 'Intestazione',
	'cms_block_nav_links' => 'Mappa Sito',
	'cms_block_nav_logo' => 'Logo',
	'cms_block_new_downloads' => 'Nuovi Downloads',
	'cms_block_news' => 'Articoli',
	'cms_block_news_archive' => 'Archivio Articoli',
	'cms_block_news_posters' => 'Autori Articoli',
	'cms_block_online_users' => 'In Linea',
	'cms_block_online_users_chat' => 'Chat Online',
	'cms_block_paypal' => 'PayPal',
	'cms_block_paypal_donate' => 'Donazioni',
	'cms_block_plugin_guestbook' => 'Libro Ospiti',
	'cms_block_poll' => 'Sondaggio',
	'cms_block_random_attach' => 'Allegato Casuale',
	'cms_block_random_quote' => 'Citazione Casuale',
	'cms_block_random_topics' => 'Argomenti Casuali',
	'cms_block_random_topics_ver' => 'Argomenti Casuali',
	'cms_block_random_user' => 'Utente Casuale',
	'cms_block_recent_articles' => 'Articoli Recenti',
	'cms_block_recent_topics' => 'Argomenti Recenti',
	'cms_block_recent_topics_wide' => 'Argomenti Recenti',
	'cms_block_referers' => 'Referenze',
	'cms_block_rss' => 'RSS',
	'cms_block_search' => 'Cerca',
	'cms_block_sec_menu' => 'Menu Extra',
	'cms_block_sh_visit_counter' => 'Contatore Visite',
	'cms_block_shoutbox' => 'Shoutbox',
	'cms_block_staff' => 'Staff',
	'cms_block_statistics' => 'Statistiche',
	'cms_block_style' => 'Stile',
	'cms_block_tags' => 'Tags',
	'cms_block_top_downloads' => 'Downloads Popolari',
	'cms_block_top_likes' => 'Argomenti Graditi',
	'cms_block_top_nav' => 'Navigazione',
	'cms_block_top_posters' => 'Utenti Migliori',
	'cms_block_user_block' => 'Utente',
	'cms_block_users_visited' => 'Utenti Attivi',
	'cms_block_visit_counter' => 'Contatore Visite',
	'cms_block_welcome' => 'Benvenuto',
	'cms_block_wordgraph' => 'Tags (Wordgraph)',
	'cms_block_xs_news' => 'Ultime Notizie',
	// BLOCKS TITLES - END

	'Advanced_GSearch' => 'Ricerca Avanzata',
	'Advanced_search' => 'Ricerca avanzata',
	'Album' => 'Album',
	'All_News_Archives' => 'Tutte le date',
	'All_News_Categories' => 'Tutte le categorie',
	'Articles' => 'Articoli',
	'Articles_time' => 'Inserito il',
	'Articles_options' => 'Opzioni',
	'Article_Reply' => 'Commenta questo articolo',
	'Article_Print' => 'Stampa l\'articolo',
	'Article_Email' => 'Segnala via email l\'articolo',
	'Censor' => 'Censura',
	'CHAT_CLICK_TO_CHAT' => 'Clicca sul nome utente per avviare una chat',
	'CHAT_NO_USERS' => 'Nessun utente online',
	'CHAT_ONLINE_DESCRIPTION' => 'Utenti in linea negli ultimi 10 minuti',
	'CHAT_PUBLIC_ROOM' => 'Chat Pubblica',
	'Click_to_join_chat' => 'Entra in chat',
	'Comments' => 'Commenti',
	'Credits' => 'Riconoscimenti',
	'Day_users' => '%d Utenti registrati ci hanno visitato nelle ultime %d ore:',
	'Disable_BBCode_post' => 'Disattiva i BBCODE in questo messaggio',
	'Disable_HTML_post' => 'Disattiva l\'HTML in questo messaggio',
	'Dls' => 'Downloads',
	'Donate_Funds' => 'Fai una donazione',
	'GSearch' => 'Ricerca',
	'GSearch2' => 'Ricerca Google:',
	'GSearch_At' => 'Ricerca in',
	'Guest' => 'Visitatore',
	'Guest_user_total' => '%d Visitatori',
	'Guest_users_total' => '%d Visitatori',
	'Guest_users_zero_total' => '0 Visitatori',
	'Hidden_user_total' => '%d Nascosto <br />',
	'Hidden_users_total' => '%d Nascosti <br />',
	'Hidden_users_zero_total' => '0 Nascosti <br />',
	'How_Many_Chatters' => ' <B>%d</B> utenti in chat',
	'Kb_name' => 'Knowledge Base',
	'IP_info' => 'Informazioni Indirizzo IP',
	'Login_to_join_chat' => 'Connettiti per entrare nella chat',
	'Login_to_vote' => 'Devi essere connesso per poter votare',
	'Lookup_IP' => 'Cerca indirizzo IP',
	'New_donations' => 'Nuove donazioni',
	'New_downloads' => 'Nuovi Download',
	'News_And' => 'e',
	'News_Archives' => 'Archivio News',
	'News_Categories' => 'Categorie News',
	'News_Cats' => 'Categorie News',
	'News_Comments' => 'Commenti',
	'News_Email' => 'Segnala via email l\'argomento',
	'News_Print' => 'Stampa l\'argomento',
	'News_Reply' => 'Commenta questa notizia',
	'News_Summary' => 'Questa notizia ha ',
	'News_Views' => 'Visualizzazioni',
	'No_News_Cats' => 'Spiacente, nessuna categoria per le news risulta esistente!',
	'No_Pics' => 'Nessuna foto',
	'No_poll' => 'Nessun sondaggio',
	'No_topics_found' => 'Nessun argomento trovato.',
	'None' => 'Nessuno',
	'Not_day_users' => '%d Utenti registrati <span style="color:red">NON</span> ci hanno visitato nelle ultime %d ore:',
	'Not_found' => 'Nessuna immagine presente.',
	'Not_rated' => 'Non valutata',
	'Online_user_total' => ' <b>%d</b> utente online:<br />',
	'Online_user_total' => '<b>%d</b> utente online:<br />',
	'Online_users_total' => '<b>%d</b> utenti online:<br />',
	'Online_users_zero_total' => '<b>0</b> utenti online:<br />',
	'Other_IP_this_user' => 'Altri indirizzi IP usati da questo utente',
	'PAYPAL_DONATE_AMOUNT' => 'Sono stati donati finora %s.',
	'PAYPAL_DONATE_DES' => 'Se hai trovato questo sito utile puoi contribuire con una <a href="%s">donazione</a>',
	'PAYPAL_DONATE_USERS' => '<b>%d</b> utenti hanno effettuato una donazione.',
	'Pic_Title' => 'Titolo foto',
	'Poll' => 'Sondaggio',
	'Post_your_comment' => 'Invia Commento',
	'Posted' => 'Inviato il',
	'POSTED_ON' => 'il',
	'Poster' => 'Inviato da',
	'Posts' => 'Messaggi',
	'Rating' => ' Valutazione',
	'Read_Full' => 'Leggi News',
	'Record_online_users' => 'Record utenti online <b>%s</b><br />Data Record: %s',
	'Reg_user_total' => '%d Registrato <br />',
	'Reg_user_total' => '%d Registrato<br />',
	'Reg_users_total' => '%d Registrati <br />',
	'Reg_users_total' => '%d Registrati<br />',
	'Reg_users_zero_total' => '0 Registrati <br />',
	'Reg_users_zero_total' => '0 Registrati<br />',
	'Register_new_account' => 'Non ti sei ancora registrato?<br />Cosa aspetti? %sIscriviti%s, &egrave; gratis!',
	'Registered_users' => 'Utenti registrati:',
	'Remember_me' => 'Login Automatico',
	'Save_Topic' => 'Salva argomento come file',
	'Shout_refresh' => 'Aggiorna',
	'Shout_text' => 'Il tuo messaggio',
	'Shoutbox_date' => 'D G:i \\w\r\o\t\e ',
	'SH_Visit_counter_statement' => 'Questo sito ha avuto <b>%d</b> visitatori dal %s',
	'Top_downloads' => 'Classifica Download',
	'TOP_LIKES_NO_TOPICS' => 'Su nessun argomento &egrave; stato cliccato &quot;Mi Piace&quot; nelle ultime %s ore',
	'TOP_LIKES_DESC' => 'Argomenti che hanno ricevuto maggiore gradimento nelle ultime %s ore',
	'Total_votes' => 'Voti totali',
	'Tell_Friend' => 'Segnala ad un amico',
	'This_posts_IP' => 'Indirizzo IP per questo messaggio',
	'Users_this_IP' => 'Utenti che utilizzano questo indirizzo IP',
	'View' => 'Visualizza',
	'View_comments' => 'Leggi Commenti',
	'View_complete_list' => 'Elenco completo',
	'Visit_counter' => 'Contatore visite',
	'Visit_counter_statement' => 'Sono state visualizzate <b>%d</b> pagine di questo sito dal %s',
	'Vote' => 'Vota',
	'Who_Are_Chatting' => '%s',

	'donated_by' => 'donato da',
	'search' => 'Cerca',
	'search2' => 'Cerca:',
	'search_at' => 'Cerca su',
	'total_topics' => ' in <b>%s</b> argomenti',

	)
);

?>