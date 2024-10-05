<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'updated_at', 'created_at'];

    public function expenses(): BelongsToMany
    {
        return $this->belongsToMany(Expense::class, 'expense_tags');
    }
}
