<?php
/**
 * Pages languages
 *
 * @package ElggPages
 */

$turkish = array(

	/**
	 * Menu items and titles
	 */

	'pages' => "Sayfalar",
	'pages:owner' => "%s'in sayfalar&#305;",
	'pages:friends' => "Arkada&#351;lar&#305;n sayfalar&#305;",
	'pages:all' => "T&#252;m site sayfalar&#305;",
	'pages:add' => "Sayfa Ekle",

	'pages:group' => "Grup Sayfalar&#305;",
	'groups:enablepages' => 'Grup sayfalar&#305;n&#305; etkinle&#351;tir',

	'pages:edit' => "Bu sayfay&#305; d&#252;zenle",
	'pages:delete' => "Bu sayfay&#305; sil",
	'pages:history' => "Ge&#231;mi&#351;",
	'pages:view' => "Sayfay&#305; g&#246;ster",
	'pages:revision' => "Revizyon",

	'pages:navigation' => "Navigasyon",
	'pages:new' => "Yeni bir sayfa",
	'pages:notification' =>
'%s yeni bir sayfa ekledi:

%s
%s

Yeni sayfay&#305; g&#246;r&#252;nt&#252;leyin ve yan&#305;tlay&#305;n:
%s
',
	'item:object:page_top' => '&#220;st d&#252;zey sayfalar',
	'item:object:page' => 'Sayfalar',
	'pages:nogroup' => 'Bu grupta hen&#252;z sayfa yok',
	'pages:more' => 'Daha fazla sayfa',
	'pages:none' => 'Hen&#252;z sayfa olu&#351;turulmad&#305;',
	/**
	* River
	**/

	'river:create:object:page' => '%s bir %s sayfas&#305; olu&#351;turdu',
	'river:create:object:page_top' => '%s bir %s sayfas&#305; olu&#351;turdu',
	'river:update:object:page' => '%s %s sayfas&#305;n&#305; g&#252;ncelledi',
	'river:update:object:page_top' => '%s %s sayfas&#305;n&#305; g&#252;ncelledi',
	'river:comment:object:page' => '%s %s ba&#351;l&#305;kl&#305; sayfaya yorum yapt&#305;',
	'river:comment:object:page_top' => '%s %s ba&#351;l&#305;kl&#305; sayfaya yorum yapt&#305;',

	/**
	 * Form fields
	 */

	'pages:title' => 'Sayfa ba&#351;l&#305;&#287;&#305;',
	'pages:description' => 'Sayfa metni',
	'pages:tags' => 'Etiketler',
	'pages:access_id' => 'Okuma eri&#351;imi',
	'pages:write_access_id' => 'Yazma eri&#351;imi',

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => 'Sayfaya eri&#351;im yok',
	'pages:cantedit' => 'Bu sayfay&#305; d&#252;zenleyemezsiniz',
	'pages:saved' => 'Sayfa kaydedildi',
	'pages:notsaved' => 'Sayfa kaydedilemedi',
	'pages:error:no_title' => 'Sayfa i&#231;in bir ba&#351;l&#305;k belirlemelisiniz.',
	'pages:delete:success' => 'Sayfa ba&#351;ar&#305;yla silindi.',
	'pages:delete:failure' => 'Sayfa silinemedi.',

	/**
	 * Page
	 */
	'pages:strapline' => 'Son g&#252;ncelleme %s %s taraf&#305;ndan yap&#305;ld&#305;',

	/**
	 * History
	 */
	'pages:revision:subtitle' => 'Revizyon %s %s taraf&#305;ndan yap&#305;ld&#305;',

	/**
	 * Widget
	 **/

	'pages:num' => 'G&#246;r&#252;nt&#252;lenecek sayfa say&#305;s&#305;',
	'pages:widget:description' => "Bu sayfalar&#305;n&#305;z&#305;n bir listesidir.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "Sayfay&#305; g&#246;ster",
	'pages:label:edit' => "Sayfay&#305; d&#252;zenle",
	'pages:label:history' => "Sayfa ge&#231;mi&#351;i",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "Bu sayfa",
	'pages:sidebar:children' => "Alt sayfalar",
	'pages:sidebar:parent' => "Ana",

	'pages:newchild' => "Alt sayfa olu&#351;tur",
	'pages:backtoparent' => "'%s'e geri d&#246;n",
);

add_translation("tr", $turkish);