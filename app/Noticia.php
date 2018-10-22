<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = ['categoria','titulo','conteudo','autor','keywords'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'noticias';

}
