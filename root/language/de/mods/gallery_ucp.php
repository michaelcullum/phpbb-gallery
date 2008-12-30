<?php
/**
*
* gallery_ucp [Deutsch]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

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

$lang = array_merge($lang, array(
	'ALBUM_DESC'					=> 'Beschreibung',
	'ALBUM_NAME'					=> 'Name',
	'ALBUM_PARENT'					=> 'Übergeordnetes Album',
	'ATTACHED_SUBALBUMS'			=> 'Verknüpfte Subalben',

	'CREATE_PERSONAL_ALBUM'			=> 'Erstelle persönliches Album',
	'CREATE_SUBALBUM'				=> 'Erstelle ein Subalbum',
	'CREATE_SUBALBUM_EXP'			=> 'Du kannst ein Subalbum zu Deinem persönlichem Album hinzufügen.',
	'CREATED_SUBALBUM'				=> 'Subalbum erfolgreich bearbeitet',

	'DELETE_ALBUM'					=> 'Lösche Album',
	'DELETE_ALBUM_CONFIRM'			=> 'Album mit allen Bildern und Subalben löschen?',
	'DELETED_ALBUMS'				=> 'Album erfolgreich gelöscht',

	'EDIT'							=> 'Bearbeiten',
	'EDIT_ALBUM'					=> 'Dieses Album bearbeiten',
	'EDIT_SUBALBUM'					=> 'Bearbeite Subalben',
	'EDIT_SUBALBUM_EXP'				=> 'Du kannst hier Deine Alben bearbeiten.',
	'EDITED_SUBALBUM'				=> 'Album erfolgreich bearbeitet',

	'GOTO'							=> 'Gehe zu',

	'MANAGE_PERSONAL_ALBUM'			=> 'Hier kannst Du Dein persönliches Album verwalten. Du kannst Subalben hinzufügen, Beschreibungen hinzufügen und bearbeiten, die Reihenfolge der Anzeige beeinflussen und vieles mehr.',
	'MANAGE_SUBALBUMS'				=> 'Verwalte Deine Subalben',
	'MISSING_NAME'					=> 'Gib bitte einen Namen für das Album an',
	'MOVED_ALBUMS'					=> 'Album erfolgreich verschoben',

	'NEED_INITIALISE'				=> 'Du hast bisher noch kein Subalbum.',
	'NO_ALBUM_STEALING'				=> 'Du bist nicht berechtigt Alben von anderen Benutzern zu verwalten.',
	'NO_FAVORITES'					=> 'Du hast keine Lieblingsbilder.',
	'NO_MORE_SUBALBUMS_ALLOWED'		=> 'Du hast bereits die maximale Anzahl von Subalben zu Deinem persönlichem Album hinzugefügt.',
	'NO_PARENT_ALBUM'				=> '&laquo;-- kein übergeordnetes Album',
	'NO_PERSALBUM_ALLOWED'			=> 'Du bist nicht berechtigt eine persönliches Album zu erstellen.',
	'NO_PERSONAL_ALBUM'				=> 'Dein persönliches Album existiert noch nicht. Du kannst Dir hier ein privates Album und weitere Subalben erstellen.<br />Nur der Album Besitzer kann in diese persönlichen Alben Bilder hochladen.',
	'NO_SUBALBUMS'					=> 'Keine Subalben',
	'NO_SUBALBUMS_ALLOWED'			=> 'Du bist nicht berechtigt Subalben zu Deinem persönlichem Album hinzuzufügen.',
	'NO_SUBSCRIPTIONS'				=> 'Du beobachtest keine Bilder.',
	'NO_SUBSCRIPTIONS_ALBUM'		=> 'Du beobachtest keine Alben.',

	'PARSE_BBCODE'					=> 'BBCodes erkennen',
	'PARSE_SMILIES'					=> 'Smilies erkennen',
	'PARSE_URLS'					=> 'Links erkennen',
	'PERSONAL_ALBUM'				=> 'Persönliches Album',

	'REMOVE_FROM_FAVORITES'			=> 'Aus den Lieblingsbildern entfernen',

	'UNSUBSCRIBE'					=> 'nicht mehr beobachten',

	'YOUR_FAVORITE_IMAGES'			=> 'Hier siehst du deine Lieblingsbilder. Du kannst sie auch wieder entfernen, wenn sie dir nicht gefallen.',
	'YOUR_SUBSCRIPTIONS'			=> 'Hier siehst du die Bilder und Alben, bei denen du benachrichtigt wirst.',

	'WATCH_CHANGED'					=> 'Einstellungen gespeichert',
	'WATCH_COM'						=> 'Kommentierte Bilder standardmässig beobachten',
	'WATCH_FAVO'					=> 'Lieblingsbilder standardmässig beobachten',
	'WATCH_NOTE'					=> 'Die Einstellung wirkt sich nur auf neue Bilder aus. Andere Bilder musst du über die Option "Bild beobachten" hinzufügen',
	'WATCH_OWN'						=> 'Eigene Bilder standardmässig beobachten',
));

?>