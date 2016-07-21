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
        'name', 'email', 'username','password','nip_User','level_User'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function getKeyName(){
        return "id_User";
    }
    
//    public static function validate($input) {
//        $rules = array(
//            'name' => 'required|max:255|Alpha',
//            'email' => 'required|email|max:255|unique:users',
//            'password' => 'required|min:6|confirmed',
//        );
//        
//        $messages = [
//            'alpha' => 'Your name must be alphabetic',
//            'email'   => 'Your email is not available',
//            'confirmed' => 'Password does not match',
//            'same'    => 'The :attribute and :other must match.',
//            'size'    => 'The :attribute must be exactly :size.',
//            'between' => 'The :attribute must be between :min - :max.',
//            'in'      => 'The :attribute must be one of the following types: :values',
//        ];
//         
//        return Validator::make($input, $rules, $messages);
//    }

}
