<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Deck extends Model
{
    public function hand(): HasOne
    {
        return $this->hasOne(PlayerHand::class);
    }
}
