<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_upgrade',
        'referral_code',
        'referred_by',
    ];


    protected static function boot(){
    
    parent::boot();
    static::creating(function ($user) {

        do {
            $code = strtoupper(substr(md5(uniqid()), 0, 8));
        } while (self::where('referral_code', $code)->exists());

        $user->referral_code = $code;
    });
    
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_upgrade'=>'boolean',
        ];
    }

     public function postedJobs()
    {
     return $this->hasMany(JobPost::class);
    }

     public function submittedJobs()
    {
     return $this->hasMany(JobSubmit::class);
    }

    public function notifications()
    {
     return $this->hasMany(UserNotification::class);
    }

    public function transactions()
    {
    return $this->hasMany(UserTransaction::class);
    }

    public function hiddenJobs()
   {
    return $this->hasMany(HideJob::class);
   }
   // referrals
   public function referrals(){
    return $this->hasMany(User::class, 'referred_by');
     }

   public function referredBy(){
    return $this->belongsTo(User::class, 'referred_by');
    }

   
}
