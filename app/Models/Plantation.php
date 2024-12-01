<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plantation extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'userID',
        'plantationArea',
        'maturePlant',
        'immaturePlant',
        'producingOil',
        'immatureOil',
        'plantationLand',
        'ownershipStatus',
        'legalStatus',
        'spatialPlan',
        'stdb',
        'sppl',
        'soilType',
        'seedlingType',
        'nitgrogenFertilizer',
        'phosphorusFertilizer',
        'potassiumFertilizer',
        'magnesiumFertilizer',
        'boronFertilizer',
        'copperFertilizer',
        'discClearing',
        'rowClearing',
        'pruning',
        'harvestingFrequency',
        'ffbProduction',
        'ffbSold',
        'ffbPrice',
        'plantationIncome',
    ];
}
