<?php
namespace App\Modeles;
use DB;
use App\Metier\Genre;
class GenreDAO extends DAO
{

    public function trouverId($id){
        $genre=DB::table('genre')->where('id_genre','=',$id)->first();
        if($genre) {
            $leGenre = $this->creerObjetMetier($genre);
            return $leGenre;
        }
        else
            return null;
    }

    protected function creerObjetMetier(\stdClass $objet)
    {
        $leGenre= new Genre();
        $leGenre->setIdGenre($objet->id_genre);
        $leGenre->setLibelleGenre($objet->lib_genre);
        return $leGenre;
    }
}