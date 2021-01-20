# YII2 İLE MODULE YAPISI KULLANARAK FUTBOL YETENEK AVCISI VERİTABANI YAPIMI

### PROJE KURULUMU
1. yii2 advanced template içerisine modülümüzü import etmeliyiz. terminali bu dosya yolu üzerine ayarlayıp terminale aşağıdaki komutu yapıştırıp modülü import etmeliyiz.
```
composer require mertoncel/yii2-content
```
2. yii2-advanced projesinin backend\config\main.php dosyasına modülü eklemeliyiz.
```
'modules' => [
        'scouting' => [
            'class' => 'backend\modules\scouting\Scouting',
        ]
    ],
```    
3. Xampp ya da Vagrant kullanılarak ayağa kaldırılan yii2 advanced projesinin link kısmının sonuna;
* Backend için
```
?r=content/backend/players/index
```
* Frontend için:
```
?r=content/frontend/players/index
```
uzantıları eklenerek modüle ulaşılır. 



```
kodlar
```

![alt text](https://i.imgur.com/DCeIvcE.png)
![alt text](https://i.imgur.com/ESAitNT.png)
![alt text](https://i.imgur.com/PN5D02i.png)
![alt text](https://i.imgur.com/oP5hjGR.png)
