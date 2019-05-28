<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;
use DB;

class Manga extends Model
{
    //
    public function getLesMangas(){
        $lesMangas = DB::table('manga')->get();
        return $lesMangas;
    }
}
