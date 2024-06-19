<?php

namespace App\Controllers;

class Home extends BaseController
{
    //public function index(): string
   // {
        //return view('front/head_view');
        //return view('front/principal');
        //return view('front/footer_view');
    //}
    public function index(): string
    {
        // Concatenar las vistas en una sola cadena de texto
        $headView = view('front/head_view');
        $navbarView = view('front/navbar_view');
        $principalView = view('front/principal');
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView .$navbarView. $principalView . $footerView;
    }
}
