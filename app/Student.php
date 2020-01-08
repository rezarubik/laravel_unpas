<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    // menggunakan soft deletes
    use SoftDeletes;
    // field yg boleh diisi oleh form inputan
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
}
