<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main_link.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* OOHOO < webdev@phpbb-tw.net >
* Stefan2k1 and ddonker from www.portedmods.com
* CRLin from http://mail.dhjh.tcc.edu.tw/~gzqbyr/
* Lopalong
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

$lang = array_merge($lang, array (
  'Site_links' => 'Linkek',
  'Link_lock_submit_site' => 'Oldalbek�ld�s z�rolva',
  'Link_title' => 'Oldal neve',
  'Link_desc' => 'Oldal le�r�sa',
  'Link_url' => 'Oldal URL',
  'Link_logo_src' => 'Oldal log�ja (88x31 pixel, m�rete maximum 10K), vagy hagyd �resen:',
  'Link_logo_src1' => 'Oldal log�ja (88x31 pixel, m�rete maximum 10K):',
  'Links_Preview' => 'El�n�zet',
  'Link_category' => 'Oldal kateg�ri�ja',
  'link_hits' => 'Tal�lat',
  'Link_us' => 'Link: ',
  'Link_us_explain' => 'K�rlek ted ki az oldaladra ennek az <b>%s</b> oldalnak a linkj�t. Haszn�ld ezt a HTML-t:',
  'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" alt="%s" /></a>',
  'Link_register' => 'Egy oldal aj�nl�sa',
  'Link_register_guest_rule' => 'L�pj be, mint regisztr�lt felhaszn�l�, �s akkor tudsz oldalt aj�nlani.',
  'Link_register_rule' => 'Ha kit�lt�d az �rlapot, akkor a javaslatod el lesz k�ldve j�v�hagy�sra.',
  'Link_pm_notify_subject' => 'Link hozz�adva',
  'Link_pm_notify_message' => '\nA %s link hozz�adva,\n k�rlek menj el a Linkkezel�be, �s hagyd j�v�.',
  'Link_update_success' => 'Az inform�ci� elk�ldve',
  'Link_update_fail' => 'Bocsi!! Az inform�ci� nem lett elk�ldve, k�rlek nyomd meg a vissza gombot, �s pr�b�ld meg m�g egyszer',
  'Link_incomplete' => 'Bocsi!! Nincs teljesen kit�ltve az �rlap, k�rlek nyomd meg a vissza gombot, �s pr�b�ld meg m�g egyszer',
  'Link_intval_warning' => 'Bocsi!! Nem tudsz most aj�nlani semmilyen oldalt, k�rlek gyere vissza k�s�bb',
  'Click_return_links' => 'Kattints %side%s, hogy viszat�rj a Linkekhez',
  'Please_enter_your' => 'K�rem adja meg a ',
  'No_Logo_img' => '<span class="text_blue">&#8226;</span>', // You can edit color
  'No_Display_Links_Logo' => '<span class="text_red">&#8226;</span>', // Don't display Links logo
  'Links_home' => 'Linkek',
  'Search_site' => 'Keres�oldal',
  'Search_site_title' => 'Keres�oldal neve/meghat�roz�sa:',
  'Descend_by_hits' => 'Tal�lat szerint cs�kken�',
  'Descend_by_joindate' => 'D�tum szerint cs�kken�',
  'Logo' => 'Log�',
  'Site' => 'Oldal',
  'Link_ME' => 'Link ide',
  'Remember_Me' => 'Automatikus bel�p�s',
  )
);

?>