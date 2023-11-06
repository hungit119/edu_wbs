<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = self::TABLE;
    public $timestamps = false;
    CONST TABLE = 'province';
    CONST _ID = 'id';
    CONST _NAME = 'name';
    CONST _PARENT_ID = 'parent_id';
    CONST _TIME_CREATE = 'time_create';
    CONST _TIME_UPDATE = 'time_update';

    protected $fillable = [
        self::_ID,
        self::_NAME,
        self::_PARENT_ID,
        self::_TIME_CREATE,
        self::_TIME_UPDATE
    ];
}
