<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table ='animal';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ //函數內的欄位才能被新增
        'title', 'note', 'author',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
	
	public function author(){
		return $this ->hasOne('App\User','id','author'); //hasOne('App\User',Fkey(外鍵),Lkey(自己的))
	}
}
