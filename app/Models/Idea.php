<?php

namespace App\Models;

use App\IdeaStatus;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Idea extends Model
{
    /** @use HasFactory<\Database\Factories\IdeaFactory> */
    use HasFactory;

    //Définition des règles de conversion automatique d'attributs ($casts).
    protected $casts = [
        /**
         * Convertit la colone links de la BDD qui est en format JSON
         * en un objet mannipulable comme un tableau PHP.
         */
        'links' => AsArrayObject::class,
        /**
         * Convertit la valeur texte de la BDD directement
         * en une instance de notre enum IdeaStatus.
         */
        'status' => IdeaStatus::class
    ];

    public function user(): BelongsTo
    {
        //Établit une relation Many-to-One (via la clé étrangère).
        return $this->belongsTo(User::class);
    }

    public function steps(): HasMany
    {
        //Une Idea peut avoir un à plusieurs Step
       return $this->hasMany(Step::class);
    }
}
