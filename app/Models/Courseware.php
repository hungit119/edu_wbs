<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courseware extends Model
{
    protected $table = self::TABLE;
    public $timestamps = false;
    CONST TABLE = 'courseware';

    CONST _ID = 'id';
    CONST _PATH = 'path';
    CONST _NAME = 'name';
    CONST _APP_ID = 'app_id';
    CONST _TYPE = 'type';
    CONST _SIZE = 'size';
    CONST _DESCRIPTION = 'description';
    CONST _TIME_CREATE = 'time_create';
    CONST _TIME_UPDATE = 'time_update';

    protected $fillable = [
        self::_ID,
        self::_PATH,
        self::_NAME,
        self::_APP_ID,
        self::_TYPE,
        self::_SIZE,
        self::_DESCRIPTION,
        self::_TIME_CREATE,
        self::_TIME_UPDATE
    ];
}
