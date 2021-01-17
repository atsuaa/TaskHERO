<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'disp_name', 'profile', 'icon_link'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * 属性に対するモデルのデフォルト値
     * class内で無名関数をプロパティに代入すると
     * Fatal error: Constant expression contains invalid operations
     *
     * @var array
     */
    protected $attributes = [
        'disp_name' => 'guest',
        'profile' => 'よろしくお願いします。',
        'icon_link' => 'guest.png',
        // 'blacklist' => false,
    ];

    /**
     * RoleModelへのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}
