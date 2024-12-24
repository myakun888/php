# menginstal PHP


## pengenalan php
php adalah bahasa pemrograman yang di buat atau di build untuk membangun applikasi berbasi web

> php termasuk bahasa pemrograman dynamic, dan juga mudah di pelajari bagi pemula

  
## menginstal php
  
  2 cara menginstal php
  
  1. dengan mendownload dari web php lansung
  2. dari paket bundel
   
### 1 dengan download langsung
cara ini kita lansung ke website nya, tetapi memililki kekurangan ya itu kita harus menconfigurasi secara manual dari seperti webserver dll

### 2 dengan paket bundel
cara ini lebih simpel kita bisa donwload dengan bundel di mana di dalam nya sudah ada php, servel serta configurasi dll
diantaran paket ini adalah **XAMPP, LAMPP, NGINX** dll


>> note pada materi ini kita akan menjalankan php pada back end, jadi kita menggunakan cmd atau comand promp


setelah kita menginstal php
maka php bisa kita jalankan dengan menjalan servernya terlebih dahula, contoh xampp
ini akan menjalankan php dalam server / web

pada materi ini kita akan menjalankan php dari sisi backend , yang mana dijalankan pada cmd
maka kita perlu settig path nya

### setting path

1. windows pada windows
- buka xampp, copy file binya
- buka envirotment
- edit evnirotmen
- add envirotment dan paste kan path yang sudah di copy tadi
- lalu testing buka cmd dan ketik 
 
 ```cmd
 php -v
 ```

2. linux atau mac
- buka file (.basrc atau .profile) pada home liux file ini tersembunyi jadi gunakan ls -a
  tambahkan script
bisa buka file nya code editor kalian

  'export= lokasi file bin: $PATH'

  contoh
  file bin php ada pada lokasi /opt/lampp/bin,
  maka

```cmd
export=/opt/lampp/bin:$PATH 
```
setelah itu buka ulang terminal
dan test dengan
```cmd
php -v
atau
php --versions
```