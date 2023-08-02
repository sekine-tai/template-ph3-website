<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'body,',
    //     'user_id'
    // ];

    protected $guarded = [
        'id',
    ];
    // ブラックリスト指定（id以外は編集可能）

    public function user(){
        return $this->belongsTo(User::class);
    }
}
