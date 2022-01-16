<?php

namespace App\Http\Controllers;

use App\Support\Seo;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $head = $this->seo->render(env('APP_NAME') . ' - RhDev Development',
            'Melhor aprendizado em laravel',
            url('/'),
            asset('images/img_bg_1.jpg'),
        );

        return view('front.home', [
            'head' => $head
        ]);
    }

    public function course()
    {
        $head = $this->seo->render(env('APP_NAME') . ' - Sobre o Curso',
            'Melhores cursos estão aqui!',
            route('course'),
            asset('images/img_bg_1.jpg'),
        );

        return view('front.course', [
            'head' => $head
        ]);
    }

    public function blog()
    {
        $head = $this->seo->render(env('APP_NAME') . ' - Blog',
            'Melhores cursos estão aqui!',
            route('blog'),
            asset('images/img_bg_1.jpg'),
        );

        return view('front.blog', [
            'head' => $head
        ]);
    }

    public function article()
    {
        $head = $this->seo->render(env('APP_NAME') . ' - Artigos',
            'Melhores cursos estão aqui!',
            route('blog'),
            asset('images/img_bg_1.jpg'),
        );

        return view('front.article', [
            'head' => $head
        ]);
    }

    public function contact()
    {
        $head = $this->seo->render(env('APP_NAME') . ' - Blog',
            'Melhores cursos estão aqui!',
            route('blog'),
            asset('images/img_bg_1.jpg'),
        );

        return view('front.contact', [
            'head' => $head
        ]);
    }
}
