<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'birthday',
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
        'birthday' => 'datetime'
    ];

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'user_id');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'user_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }

    public function points()
    {
        return $this->hasMany(Point::class, 'user_id');
    }

    public function addOrderVariationPoint($orderVariationId, $value)
    {
        return $this->points()->create([
            'type' => 'reward',
            'value' => $value,
            'available' => false,
            'by' => 'order',
            'order_variation_id' => $orderVariationId
        ]);
    }

    public function getBonusPointsAttribute()
    {
        $sum = 0;
        $availableSum = 0;
        $allPoints = $this->points;
        $rewardPoints = $allPoints->where('type', 'reward');
        $withdrawPoints = $allPoints->where('type', 'withdraw');

        foreach ($rewardPoints as $point) {
            $sum += $point->value;
            if ($point->available) {
                $availableSum +=$point->value;
            }
        }

        foreach ($withdrawPoints as $point) {
            if ($point->available) {
                $sum -= $point->value;
                $availableSum -= $point->value;
            }
        }

        return [
            'total_points' => $sum,
            'available_points' => $availableSum,
            'blocked_points' => $sum - $availableSum,
        ];
    }

    protected $appends = ['bonus_points'];
}
