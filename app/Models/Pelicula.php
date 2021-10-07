<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pelicula
 *
 * @property int $pelicula_id
 * @property string $titulo
 * @property int $precio
 * @property string $fecha_estreno
 * @property string $descripcion
 * @property string|null $poster
 * @property string|null $poster_descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Pelicula newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pelicula newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pelicula query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pelicula whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelicula whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelicula whereFechaEstreno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelicula wherePeliculaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelicula wherePoster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelicula wherePosterDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelicula wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelicula whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelicula whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $pais_fk
 * @property-read \App\Models\Pais $pais
 * @method static \Illuminate\Database\Eloquent\Builder|Pelicula wherePaisFk($value)
 */
class Pelicula extends Model
{
//    use HasFactory;
    protected $table = 'peliculas';

    protected $primaryKey = 'pelicula_id';

    protected $fillable = ['titulo', 'precio', 'descripcion', 'fecha_estreno', 'poster', 'poster_descripcion', 'pais_fk'];

    /*
     |-------------------------------------------------------------------------------
     | Reglas de validación.
     |-------------------------------------------------------------------------------
    */
    public static function rules() : array{
        return [
            'titulo' => 'required|min:2',
            'pais_fk' => 'required',
            'precio' => 'required|numeric',
            'fecha_estreno' => 'required|date_format:Y-m-d',
        ];
    }
    public static function rulesMessages() : array{
        return[
            'titulo.required' => 'Error: Tenés que escribir un título.',
            'titulo.min' => 'Error: El titulo no puede tener menos de :min caracteres.',
            'pais_fk.required' => 'Tienes que elegir el país',
            'precio.required' => 'Error: Tenés que escribir el precio.',
            'precio.numeric' => 'Error: El precio debe ser un valor numérico.',
            'fecha_estreno.required' => 'Error: Tenés que escribir la fecha de estreno.',
            'fecha_estreno.date_format' => 'Error: La fecha tiene que tener formato de AAAA-MM-DD.',
        ];
    }

    /*
     |-------------------------------------------------------------------------------
     | Relaciones
     |-------------------------------------------------------------------------------
    */
    public function pais(){
        return $this->belongsTo(Pais::class, 'pais_fk', 'pais_id');
    }
}
