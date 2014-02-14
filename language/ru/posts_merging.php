<?php
/** 
*
* posting [Russian]
*
* @package posts_merging
* @copyright (c) 2014 Ruslan Uzdenov (rxu)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(

	'MERGE_SEPARATOR'		=> "\n\n[size=85][color=green]Отправлено спустя %s %s %s:[/color][/size]\n",
	'MERGE_SUBJECT'			=> "[size=85][color=green]%s[/color][/size]\n",

	'D_SECONDS'  => array(
		1	=> '%d секунду',
		2	=> '%d секунды',
		3	=> '%d секунд'
	),
	'D_MINUTES'  => array(
		1	=> '%d минуту',
		2	=> '%d минуты',
		3	=> '%d минут'
	),
	'D_HOURS'    => array(
		1	=> '%d час',
		2	=> '%d часа',
		3	=> '%d часов'
	),
	'D_MDAY'     => array(
		1	=> '%d день',
		2	=> '%d дня',
		3	=> '%d дней'
	),
	'D_MON'      => array(
		1	=> '%d месяц',
		2	=> '%d месяца',
		3	=> '%d месяцев'
	),
	'D_YEAR'     => array(
		1	=> '%d год',
		2	=> '%d года',
		3	=> '%d лет'
	),
	
// ACP block
	'MERGE_INTERVAL'				=> 'Интервал склеивания сообщений',
	'MERGE_INTERVAL_EXPLAIN'		=> 'Количество часов, в течение которого сообщения пользователя будут склеены с его последним сообщением темы. Оставьте поле пустым или установите 0 для отключения этой функции.',
	'MERGE_NO_TOPICS'				=> 'Темы без склеивания',
	'MERGE_NO_TOPICS_EXPLAIN'		=> 'Список разделённых запятыми номеров тем, в которых склеивание сообщений отключено.',
	'MERGE_NO_FORUMS'				=> 'Форумы без склеивания',
	'MERGE_NO_FORUMS_EXPLAIN'		=> 'Список разделённых запятыми номеров форумов, в которых склеивание сообщений отключено.',


));