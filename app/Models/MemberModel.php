<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'member';
    protected $allowedFields = ['name', 'no_hp', 'tgl_pemesanan'];
}
