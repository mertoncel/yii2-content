# YII2 İLE MODULE YAPISI KULLANARAK FUTBOL YETENEK AVCISI VERİTABANI YAPIMI

## PROJE KURULUMU
1. yii2 advanced template içerisine modülümüzü import etmeliyiz. terminali bu dosya yolu üzerine ayarlayıp terminale aşağıdaki komutu yapıştırıp modülü import etmeliyiz.
```
composer require mertoncel/yii2-content
```

2. yii2-advanced projesinin backend\config\main.php ya da  frontend\config\main.php dosyasına modülü eklemeliyiz.

```
'modules' => [
  'content' => [
  'class' => 'mertoncel\content\Module'
  ]
],
```    
3. Veritabanına modül ile alakalı tabloların yüklenebilmesi için aşağıdaki komutla migration  yapılmalıdır.
```  
php yii migrate/up --migrationPath=@vendor/mertoncel/yii2-content/migrations
```  



4. Xampp ya da Vagrant kullanılarak ayağa kaldırılan yii2 advanced projesinin link kısmının sonuna;
* Backend için
```
?r=content/backend/players/index
```

* Frontend için:
```
?r=content/frontend/players/index
```

uzantıları eklenerek modüle ulaşılır. 

## EKRAN GÖRÜNTÜLERİ

### MODULE DOSYA YAPISI
![alt text](https://i.imgur.com/DCeIvcE.png)
### Backendde veritabanındaki oyuncuları görüntüleme
![alt text](https://i.imgur.com/ESAitNT.png)
### Veritabanına yeni oyuncu ekleme
![alt text](https://i.imgur.com/PN5D02i.png)
### Frontendde veritabanına ekli oyuncuları görüntüleme
![alt text](https://i.imgur.com/oP5hjGR.png)
