<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    use HasFactory;

    //protected $table = 'my_articles';

    protected $primaryKey = 'id';

    public $timestamps = false;

    public	function category():HasOne
    {
    return	$this->hasOne(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);

        
    }
    protected $guarded = [];
}
