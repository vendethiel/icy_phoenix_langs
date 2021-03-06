<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/* translation
                           
   ���������� �� �������: ��������� �������(zver) zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
It is translated into Russian: Mel'nikov Nikolay(zver)   zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
                    
   */
/**
*
* @Extra credits for this file
* BigRib (bigrib@gmx.de)
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

$lang = array_merge($lang, array(
	'setup_upi2db' => '������������ UPI2DB',
 'setup_upi2db_explain' => '�������� ��������� ��� ������������� �������� ���������� 2 ������� ���� ������.',
 'upi2db_on' => '<strong> �������� ������ UPI2DB? </strong>',
 'upi2db_on_explain' => '������������ ���\���� ������� UPI2DB ��� ��������� ����� ������������� ������ ���. <br/>, ���� �� ���������� ����� �������, �������� �� ��������� ������� ����-����� ����� ��������.',
 'user_select' => '������������ �������',
 'up2db_days' => '<strong> ����� ������������� ����� ��� ���������� after&hellip; </strong>',
 'up2db_days_tagen' => '���',
 'up2db_days_explain' => '����� ����, ����� ����� ��������� ��� ������������� � ���� ������. <br/> ����� ���� ����, ��� ������� ����� ����� �������� ��� ����������. <br/> ��������! ��� ������ ����, ������� �� �����������, ��� ������ ��� ����������� ���� ������ � ����������� �� ������� ������ ������! <�������> �������� �� ��������� = 30 ���� </�������>',

 'edit_as_new' => '<strong> ����� ������������ ����� ��� �����? </strong>',
 'edit_as_new_explain' => '����� ����� ����� �������������� ��� �������������?',
 'last_edit_as_new' => '<strong> ������ ����� ����� � ���� ����� �������������� ��� �������������? </strong>',
 'edit_topic_first' => '<strong> ������� ������������ ����� � ������� �� ������������� ����? </strong>',
 'edit_topic_first_explain' => '���� ����������� � "���", ��� ����������������� ����, ���������� ��� �������������, ����� ���������� ������������� ������ ���� (�������� �� ���������). ����� � "��", ��� ����������������� ����, ���������� ��� �������������, ����� ���������� �� ������� ������ ����, ���� ��� �� ����� ��������.',

 'upi2db_condition_setup' => '������� UPI2DB',
 'upi2db_condition_min_posts' => '����������� ���� ������',
 'upi2db_condition_min_regdays' => '����������� ���� ���������������� ����',
 'upi2db_unread_color' => '������� ��� ��� ��������� ���� (������������� ����)',
 'upi2db_edit_color' => '������� ��� ��� ��������� ���� (����������������� ����)',
 'upi2db_mark_color' => '������� ��� ��� ��������� ���� (���������� ����)',
 'group_allow_upi2db' => '��������� ������ ������������ UPI2DB?',
 'user_allow_upi2db' => '��������� ������������� ������������ UPI2DB?',
 'user_disable_upi2db' => '��������� ������� UPI2DB',
 'group_user' => '������������',
 'user_without_group' => '<strong> ������������ ��� ������ �������� ������ </strong>',

 'max_new_posts' => '<strong> ������������ ����� ����� ������ / ������ �������������� </strong>',
 'max_new_posts_explain' => '������ ������������ ����� ������������� ������ �� ������������',
 'max_permanent_topics' => '<strong> ������������ ����� ������� ���������� ��� �� ������������ </strong>',
 'max_permanent_topics_explain' => '������ ������������ ����� ���, ������� ������ ������������ ����� �������� ��� "������� �������� ��� ����������". ������� "0", ����� ���������� ����� ��� � ���������������.',
 'up2db_del_perm' => '<strong> ��������� ������� ���������� ������/���� �����... </strong>',
 'up2db_del_perm_explain' => '������������ ����� ����, "������� ����������, ��������� ������/���� ������" ����� ��������� �� ���� ������. ��� ����� ��������� ������ ���� ������ datarows �� ���������� �������������',

 'up2db_del_mark' => '<strong> ��������� ���������� ����� �����... </strong>',
 'up2db_del_mark_explain' => '������ ����� ����, "������� �����", ����� �������� ������, ��� ��� ����� ���������, ����� �������� ������� �������� ���� ������',
 'max_mark_posts' => '<strong> ������������ �����" ���������� ������ "�� ������������ </strong>',
 'max_mark_posts_explain' => '������������ ����� ������ ������������ ����� ��������.',
	)
);

?>