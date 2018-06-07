<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = ['gambar','nama','merk_id','tipe','member_id'];
    public $timestamps = true;

    //------------------------------------------------

    	public function Member(){
    		return $this->belongsTo('App\Mobil' , 'member_id');
    	}


    	public function Merk(){
    		return $this->belongsTo('App\Merk' , 'merk_id');
    	}


    	public function detail_mobil(){
    		return $this->hasOne('App\Mobil' , 'mobil_id');
    	}




}
