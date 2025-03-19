<?php
require_once __DIR__ . "/models/model.php";
require_once __DIR__ . "/businesLogic/show_Todo_List.php";
require_once __DIR__ . "/businesLogic/add_Todo_list.php";
require_once __DIR__ . "/businesLogic/delete_Todo_List.php";
require_once __DIR__ . "/views/views_Add_todolist.php";
require_once __DIR__ . "/views/views_delete_todolist.php";
require_once __DIR__ . "/views/views_Todolist.php";


view_todolist();
/**
 * file app.php adalah endpoint dari aplikasi ini, dimana di dalam file ini kita akan merequire semua yang di butuhkan
 */
