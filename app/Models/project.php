<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'type_id',
        'title',
        'prog_langs',
        'due_to',
        'url'
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}