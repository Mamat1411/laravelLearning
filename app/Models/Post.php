<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters) : void {
        //using if statement
        // if ($filters['search'] ?? false) {
        //     $query->where('title', 'like', '%'. $filters['search']. '%')
        //           ->orWhere('body', 'like', '%'. $filters['search']. '%');
        // }

        //using when method
        $query->when($filters['search'] ?? false, function ($query, $search) : void {
            $query->where('title', 'like', '%'. $search. '%')
                  ->orWhere('body', 'like', '%'. $search. '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) : void {
            $query->whereHas('category', function ($query) use ($category) : void {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function author() : BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }
}
