<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengaduan extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'name', 'dinas', 'nama', 'nim', 'kampus', 'jurusan', 'jenjang', 'whatsapp', 'email', 'mulai', 'selesai', 'status', 'user_nim', 'user_id' // 'image',
        // on process plptd
    ];

    protected $hidden = [

    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_nim', 'nim');
    }

    public function details() {
        return $this->hasMany(Pengaduan::class, 'id', 'id');
    }

    public function phones() {
        return $this->belongsTo(User::class);
    }

    public function tanggapans() {
    return $this->belongsTo(Pengaduan::class, 'id', 'id');
    }

    public function tanggapan() {
    return $this->hasOne(Tanggapan::class);
    }

    public function status() {
    return $this->belongsTo(Tanggapan::class, 'status_id','status');
    }

}