<?php

namespace App;

/**
 * Un enum restreint les valeurs possibles
 * d'une donnée à une liste fixe.
 */
enum IdeaStatus: string
{
    /**
     * Définissent les seuls états autorisés
     * pour le statut d'une Idea.
     */
    case PENDING = 'pending';
    case IN_PROGRESS = 'in_progress';
    case COMPLETED = 'completed';

    /**
     * label() est une méthode d'instance intégrée
     * directement à l'Enum.
     */
    public function label() {
        /**
         * $this fait référence au cas
         * actuel de l'enum.
         */
        return match ($this) {
            self::PENDING => 'pending',
            self::IN_PROGRESS => 'in progress',
            self::COMPLETED => 'completed'
        };
    }
}


