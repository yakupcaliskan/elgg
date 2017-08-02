<?php

return array(
	'discussion' => 'Tartışmalar',
	'discussion:add' => 'Tartışma konusunu ekle',
	'discussion:latest' => 'Son tartışmalar',
	'discussion:group' => 'Grup tartışmaları',
	'discussion:none' => 'Tartışma yok',
	'discussion:reply:title' => 'Yanıtlayan %s',
	'discussion:new' => "Tartışma mesajı ekle",
	'discussion:updated' => "Son cevabı %s %s",

	'discussion:topic:created' => 'Tartışma konusu oluşturuldu.',
	'discussion:topic:updated' => 'Tartışma konusu güncellendi.',
	'discussion:topic:deleted' => 'Tartışma konusu silindi.',

	'discussion:topic:notfound' => 'Tartışma konusu bulunamadı',
	'discussion:error:notsaved' => 'Bu konunun kaydedilemedi',
	'discussion:error:missing' => 'Hem başlık hem de mesaj zorunlu alanlardır',
	'discussion:error:permissions' => 'Bu işlemi gerçekleştirecek izinlere sahip değilsiniz',
	'discussion:error:notdeleted' => 'Tartışma konusu silinemedi',

	'discussion:reply:edit' => 'Cevabı ekle',
	'discussion:reply:deleted' => 'Tartışma yanıtı silindi.',
	'discussion:reply:error:notfound' => 'Tartışma yanıtı bulunamadı',
	'discussion:reply:error:notfound_fallback' => "Üzgünüz, belirtilen yanıtı bulamadık, ancak sizi orijinal tartışma konusuna yönlendirdik..",
	'discussion:reply:error:notdeleted' => 'Tartışma yanıtını silinemedi',

	'discussion:search:title' => 'Konuya cevap yaz: %s',

	/**
	 * Action messages
	 */
	'discussion:reply:missing' => 'Boş bir cevap gönderemezsin',
	'discussion:reply:topic_not_found' => 'Tartışma konusu bulunamadı',
	'discussion:reply:error:cannot_edit' => '
Bu cevabı düzenlemek için izniniz yok',
	'discussion:reply:error:permissions' => '
Bu konuyla ilgili cevap yazamazsınız',

	/**
	 * River
	 */
	'river:create:object:discussion' => '%s Yeni bir tartışma konusunu ekledi %s',
	'river:reply:object:discussion' => '%s 
Tartışma konusuyla ilgili yanıtladı%s',
	'river:reply:view' => 'Cevabı görüntüle',

	/**
	 * Notifications
	 */
	'discussion:topic:notify:summary' => 'Yeni tartışma konusu belirlendi%s',
	'discussion:topic:notify:subject' => 'Yeni tartışma konusu: %s',
	'discussion:topic:notify:body' =>
'%s Yeni bir tartışma konusunu ekledi "%s":

%s

Tartışma konusunu görüntüleyin ve cevaplayın:
%s
',

	'discussion:reply:notify:summary' => 'Konuya yeni yanıt: %s',
	'discussion:reply:notify:subject' => 'Konuyla yeni yanıt: %s',
	'discussion:reply:notify:body' =>
'%s Tartışma konusuna cevap verdi "%s":

%s

Tartışmayı görüntüleyin ve yanıtlayın:
%s
',

	'item:object:discussion' => "Tartışma konuları",
	'item:object:discussion_reply' => "Tartışma cevapları",

	'groups:enableforum' => 'Grup tartışmalarını etkinleştir',

	'reply:this' => 'Bunu cevapla',

	/**
	 * ecml
	 */
	'discussion:ecml:discussion' => 'Grup Tartışmaları',

	/**
	 * Discussion status
	 */
	'discussion:topic:status' => 'Konu durumu',
	'discussion:topic:closed:title' => 'Bu tartışma kapalıdır.',
	'discussion:topic:closed:desc' => 'Bu tartışma kapatıldı ve yeni yorumlar kabul edilmiyor.',

	'discussion:replies' => 'Cevaplar',
	'discussion:addtopic' => 'Başlık ekle',
	'discussion:post:success' => 'Yanıtınız başarıyla gönderildi',
	'discussion:post:failure' => 'Yanıtınızı gönderirken sorun oluştu.',
	'discussion:topic:edit' => 'Konuyu düzenle',
	'discussion:topic:description' => 'Konu mesajı',

	'discussion:reply:edited' => "Forum yazısını başarıyla düzenlediniz.",
	'discussion:reply:error' => "
Forumun yazı düzenlenmesi sırasında bir sorun oluştu.",
);
add_translation('tr', $turkish);