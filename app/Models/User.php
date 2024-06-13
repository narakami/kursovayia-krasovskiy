<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'phone',
        'city',
        'bio',
        'age',
        'gender',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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
        ];
    }
    public function friendsofmine(){
        return $this->belongsToMany('app\Models\User','friends','User_id','friend_id');
    }
    public function friendof(){
        return $this->belongsToMany('app\Models\User','friends','friend_id','User_id');
    }
    #Получить запрос в друзья
    public function friends(){
        return $this->friendsofmine()->wherePivot('accepted',true)->Get()
        ->merge( $this->friendof()->wherePivot('accepted',true)->Get() );
    }
    #запросы в друзья
    public function friendrequests(){
        return $this->friendsofmine()->wherePivot('accepted',false)->Get();
    }
    #запрос на ожидания в друзья
    public function friendrequestspending(){
        return $this->friendof()->wherePivot('accepted',false)->Get();
    }
    #есть запрос на добавление в друзья
    public function hasfriendrequestspending(User $user){
        return (bool) $this->friendrequestspending()->where('id',$user->id)->count();
    }
    #получил запрос по дружбе
    public function hasfriendrequestrecived(User $user){
        return (bool) $this->friendrequests()->where('id',$user->id)->count();
    }
    #добавить друга
    public function addfriend(User $user){
        $this ->friendof()->attach($user->id);
    }
    #принять запрос на дружбу
    public function acceptfriendrequest(User $user){
        $this->friendrequests()->where('id',$user->id)->first()->pivot->update(['accepted'=>true]);
    }
    #пользователь в друзьях
    public function isfriendwith(User $user){
        return (bool) $this->friends()->where('id',$user->id)->count();
    }
    #удалить из друзей
    public function deletefriend(User $user){
        $this ->friendof()->detach($user->id);
        $this ->friendsofmine()->detach($user->id);
    }

}
