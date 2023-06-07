<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['nomor_tiket','nama','usia','jenis_kelamin','nomor_bangku','tanggal_checkin'];

}
