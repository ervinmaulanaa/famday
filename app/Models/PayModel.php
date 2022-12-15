<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_fd_pays';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';
    protected $primaryKey  = 'pay_id';

    protected $fillable = [
        'no_pembelian','no_rekening','person_id','typesubscribe','durasi','total_bayar','status','path'
    ];
}
