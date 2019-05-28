<?php

namespace App\Http\Controllers;
use App\Modeles\Manga;
use App\Modeles\Manga2DAO;
use App\Modeles\MangaDAO;
use Illuminate\Http\Request;

class MangasController extends Controller
{
    //
    public function getLesMangas()
    {
        $manga = new Manga2DAO();
        $lesMangas = $manga->getLesMangas();
        return view('mangas', compact('lesMangas'));
    }
}



