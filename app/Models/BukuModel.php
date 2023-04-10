<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'kode', 'judul', 'pengarang',
        'penerbit', 'tahun', 'jenis'
    ];

    protected $searchable = [
        'kode', 'judul', 'pengarang',
        'penerbit', 'tahun', 'jenis'
    ];
    
    public function search($query)
    {
        return $this->where(function($q) use ($query) {
            foreach ($this->searchable as $column) {
                $q->orWhere($column, 'LIKE', "%$query%");
            }
        })->get();
    }
}
