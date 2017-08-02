<?php
return array(
	'APIException:ApiResultUnknown' => "API sonucu bilinmeyen bir tür, bu asla olmamalı.",
	'APIException:MissingParameterInMethod' => "Eksik parametre %s Yöntemde %s",
	'APIException:ParameterNotArray' => "%s Dizi olarak görünmüyor.",
	'APIException:UnrecognisedTypeCast' => "Dökümde tanınmayan tür %s Değişken için '%s' Yöntemde '%s'",
	'APIException:InvalidParameter' => "geçersiz parametre bulundu '%s' Yöntemde '%s'.",
	'APIException:FunctionParseError' => "%s(%s) Ayrıştırma hatası var.",
	'APIException:FunctionNoReturn' => "%s(%s) Değer döndürmedi.",
	'APIException:APIAuthenticationFailed' => "Yöntem çağrısı API Kimlik Doğrulaması'nda başarısız oldu",
	'APIException:UserAuthenticationFailed' => "Yöntem çağrısı Kullanıcı Kimlik Doğrulaması'nda başarısız oldu",
	'APIException:MethodCallNotImplemented' => "Yöntem çağrısı '%s' Uygulanmadı.",
	'APIException:FunctionDoesNotExist' => "Yöntem fonksiyonu'%s' 
Çağrılabilir değil",
	'APIException:AlgorithmNotSupported' => "Algoritma '%s' Desteklenmiyor veya devre dışı.",
	'APIException:NotGetOrPost' => "İstek yöntemi GET veya POST olmalıdır.",
	'APIException:MissingAPIKey' => "Eksik API anahtarı",
	'APIException:BadAPIKey' => "Yanlış API anahtarı",
	'APIException:MissingHmac' => "Eksik X-Elgg-hmac başlığı",
	'APIException:MissingHmacAlgo' => "Eksik X-Elgg-hmac-algo başlığı",
	'APIException:MissingTime' => "Eksik X-Elgg-time başlığı",
	'APIException:MissingNonce' => "Eksik X-Elgg-nonce başlığı",
	'APIException:TemporalDrift' => "X-Elgg-zamanı geçmişte veya ileride çok uzak. Yeni nokta başarısız.",
	'APIException:NoQueryString' => "Sorgu dizesiyle ilgili hiçbir bilgi yok",
	'APIException:MissingPOSTHash' => "
Eksik X-Elgg-posthash başlığı",
	'APIException:MissingPOSTAlgo' => "
Eksik X-Elgg-posthash_algo başlığı",
	'APIException:MissingContentType' => "Yayın sonrası veriler için eksik içerik türü",
	'SecurityException:APIAccessDenied' => "
Maalesef API erişimi yönetici tarafından devre dışı bırakıldı.",
	'SecurityException:NoAuthMethods' => "
Bu API isteğini doğrulayabilecek kimlik doğrulama yöntemleri bulunamadı.",
	'SecurityException:authenticationfailed' => "
Kullanıcı kimliği doğrulanamadı",
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "Yöntem veya işlev expose_method () çağrısında ayarlanmadı",
	'InvalidParameterException:APIParametersArrayStructure' => "Parametreler dizi yapısı, yöntemi çağırmak için yanlış '%s'",
	'InvalidParameterException:UnrecognisedHttpMethod' => "
Parametreler array structUnrecognised http yöntemi% s api yöntemi için ure yöntemi çağrısı için yanlış'%s'",
	'SecurityException:AuthTokenExpired' => "
Kimlik doğrulama simgesi eksik, geçersiz veya süresi doldu.",
	'SecurityException:InvalidPostHash' => "
POST veri karması geçersiz %s.",
	'SecurityException:DupePacket' => "Paket imzası zaten görüldü.",
	'SecurityException:InvalidAPIKey' => "Geçersiz veya eksik API Anahtarı.",
	'NotImplementedException:CallMethodNotImplemented' => "Çağrı yöntemi '% s' şu anda desteklenmiyor.",
	'CallException:InvalidCallMethod' => "%s Kullanarak çağrılması gerekir '%s'",

	'system.api.list' => "
Sistemde mevcut tüm API çağrılarını listeleyin.",
	'auth.gettoken' => "
Bu API çağrısı, bir kullanıcının gelecekteki API çağrılarının kimlik doğrulamasında kullanılabilecek bir kullanıcı kimlik doğrulama belirteci elde etmesini sağlar. Bunu auth_token parametresi olarak iletin.",
);
add_translation('tr', $turkish);