<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $visible = ['gambar', 'title', 'description', 'info', 'min', 'rec'];

    protected $fillable = ['gambar', 'title', 'description', 'info', 'min', 'rec'];
    
    public $timestamps = true;

    public function gambar()
    {
        if ($this->gambar && file_exists(public_path('images/game/' . $this->gambar))) {
            return asset('images/game/' . $this->gambar);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteGambar()
    {
        if ($this->gambar && file_exists(public_path('images/game/' . $this->gambar))) {
            return unlink(public_path('images/game/' . $this->gambar));
        }

    }
}
