<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Step extends Model
{
    /** @use HasFactory<\Database\Factories\StepFactory> */
    use HasFactory;

    //Lorsque je crée une nouvelle instance de ce modèle, si aucune valeur
    //n'est fournie pour completed, sa valeur par défaut sera false.
    protected $attributes = ['completed' => false];

    public function idea(): BelongsTo
    {
        //Un Step appartient à une Idea.
        return $this->belongsTo(Idea::class);
    }
}
