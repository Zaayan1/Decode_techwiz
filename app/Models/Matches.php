<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    public function firstTeam()
{
    return $this->belongsTo(Team::class, 'first_team_id');
}

public function secondTeam()
{
    return $this->belongsTo(Team::class, 'second_team_id');
}

public function statistics()
{
    return $this->hasMany(Statistic::class);
}

}
