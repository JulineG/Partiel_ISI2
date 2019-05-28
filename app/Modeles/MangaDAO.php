<?php
namespace App\Modeles;

use DB;
use Illuminate\Database\Eloquent\Model;
use App\Metier\Manga;

class MangaDAO extends DAO
{
    public function getLesMangas()
    {
        $mangas = DB::table('manga')->get();
        $lesMangas = array();
        foreach ($mangas as $leManga) {
            $idManga = $leManga->id_manga;
            $lesMangas[$idManga] = $this->creerObjetMetier($leManga);
        }
        return $lesMangas;
    }
    protected function creerObjetMetier(\stdClass $objet)
    {
        $leManga = new Manga();
        $leManga->setIdManga($objet->id_manga);
        $leManga->setPrix($objet->prix);
        $leManga->setTitre($objet->titre);
        $leManga->setCouverture($objet->couverture);
        $leManga->setGenre($objet->genre);
        return $leManga;
    }

}