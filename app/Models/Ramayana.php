<?php
  
namespace app\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Ramayana extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'nik', 'nama', 'jabatan', 'bagian', 'tglmasuk', 'tglkeluar'
    ];
}