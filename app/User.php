<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status','phone',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function register($data)
    {
        $res = $this::where(['name'=>$data['name'],'email'=>$data['email']])->first();
        if ($res) {
            return false;
        } else {
            unset($data['password_confirmation']);
            $data['password'] = md5($data['password']);
            $result = $this::create($data);
            if ($result->save()) {
                $data['id'] = $result->id;
                return $data;
            } else {
                return false;
            }
        }
    }


    public function login($data)
    {
        $res = $this::where(['name'=>$data['name'],'password'=>md5($data['password'])])->first();
        return $res?$res->toArray():false;
    }
}
