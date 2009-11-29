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
	'BBUS_Mod_Title' => 'Statistiche Utilizzo Forum',
	'BBUS_Misc' => 'Varie',

	'BBUS_ColHeader_PostRate' => 'Livello Messaggi',
	'BBUS_ColHeader_PctUTP' => '%UTP',
	'BBUS_ColHeader_PctUTUP' => '%UTUP',
	'BBUS_ColHeader_NewTopics' => 'Nuovi Argomenti',
	'BBUS_ColHeader_TopicRate' => 'Livello Argomenti',
	'BBUS_ColHeader_Topics_Watched' => 'Seguiti',
	'BBUS_ColHeader_Header' => 'Intestazione',
	'BBUS_ColHeader_Description' => 'Descrizione',

	'BBUS_ColHeader_Posts_Explain' => 'Messaggi totali.',
	'BBUS_ColHeader_PostRate_Explain' => 'Numero medio di messaggi al giorno.',
	'BBUS_ColHeader_PctUTP_Explain' => 'Percentuale del totale messaggi.',
	'BBUS_ColHeader_PctUTUP_Explain' => 'Percentuale del totale messaggi non cancellati.',
	'BBUS_ColHeader_NewTopics_Explain' => 'Numero di nuovi argomenti iniziati dall\'utente.',
	'BBUS_ColHeader_TopicRate_Explain' => 'Numero medio di nuovi argomenti iniziati per giorno.',
	'BBUS_ColHeader_Topics_Watched_Explain' => 'Numero totale di argomenti seguiti.',

	'BBUS_Col_Descriptions_Caption' => 'Descrizione Colonne',

	'BBUS_Msg_NoPosts' => 'L\'utente non ha inviato messaggi in nessun forum.',
	'BBUS_Unpruned_Posts' => 'Totale messaggi eliminati',
	'BBUS_Scale_By' => 'Scala:',

	// Admin Configuration page
	'BBUS_Settings_Caption' => 'Impostazioni Statistiche Utilizzo Forum',
	'BBUS_Settings_Explain' => 'Queste impostazioni ti permettono di configurare quali utenti posso vedere le statistiche di Utilizzo del Forum nel profilo degli Utenti e permettono di configurare varie opzioni inerenti i dati presentati in quella pagina.',

	'BBUS_Setting_ViewLevel_Caption' => 'Permessi di Visualizzazione',
	'BBUS_Setting_ViewLevel_Note' => '<i>Nota</i>: Il Box di testo &egrave; di sola lettura.<br />Usa i checkboxes per modificare questo valore.',

	'BBUS_Setting_ViewLevel_Explain1' => 'L\'impostazione dei Permessi di Visualizzazione &egrave; la somma di uno o pi&ugrave; segni di spunta che determinano cosa sar&agrave; possibile vedere ad un determinato tipo di utente del forum nelle statistiche del profilo.  <b>Usa i checkbox qui sotto per abilitare o disabilitare la visualizzazione delle statistiche ad una determinata classe di utenti.</b><br /><br />I Livelli di Visualizzazione sono definiti nel modo seguente:<br />',

	'BBUS_Setting_ViewLevel_Explain2' => '<br />L\'impostazione pi&ugrave; comune per la maggior parte dei Forum potrebbe essere 24 (16 + 8), Che permette agli amministratori e ai moderatori di vedere le statistiche d\'uso, mentre a tutte le altre tipologio di utenti verr&agrave; visualizzata la normale pagina del profilo.<br /><br /> Si raccomanda di porre dei limiti alla visualizzazione delle statistiche soprattutto per Forum molto grandi, al fine di prevenire un degradamento delle performance.',

	'BBUS_Setting_ViewOptions_Caption' => 'Opzioni di Visualizzazione',
	'BBUS_Setting_ViewOptions_Note' => '<i>Nota</i>: Il Box di testo &egrave; di sola lettura.<br />Usa i checkboxes per modificare questo valore.',
	'BBUS_Setting_ViewOptions_Explain1' => 'Come per i Permessi di Visualizzazione, le Impostazioni di Visualizzazione sono la somma dei segni di spunta che permetto di abilitare o disabilitare alcune informazioni delle Statitistiche del Forum. <b>Usa i checkbox qui sotto per abilitare o disabilitare queste caratteristiche.</b><br /><br />Le Impostazioni di Visualizzazione sono definite nel modo seguente:<br />',
	'BBUS_Setting_ViewOptions_Explain2' => '',

	'BBUS_Settings_Default_Post_Rate_Scaling_Caption' => 'Scala Rating Messaggi Predefinita',
	'BBUS_Settings_Default_Post_Rate_Scaling_Explain' => 'Imposta il valore predefinito di scala da applicare alla colonna del Rating dei Messaggi.',

	'BBUS_Settings_Default_Topic_Rate_Scaling_Caption' => 'Scala Rating Discussioni Predefinita',
	'BBUS_Settings_Default_Topic_Rate_Scaling_Explain' => 'Imposta il valore predefinito di scala da applicare alla colonna del Rating delle Discussioni.',

	'BBUS_ViewLevel_Anonymous_Caption' => 'Anonimi',
	'BBUS_ViewLevel_Self_Caption' => 'S&egrave; Stesso',
	'BBUS_ViewLevel_Users_Caption' => 'Utenti',
	'BBUS_ViewLevel_Moderators_Caption' => 'Moderatori',
	'BBUS_ViewLevel_Admins_Caption' => 'Amministratori',
	'BBUS_ViewLevel_SpecialGrp_Caption' => 'Gruppo Speciale',

	'BBUS_ViewLevel_Anonymous_Explain' => 'Permette agli anonimi di vedere le statistiche.',
	'BBUS_ViewLevel_Self_Explain' => 'Permette agli utenti di vedere le proprie statistiche.',
	'BBUS_ViewLevel_Users_Explain' => 'Permette agli utenti di vedere le statistiche degli altri utenti.',
	'BBUS_ViewLevel_Moderators_Explain' => 'Permette ai moderatori di vedere le statistiche.',
	'BBUS_ViewLevel_Admins_Explain' => 'Permette agli amministratori di vedere le statistiche. (Consigliato)',
	'BBUS_ViewLevel_SpecialGrp_Explain' => 'Permette ad un gruppo speciale di vedere le statistiche.',

	'BBUS_ViewOption_Show_All_Forums_Caption' => 'Visualizza tutti i Forum.',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Caption' => 'Visualizza la colonna %UTUP nelle Statistiche',
	'BBUS_ViewOption_Misc_Section_Visible_Caption' => 'Visualizza la sezione Info Varie',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Caption' => 'Visualizza "Messaggi Totali" nella sezione Info Varie',
	'BBUS_ViewOption_Viewer_Scalable_PR_Caption' => 'Visualizzatore Scala Rating Messaggi',
	'BBUS_ViewOption_Viewer_Scalable_TR_Caption' => 'Visualizzatore Scala Rating Discussioni',

	'BBUS_ViewOption_Show_All_Forums_Explain' => '',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_Section_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_PR_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_TR_Explain' => '',

	'BBUS_Setting_SpecialGrp_Caption' => 'Gruppo d\'accesso Speciale',
	'BBUS_Setting_SpecialGrp_Explain' => 'Indica a quale gruppo speciale &egrave; permesso di vedere le Statistiche.  <i>Nota</i>: Queste impostazioni avreanno effetto se il \'Gruppo Speciale\' &egrave; abilitato nel Livello di Visione.',
	)
);

?>