<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'deportes';

    protected $fillable = ['nombre_actividad','edad','lugar','dias','grupo1','grupo2','grupo3','grupo4','grupo5','horario_grupo1','horario_grupo2','horario_grupo3','horario_grupo4','horario_grupo5','nombre_profesor','costo_clase','costo_mensual_paquete1','costo_mensual_paquete2','costo_mensual_paquete3','costo_mensual_paquete4'];
	
}
