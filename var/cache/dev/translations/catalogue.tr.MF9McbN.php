<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('tr', array (
  'validators+intl-icu' => 
  array (
    'post.blank_summary' => 'Gönderiniz için bir özet giriniz!',
    'post.blank_content' => 'Gönderiniz bir içeriğe sahip olmalı!',
    'post.too_short_content' => 'Yayın içeriği çok kısa ({ limit } minimum karakter)',
    'post.too_many_tags' => 'Çok fazla etiket var ({ limit } etiketini veya daha azını ekleyin)',
    'comment.blank' => 'Lütfen yorumunuzu boş bırakmayın!',
    'comment.too_short' => 'Yorum çok kısa ({ limit } minimum karakter)',
    'comment.too_long' => 'Yorum çok uzun ({ limit } maksimum karakter)',
    'comment.is_spam' => 'Bu yorumun içeriği spam olarak kabul edilir.',
  ),
  'validators' => 
  array (
    'This value should be false.' => 'Bu değer olumsuz olmalıdır.',
    'This value should be true.' => 'Bu değer olumlu olmalıdır.',
    'This value should be of type {{ type }}.' => 'Bu değerin tipi {{ type }} olmalıdır.',
    'This value should be blank.' => 'Bu değer boş olmalıdır.',
    'The value you selected is not a valid choice.' => 'Seçtiğiniz değer geçerli bir seçenek değil.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'En az {{ limit }} seçenek belirtmelisiniz.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'En çok {{ limit }} seçenek belirtmelisiniz.',
    'One or more of the given values is invalid.' => 'Verilen değerlerden bir veya daha fazlası geçersiz.',
    'This field was not expected.' => 'Bu alan beklenen olmadı.',
    'This field is missing.' => 'Bu alan, eksik',
    'This value is not a valid date.' => 'Bu değer doğru bir tarih biçimi değildir.',
    'This value is not a valid datetime.' => 'Bu değer doğru bir tarihsaat biçimi değildir.',
    'This value is not a valid email address.' => 'Bu değer doğru bir e-mail adresi değildir.',
    'The file could not be found.' => 'Dosya bulunamadı.',
    'The file is not readable.' => 'Dosya okunabilir değil.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Dosya çok büyük ({{ size }} {{ suffix }}). İzin verilen en büyük dosya boyutu {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Dosyanın mime tipi geçersiz ({{ type }}). İzin verilen mime tipleri {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Bu değer {{ limit }} ve altında olmalıdır.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Bu değer çok uzun. {{ limit }} karakter veya daha az olmalıdır.',
    'This value should be {{ limit }} or more.' => 'Bu değer {{ limit }} veya daha fazla olmalıdır.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Bu değer çok kısa. {{ limit }} karakter veya daha fazla olmaldır.',
    'This value should not be blank.' => 'Bu değer boş bırakılmamalıdır.',
    'This value should not be null.' => 'Bu değer boş bırakılmamalıdır.',
    'This value should be null.' => 'Bu değer boş bırakılmalıdır.',
    'This value is not valid.' => 'Bu değer geçerli değil.',
    'This value is not a valid time.' => 'Bu değer doğru bir saat değil.',
    'This value is not a valid URL.' => 'Bu değer doğru bir URL değil.',
    'The two values should be equal.' => 'İki değer eşit olmalıdır.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Dosya çok büyük. İzin verilen en büyük dosya boyutu {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Dosya çok büyük.',
    'The file could not be uploaded.' => 'Dosya yüklenemiyor.',
    'This value should be a valid number.' => 'Bu değer geçerli bir rakam olmalıdır.',
    'This file is not a valid image.' => 'Bu dosya geçerli bir resim değildir.',
    'This is not a valid IP address.' => 'Bu geçerli bir IP adresi değildir.',
    'This value is not a valid language.' => 'Bu değer geçerli bir lisan değil.',
    'This value is not a valid locale.' => 'Bu değer geçerli bir yer değildir.',
    'This value is not a valid country.' => 'Bu değer geçerli bir ülke değildir.',
    'This value is already used.' => 'Bu değer şu anda kullanımda.',
    'The size of the image could not be detected.' => 'Resmin boyutu saptanamıyor.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Resmin genişliği çok büyük ({{ width }}px). İzin verilen en büyük genişlik {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Resmin genişliği çok küçük ({{ width }}px). En az {{ min_width }}px olmalıdır.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Resmin yüksekliği çok büyük ({{ height }}px). İzin verilen en büyük yükseklik {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Resmin yüksekliği çok küçük ({{ height }}px). En az {{ min_height }}px olmalıdır.',
    'This value should be the user\'s current password.' => 'Bu değer kullanıcının şu anki şifresi olmalıdır.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Bu değer tam olarak {{ limit }} karakter olmaldır.',
    'The file was only partially uploaded.' => 'Dosya sadece kısmen yüklendi.',
    'No file was uploaded.' => 'Hiçbir dosya yüklenmedi.',
    'No temporary folder was configured in php.ini.' => 'php.ini içerisinde geçici dizin tanımlanmadı.',
    'Cannot write temporary file to disk.' => 'Geçici dosya diske yazılamıyor.',
    'A PHP extension caused the upload to fail.' => 'Bir PHP eklentisi dosyanın yüklemesini başarısız kıldı.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bu derlem {{ limit }} veya daha çok eleman içermelidir.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bu derlem {{ limit }} veya daha az eleman içermelidir.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bu derlem {{ limit }} eleman içermelidir.',
    'Invalid card number.' => 'Geçersiz kart numarası.',
    'Unsupported card type or invalid card number.' => 'Desteklenmeyen kart tipi veya geçersiz kart numarası.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Bu geçerli bir Uluslararası Banka Hesap Numarası (IBAN) değildir.',
    'This value is not a valid ISBN-10.' => 'Bu değer geçerli bir ISBN-10 değildir.',
    'This value is not a valid ISBN-13.' => 'Bu değer geçerli bir ISBN-13 değildir.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Bu değer geçerli bir ISBN-10 veya ISBN-13 değildir.',
    'This value is not a valid ISSN.' => 'Bu değer geçerli bir ISSN değildir.',
    'This value is not a valid currency.' => 'Bu değer geçerli bir para birimi değil.',
    'This value should be equal to {{ compared_value }}.' => 'Bu değer {{ compared_value }} ile eşit olmalıdır.',
    'This value should be greater than {{ compared_value }}.' => 'Bu değer {{ compared_value }} değerinden büyük olmalıdır.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Bu değer {{ compared_value }} ile eşit veya büyük olmalıdır.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Bu değer {{ compared_value_type }} {{ compared_value }} ile aynı olmalıdır.',
    'This value should be less than {{ compared_value }}.' => 'Bu değer {{ compared_value }} değerinden düşük olmalıdır.',
    'This value should be less than or equal to {{ compared_value }}.' => '.Bu değer {{ compared_value }} ile eşit veya düşük olmalıdır.',
    'This value should not be equal to {{ compared_value }}.' => 'Bu değer {{ compared_value }} ile eşit olmamalıdır.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Bu değer {{ compared_value_type }} {{ compared_value }} ile aynı olmamalıdır.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Resim oranı çok büyük ({{ ratio }}). İzin verilen maksimum oran: {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Resim oranı çok ufak ({{ ratio }}). Beklenen minimum oran {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Resim karesi ({{ width }}x{{ height }}px). Kare resimlerine izin verilmiyor.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Resim manzara odaklı ({{ width }}x{{ height }}px). Manzara odaklı resimlere izin verilmiyor.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Resim portre odaklı ({{ width }}x{{ height }}px). Portre odaklı resimlere izin verilmiyor.',
    'An empty file is not allowed.' => 'Boş bir dosyaya izin verilmiyor.',
    'The host could not be resolved.' => 'Sunucu çözülemedi.',
    'This value does not match the expected {{ charset }} charset.' => 'Bu değer beklenen {{ charset }} karakter kümesiyle eşleşmiyor.',
    'This is not a valid Business Identifier Code (BIC).' => 'Bu geçerli bir İşletme Tanımlayıcı Kodu (BIC) değildir.',
    'Error' => 'Hata',
    'This is not a valid UUID.' => 'Bu geçerli bir UUID değildir.',
    'This value should be a multiple of {{ compared_value }}.' => 'Bu değer {{ compare_value }} değerinin katlarından biri olmalıdır.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Bu İşletme Tanımlayıcı Kodu (BIC), IBAN {{ iban }} ile ilişkili değildir.',
    'This form should not contain extra fields.' => 'Form ekstra alanlar içeremez.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Yüklenen dosya boyutu çok yüksek. Lütfen daha küçük bir dosya yüklemeyi deneyin.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF fişi geçersiz. Formu tekrar göndermeyi deneyin.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Bir yetkilendirme istisnası oluştu.',
    'Authentication credentials could not be found.' => 'Kimlik bilgileri bulunamadı.',
    'Authentication request could not be processed due to a system problem.' => 'Bir sistem hatası nedeniyle yetkilendirme isteği işleme alınamıyor.',
    'Invalid credentials.' => 'Geçersiz kimlik bilgileri.',
    'Cookie has already been used by someone else.' => 'Çerez bir başkası tarafından zaten kullanılmıştı.',
    'Not privileged to request the resource.' => 'Kaynak talebi için imtiyaz bulunamadı.',
    'Invalid CSRF token.' => 'Geçersiz CSRF fişi.',
    'No authentication provider found to support the authentication token.' => 'Yetkilendirme fişini destekleyecek yetkilendirme sağlayıcısı bulunamadı.',
    'No session available, it either timed out or cookies are not enabled.' => 'Oturum bulunamadı, zaman aşımına uğradı veya çerezler etkin değil.',
    'No token could be found.' => 'Fiş bulunamadı.',
    'Username could not be found.' => 'Kullanıcı adı bulunamadı.',
    'Account has expired.' => 'Hesap zaman aşımına uğradı.',
    'Credentials have expired.' => 'Kimlik bilgileri zaman aşımına uğradı.',
    'Account is disabled.' => 'Hesap engellenmiş.',
    'Account is locked.' => 'Hesap kilitlenmiş.',
  ),
  'messages+intl-icu' => 
  array (
    'note' => 'NOT',
    'tip' => 'TÜYO',
    'not_available' => 'Uygun değil',
    'mit_license' => 'MİT Lisansı',
    'http_error.name' => 'Hata {status_code, number}',
    'http_error.description' => 'İsteğinizi tamamlamayı engelleyen bilinmeyen bir hata oluştu (HTTP {status_code}).',
    'http_error.suggestion' => 'Bu sayfayı birkaç dakika içinde tekrar yüklemeyi veya <a href="{url}">ana sayfaya geri dönmeyi</a> deneyin.',
    'http_error_403.description' => 'Bu kaynağa erişim izniniz yok.',
    'http_error_403.suggestion' => 'Yöneticinize veya sistem yöneticinize bu kaynağa erişim izni vermesini isteyin.',
    'http_error_404.description' => 'İstediğiniz sayfayı bulamadık.',
    'http_error_404.suggestion' => 'URL\'de yanlış yazımları kontrol edin veya <a href="{url}">ana sayfaya geri dönün</a>.',
    'http_error_500.description' => 'Bir iç sunucu hatası vardı.',
    'http_error_500.suggestion' => 'Bu sayfayı birkaç dakika içinde tekrar yüklemeyi veya <a href="{url}">ana sayfaya geri dönmeyi</a> deneyin.',
    'title.homepage' => '<Strong> Symfony Demo </strong> uygulamasına hoş geldiniz',
    'title.source_code' => 'Bu sayfayı oluşturmak için kullanılan kaynak kodu',
    'title.controller_code' => 'Denetleyici kodu',
    'title.twig_template_code' => 'Twig şablon kodu',
    'title.login' => 'Güvenli Giriş',
    'title.post_list' => 'Gönderi Listesi',
    'title.edit_post' => 'Gönderiyi düzenle #{id, number}',
    'title.add_comment' => 'Yorum ekle',
    'title.comment_error' => 'Yorumunuz yayınlanırken bir hata oluştu',
    'action.show' => 'Göster',
    'action.show_post' => 'Gönderiyi göster',
    'action.show_code' => 'Kodu göster',
    'action.edit' => 'Düzenle',
    'action.edit_post' => 'Gönderiyi düzenle',
    'action.save' => 'Değişiklikleri kaydet',
    'action.delete_post' => 'Gönderiyi sil',
    'delete_post_modal.title' => 'Bu gönderiyi silmek istediğinizden emin misiniz?',
    'delete_post_modal.body' => 'Bu işlem geri alınamaz.',
    'label.delete_post' => 'Gönderiyi sil',
    'label.cancel' => 'İptal',
    'action.create_post' => 'Yeni bir gönderi oluştur',
    'label.create_post' => 'Gönderi oluştur',
    'label.save_and_create_new' => 'Kaydet ve yeni oluştur',
    'action.back_to_list' => 'Gönderi listesine geri dön',
    'action.publish_comment' => 'Yorumu yayınla',
    'action.sign_in' => 'Giriş yap',
    'action.browse_app' => 'Uygulamaya göz at',
    'action.browse_admin' => 'Yönetim paneline göz at',
    'label.title' => 'Başlık',
    'label.author' => 'Yazar',
    'label.author_email' => 'Yazar e-postası',
    'label.username' => 'Kullanıcı adı',
    'label.password' => 'Şifre',
    'label.role' => 'Rol',
    'label.content' => 'İçerik',
    'label.summary' => 'Özet',
    'label.published_at' => 'Yayınlandı',
    'label.tags' => 'Etiketler',
    'label.actions' => 'İşlemler',
    'title.post_new' => 'Gönderi oluluşturma',
    'action.edit_contents' => 'İçeriği düzenle',
    'menu.toggle_nav' => 'Navigasyonu değiştir',
    'menu.choose_language' => 'Dil seç',
    'menu.post_list' => 'Gönderi listesi',
    'menu.back_to_blog' => 'Blog\'a dön',
    'menu.homepage' => 'Anasayfa',
    'menu.admin' => 'Yönetim paneli',
    'menu.logout' => 'Çıkış',
    'menu.rss' => 'Blog Yazıları RSS',
    'menu.search' => 'Arama',
    'post.to_publish_a_comment' => 'yorum ekle',
    'post.num_comments' => '{count} yorum',
    'post.commented_on' => 'yorum yaptı',
    'post.no_comments' => 'Bu yazıya ilk yorum yapan siz olun.',
    'post.no_posts_found' => 'Gönderi bulunamadı.',
    'post.created_successfully' => 'Gönderi başarıyla oluşturuldu!',
    'post.updated_successfully' => 'Gönderi başarıyla güncellendi!',
    'post.deleted_successfully' => 'Gönderi başarıyla silindi!',
    'post.search_for' => 'Arama...',
    'post.search_no_results' => 'Sonuç bulunamadı',
    'notification.comment_created' => 'Gönderiniz bir yorum aldı!',
    'notification.comment_created.description' => 'Gönderiniz "{title}" yeni bir yorum aldı. Yorumu <a href="{link}">bu bağlantıyı</a> takip ederek okuyabilirsiniz.',
    'help.app_description' => 'Bu, Symfony uygulamalarının geliştirilmesinde önerilen yöntemleri göstermek için, Symfony Framework\'de oluşturulmuş bir <strong>demo uygulamasıdır</strong>.',
    'help.show_code' => 'Bu sayfayı oluşturmak için kullanılan <strong>Denetleyici</strong> ve <strong>şablon</strong> kaynak kodunu göstermek için bu butona tıklayın.',
    'help.browse_app' => 'Demo uygulamasının <strong>genel bölümüne</strong> göz atın.',
    'help.browse_admin' => 'Demo uygulamasının <strong>yönetim paneline</strong> göz atın.',
    'help.login_users' => 'Aşağıdaki kullanıcılardan birini deneyin',
    'help.role_user' => 'normal kullanıcı',
    'help.role_admin' => 'yönetici',
    'help.reload_fixtures' => 'Bu kullanıcılar işe yaramazsa, bu komutu terminalden çalıştırarak uygulama datasını yeniden yükleyin:',
    'help.add_user' => 'Yeni kullanıcılar oluşturmak isterseniz, bu komutu çalıştırın:',
    'help.more_information' => 'Daha fazla bilgi için <a href="https://symfony.com/doc">Symfony doc sayfasına bakın.</a>.',
    'rss.title' => 'Symfony Demo blogu',
    'rss.description' => 'Symfony Demo blogunda yayınlanan son yazılar',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators+intl-icu' => 
  array (
    'post.blank_summary' => 'Give your post a summary!',
    'post.blank_content' => 'Your post should have some content!',
    'post.too_short_content' => 'Post content is too short ({ limit } characters minimum)',
    'post.too_many_tags' => 'Too many tags (add { limit } tags or less)',
    'comment.blank' => 'Please don\'t leave your comment blank!',
    'comment.too_short' => 'Comment is too short ({ limit } characters minimum)',
    'comment.too_long' => 'Comment is too long ({ limit } characters maximum)',
    'comment.is_spam' => 'The content of this comment is considered spam.',
  ),
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'messages+intl-icu' => 
  array (
    'note' => 'NOTE',
    'tip' => 'TIP',
    'not_available' => 'Not available',
    'mit_license' => 'MIT License',
    'http_error.name' => 'Error {status_code, number}',
    'http_error.description' => 'There was an unknown error (HTTP {status_code, number}) that prevented to complete your request.',
    'http_error.suggestion' => 'Try loading this page again in some minutes or <a href="{url}">go back to the homepage</a>.',
    'http_error_403.description' => 'You don\'t have permission to access to this resource.',
    'http_error_403.suggestion' => 'Ask your manager or system administrator to grant you access to this resource.',
    'http_error_404.description' => 'We couldn\'t find the page you requested.',
    'http_error_404.suggestion' => 'Check out any misspelling in the URL or <a href="{url}">go back to the homepage</a>.',
    'http_error_500.description' => 'There was an internal server error.',
    'http_error_500.suggestion' => 'Try loading this page again in some minutes or <a href="{url}">go back to the homepage</a>.',
    'title.homepage' => 'Welcome to the <strong>Symfony Demo</strong> application',
    'title.source_code' => 'Source code used to render this page',
    'title.controller_code' => 'Controller code',
    'title.twig_template_code' => 'Twig template code',
    'title.login' => 'Secure Sign in',
    'title.post_list' => 'Post List',
    'title.edit_post' => 'Edit post #{id, number}',
    'title.add_comment' => 'Add a comment',
    'title.comment_error' => 'There was an error publishing your comment',
    'title.edit_user' => 'Edit user',
    'title.change_password' => 'Change password',
    'action.show' => 'Show',
    'action.show_post' => 'Show post',
    'action.show_code' => 'Show code',
    'action.edit' => 'Edit',
    'action.edit_post' => 'Edit post',
    'action.save' => 'Save changes',
    'action.delete_post' => 'Delete post',
    'delete_post_modal.title' => 'Are you sure you want to delete this post?',
    'delete_post_modal.body' => 'This action cannot be undone.',
    'label.delete_post' => 'Delete post',
    'label.cancel' => 'Cancel',
    'action.create_post' => 'Create a new post',
    'label.create_post' => 'Create post',
    'label.save_and_create_new' => 'Save and create new',
    'action.back_to_list' => 'Back to the post list',
    'action.publish_comment' => 'Publish comment',
    'action.sign_in' => 'Sign in',
    'action.browse_app' => 'Browse application',
    'action.browse_admin' => 'Browse backend',
    'action.edit_user' => 'Edit user',
    'action.change_password' => 'Change password',
    'label.title' => 'Title',
    'label.author' => 'Author',
    'label.author_email' => 'Author email',
    'label.username' => 'Username',
    'label.fullname' => 'Fullname',
    'label.email' => 'Email',
    'label.password' => 'Password',
    'label.current_password' => 'Current password',
    'label.new_password' => 'New password',
    'label.new_password_confirm' => 'Confirm password',
    'label.role' => 'Role',
    'label.content' => 'Content',
    'label.summary' => 'Summary',
    'label.published_at' => 'Published at',
    'label.tags' => 'Tags',
    'label.actions' => 'Actions',
    'title.post_new' => 'Post creation',
    'action.edit_contents' => 'Edit contents',
    'menu.toggle_nav' => 'Toggle navigation',
    'menu.choose_language' => 'Choose language',
    'menu.post_list' => 'Post list',
    'menu.back_to_blog' => 'Back to blog',
    'menu.homepage' => 'Homepage',
    'menu.admin' => 'Backend',
    'menu.user' => 'Account',
    'menu.logout' => 'Logout',
    'menu.rss' => 'Blog Posts RSS',
    'menu.search' => 'Search',
    'post.to_publish_a_comment' => 'to publish a comment',
    'post.num_comments' => '{count, plural, one {# comment} other {# comments}}',
    'post.commented_on' => 'commented on',
    'post.no_comments' => 'Be the first to comment on this post.',
    'post.no_posts_found' => 'No posts found.',
    'post.created_successfully' => 'Post created successfully!',
    'post.updated_successfully' => 'Post updated successfully!',
    'post.deleted_successfully' => 'Post deleted successfully!',
    'post.search_for' => 'Search for...',
    'post.search_no_results' => 'No results found',
    'user.updated_successfully' => 'User updated successfully!',
    'notification.comment_created' => 'Your post received a comment!',
    'notification.comment_created.description' => 'Your post "{title}" has received a new comment. You can read the comment by following <a href="{link}">this link</a>',
    'help.app_description' => 'This is a <strong>demo application</strong> built in the Symfony Framework to illustrate the recommended way of developing Symfony applications.',
    'help.show_code' => 'Click on this button to show the source code of the <strong>Controller</strong> and <strong>template</strong> used to render this page.',
    'help.browse_app' => 'Browse the <strong>public section</strong> of the demo application.',
    'help.browse_admin' => 'Browse the <strong>admin backend</strong> of the demo application.',
    'help.login_users' => 'Try either of the following users',
    'help.role_user' => 'regular user',
    'help.role_admin' => 'administrator',
    'help.reload_fixtures' => 'If these users don\'t work, reload application fixtures by running this command from the terminal:',
    'help.add_user' => 'If you want to create new users, run this other command:',
    'help.more_information' => 'For more information, check out the <a href="https://symfony.com/doc">Symfony doc</a>.',
    'help.post_summary' => 'Summaries can\'t contain Markdown or HTML contents; only plain text.',
    'help.post_publication' => 'Set the date in the future to schedule the blog post publication.',
    'help.post_content' => 'Use Markdown to format the blog post contents. HTML is allowed too.',
    'help.comment_content' => 'Comments not complying with our Code of Conduct will be moderated.',
    'info.change_password' => 'After changing your password, you will be logged out of the application.',
    'rss.title' => 'Symfony Demo blog',
    'rss.description' => 'Most recent posts published on the Symfony Demo blog',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.current' => '(current)',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
