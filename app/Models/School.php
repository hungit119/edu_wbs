<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = self::TABLE;
    public $timestamps = false;
    CONST TABLE = 'school';
    CONST _ID = 'id';
    CONST _NAME = 'name';
    CONST _PROVINCE_ID = 'province_id';
    CONST _DISTRICT_ID = 'district_id';
    CONST _WARD_ID = 'ward_id';
    CONST _ADDRESS = 'address';
    CONST _TYPE = 'type';
    CONST _TIME_CREATE = 'time_create';
    CONST _TIME_UPDATE = 'time_update';

    protected $fillable = [
      self::_ID,
      self::_NAME,
      self::_PROVINCE_ID,
      self::_DISTRICT_ID,
      self::_WARD_ID,
      self::_ADDRESS,
      self::_TYPE,
      self::_TIME_CREATE,
      self::_TIME_UPDATE
    ];
}
