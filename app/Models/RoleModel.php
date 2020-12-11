<?php namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table        = 'sys_group_users';
    protected $primaryKey   = 'id';

    public function get($id = null)
    {
        $data = $this->find($id);
        
        return $data;
    }
}