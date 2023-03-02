MOVIES DB 
----------
###### (20 puan)

- yerel olarak 230302_movies.sql dosyasını veritabanınıza aktarın (bkz. /sql alt klasörü).

- index.php'de önce en iyi skora göre sıralanmış tüm filmlerin bir tablosunu görmelisiniz, ancak bunun olmasını engelleyen bir hata var -> düzeltin!

- Her satırın bir düzenleme ve silme bağlantısı vardır, ancak bu şimdilik bir şey yapmaz -> bunun çalıştığından emin olun.

   - SİLMEK
     - bu, veritabanındaki 'yayınlandı' değerinin 0 olarak ayarlanması gerektiği anlamına gelir
     - çalıştırmadan önce kullanıcı onayı iste

   - DÜZENLEMEK
     - edit.php'de aşağıdaki alanların önceden doldurulabileceği ve düzenlenebileceği bir form sağlayın:
       - isim -> metin -> input
       - stüdyo -> metin  -> input
        - tür -> aşağıdaki seçeneklerle açılır:  -> select
         - Romantik
         - komedi
         - Dram
         - Animasyon
         - Fantezi
         - Aksiyon
         - Bilim Kurgu
         - Korku
       - puan -> 0'dan 100'e kadar sayı  -> input type number min 0
       - yıl -> 1900 ile cari yıl arasındaki sayı  -> input type number min 1900
       - yayınlandı -> onay kutusu -> input type checkbox 
     - bir "kaydet" düğmesi sağlayın
     - gerekli doğrulamayı sağlayın!!!
     - Başarılı düzenlemeden sonra, kullanıcı ana sayfayı tekrar görmelidir. Bu sayfanın üst kısmında "*name* üzerinde yaptığınız değişiklikler kaydedildi!" ifadesini göreceksiniz. burada *ad* değiştirilen filmin adıdır.

- Kodu olabildiğince verimli bir şekilde yazın, okunabilirliği dikkate alın ve gerektiğinde belgeleyin!

- İyi şanlar!