<?php
namespace App\Models;
use CodeIgniter\Model;

class ChafusersModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'chafusers';
    protected $allowedFields = ['firstname', 'lastname', 'email'];
}
