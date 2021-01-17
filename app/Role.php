<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * ユーザー権限テーブル
     * 管理者(私)：master, 0
     * 管理者（他）：admin, 1
     * 会員ユーザー：member, 8
     * 一般：anonymous, 9
     * 禁止ユーザー：forbidden, -1
     * 
     * created:2021/01/10
     * last modified:
     */

    /**
     * 複数代入を許可するホワイトリスト
     *
     * @var array
     */
    protected  $fillable = [
        'name', 'level'
    ];

    /**
     * UserModelへのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
