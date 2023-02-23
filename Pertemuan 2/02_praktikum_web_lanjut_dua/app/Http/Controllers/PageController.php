<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    } 
    public function about(){
        return 'Bima Bayu Saputra || 2141720019';
    } 
    public function articles($id){
        return 'Halaman Artikel
        dengan Id '.$id;
    } 
}
