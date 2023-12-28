<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calculator extends Model
{
    protected $fillable = [
        'first_number',
        'operator',
        'second_number',
        'result',
    ];
    use HasFactory;
    protected static $cal;
public static function calculator()
{
    self::$cal                    = new calculator();
    self::$cal->firstNumber      = $request->first_number;
    self::$cal->secondNumber     = $request->second_number;
    self::$cal->operator     = $request->operator;
    self::$cal->save();
}

}
