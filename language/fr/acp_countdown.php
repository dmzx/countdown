<?php
/**
 *
 * phpBB Countdown. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2017 dmzx <http://www.dmzx-web.net>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'COUNTDOWN_TITLE'					=> 'Compte à rebours',
	'COUNT_DOWNCOUNT'					=> 'Décroissant',
	'COUNT_UPCOUNT'						=> 'Croissant',
	'COUNTDOWN_CONFIG_SET'				=> 'Paramètres',
	'COUNTDOWN_CONFIG_SAVED'			=> 'Les paramètres du compte à rebours ont été sauvegardés.',
	'COUNTDOWN_ENABLE'					=> 'Activer le compte à rebours',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Permet d’activer ou de désactiver le compte à rebours.',
	'COUNTDOWN_DIRECTION' 				=> 'Type de compte à rebours',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'Permet de sélectionner le type de compte à rebours entre la manière croissante ou décroissante.',
	'COUNTDOWN_DATE' 					=> 'Date du compte à rebours',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Permet de saisir la date du compte à rebours, telle que : 2015/12/31 00:00:00.',
	'COUNTDOWN_TEXT' 					=> 'Texte du compte à rebours',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'Permet de faire apparaitre le texte avant le compte à rebours.',
	'COUNTDOWN_COMPLETE'	 			=> 'Texte de la fin du compte à rebours',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Permet d’afficher un texte une fois le compte à rebours terminé.',
	'COUNTDOWN_TESTMODE' 				=> 'Mode de test du compte à rebours',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Permet d’afficher le compte à rebours uniquement aux administrateurs.',
	'COUNTDOWN_YEAR'	 				=> 'Années du compte à rebours',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Permet d’afficher les années dans le compte à rebours.',
	'COUNTDOWN_MONTH'	 				=> 'Mois du compte à rebours',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Permet d’afficher les mois dans le compte à rebours.',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Fuseau horaire du compte à rebours',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Permet de définir le fuseau horaire pris en compte dans le compte à rebours.',
	'COUNTDOWN_OFFSET' 					=> 'Paramètres du fuseau horaire',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Permet de définir un fuseau horaire spécifique pour tous les utilisateurs. Par exemple, une valeur de « 4 » équivaut à « UTC+04:00 » correspondant à « Océan Indien/Réunion » ou encore, une valeur de « -4 » équivaut à « UTC-04:00 » correspondant à « Amérique/Guadeloupe ».',
));
