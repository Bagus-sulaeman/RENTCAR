<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tambah extends Model
{
    protected $table = 'renters';

    protected $fillable = ['nama','nik','phone','alamat'];
}
