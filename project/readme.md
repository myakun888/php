# Readme

ini adalah aplikasi todolist sederhana php
yang berjalan di cmd / terminal

## fitur
terbagi menjadi 3 fitur
- show todolist
- add todolist
- delete todolist

untuk database belum menggunakan database, tapi menggunakan array


## struktur folder

### busines logic
folder ini berisi logika bisnis dari aplikasi ini
terdiri dari 3 file php

1. add_todo_list.php
2. delete_todo_list.php
3. show_todo_list.php

> add todo list, berisi logika yang membuat menambahkan data
> delete todo list, berisi logika yang berguna menghapus data
> show todo list, berisi logika yang berguna menampilkan data

dan semua logika itu di buat dalam bentuk function

## models
1. modesl.php
berisi filde yang membuat data
dalam contoh ini adalah array kosong

## helper
1. input.php

berisi function yang berguna sebagai logic untuk menangkap input/data dari user melalui cmd

## testing

ini berisi semua testing , dari testing 3 fitur logika, dan tersting 3 views fitur


## views
ini berisi file yang menghendel sebagi tampilan 
berisi 
- views add todo list
- views delete todo list
- views todolist

## app.php

ini adalah file yang berguana sebagi entri point / index dari aplikasi ini