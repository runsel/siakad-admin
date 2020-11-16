<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'sys_users';
    protected $primaryKey = 'id';

    public function login($user, $password)
    {
        $data =  $this->where('username', $user)->first();
        
        if($data)
        {
            if(md5($password) === $data['password'])
            {
                $session = session();
                $sessionData = [
                    'id'        => $data['id'],
                    'username'  => $data['username'],
                    'email'     => $data['email'],
                    'name'      => $data['first_name'].' '.$data['last_name'],
                    'logged_in' => true
                ];

                $session->set($sessionData);

                return true;
            }

            return false;
        }

        return false;
    }

    public function listuser($id = null)
    {
        $data = $this->join('sys_group_users', 'sys_group_users.id = sys_users.id_group')->find($id);
        
        return $data;
    }

    public function store($data)
    {
        try {
            //code...
        } catch (\Throwable $e) {
            //throw $th;
        }
    }
}