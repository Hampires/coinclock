<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Session;
use Auth;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'username',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $refcode = Session::get('refer_code');
            $referrer = User::where(['username' => $refcode])->get();

            //dd($refcode . " ----- " . $referrer . " ----- " . $user);

            if ($refcode && count($referrer) > 0) {
                $referrer[0]->referrals()->create([
                    'invitee' => $user->email,
                    'reward' => 0,
                ]);
            }
        });
    }

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function referrals()
    {
        return $this->hasMany(Referral::class);
    }

}
