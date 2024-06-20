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

    public function acerca_de(): string
    {
        // Concatenar las vistas en una sola cadena de texto
        $headView = view('front/head_view');
        $navbarView = view('front/navbar_view');
        $acerca_deView = view('front/acerca_de');
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView .$navbarView. $acerca_deView . $footerView;
    }

    public function quienes_somos(): string
    {
        // Concatenar las vistas en una sola cadena de texto
        $headView = view('front/head_view');
        $navbarView = view('front/navbar_view');
        $quienes_somosView = view('front/quienes_somos');
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView .$navbarView. $quienes_somosView . $footerView;
    }

    public function registro(): string
    {
        // Concatenar las vistas en una sola cadena de texto
        $headView = view('front/head_view');
        $navbarView = view('front/navbar_view');
        $registroView = view('front/registro');
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView .$navbarView. $registroView . $footerView;
    }

    public function login(): string
    {
        // Concatenar las vistas en una sola cadena de texto
        $headView = view('front/head_view');
        $navbarView = view('front/navbar_view');
        $loginView = view('front/login');
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView .$navbarView. $loginView . $footerView;
    }
}
