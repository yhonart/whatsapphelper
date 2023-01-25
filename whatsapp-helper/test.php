<?php
/*
 * File: test.php
 * Project: src
 * Created Date: Mo Oct 2022
 * Author: Yusuf Hanafi
 * Email: yusuf7789@gmail.com
 * -------------------------
 * Last Modified: Fri Jan 20 2023
 * Modified By: YH development
 * -------------------------
 * Copyright (c) 2023 Dazira 

 * -------------------------
 * HISTORY:
 * Date      	By	Comments 

 * ----------	---	---------------------------------------------------------
 * 
 * Modul ini dibuat untuk mendukung program web based yang telah di terapkan pada salah satu perusahaan untuk kedepannya digunakan untuk notifikasi. 
 * 
 * 
 */

use ay4t\WhatsAppHelper\WhatsAppSG;

require 'vendor/autoload.php';

/* ------------------------ contoh penggunaan pertama ----------------------- */

$wa     = new WhatsAppSG();
$wa->setPort('6789')
    ->setSenderPhone('089528214804')
    ->setRecepient('081293314936')
    ->setMessage('test kirim wa?');

var_dump($wa->SendText());

/**
 * jika anda menggunakan nomor diluar indonesia 
 * Anda dapat mengatur locale dengan cara
 * 
 * catatan:
 * lihat kode negara aplha-2-code di link berikut
 * https://www.iban.com/country-codes
 */
$wa     = new WhatsAppSG();
$wa->setPort('6789')
    ->setLocale('US')
    ->setSenderPhone('089528214804')
    ->setRecepient('081293314936')
    ->setMessage('test kirim wa?');

var_dump($wa->SendText());

/* ------------------------- contoh penggunaan kedua ------------------------ */

$wa     = new WhatsAppSG('081293314936', 'hallo ini coba kirim whatsapp');
$wa->setBaseUrl('http://127.0.0.1')
    ->setPort('6789')
    ->setSenderPhone('089528214804');

$result     = $wa->SendText();