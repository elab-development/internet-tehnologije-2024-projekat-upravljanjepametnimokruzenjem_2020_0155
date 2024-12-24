<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /** @use HasFactory<\Database\Factories\SettingFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'value',
        'active',
        'room_id',
    ];

    public function room(){
        return $this->belongsTo(Room::class);
    }

    public static function getAllSettings(){
        $result = DB::table('settings');
            ->select('id,', 'room_id', 'name', 'value', 'vreated_at', 'update_at')
            ->get()->toArray();
            return $result;
    }
}
