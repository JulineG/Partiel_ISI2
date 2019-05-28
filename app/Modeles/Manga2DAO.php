<?php
namespace App\Modeles;

use DB;
use App\Metier\Manga;
use App\Metier\Genre;

class Manga2DAO extends DAO
{
    //
    public function getLesMangas()
    {
        $lesMangas=array();
        $mangas=DB::table('manga')->select ('id_manga','prix', 'titre','couverture', 'id_genre')->get();
        if($mangas)
        {
            foreach ($mangas as $leManga){
                $genre = new GenreDAO();
                $leGenre = $genre->trouverId($leManga->id_genre);
                $idManga = $leManga->id_manga;
                $lesMangas[$idManga] = $this->creerObjetMetier($leManga);
                $lesMangas[$idManga]->setGenre($leGenre->getLibelleGenre());
            }
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
        return $leManga;
    }
}