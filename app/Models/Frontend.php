<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 */
class Frontend extends Model
{
    use HasFactory;
    protected $table = 'frontends';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'id',
        'hero_title',
        'hero_paragraph',
        'card_1_title',
        'card_1_paragraph',
        'card_2_title',
        'card_2_paragraph',
        'card_3_title',
        'card_3_paragraph',
        'card_4_title',
        'card_4_paragraph',
        'card_5_title',
        'card_5_paragraph',
        'card_6_title',
        'card_6_paragraph',
        'value_title',
        'value_paragraph',
        'value_card_title',
        'value_card_subtitle',
        'values_to_gain_1',
        'values_to_gain_2',
        'values_to_gain_3',
        'values_to_gain_4',
        'small_container_slug',
        'copyright',
        'facebook',
        'twitter',
        'google',
    ];



}
