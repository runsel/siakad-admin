<?php namespace App\Controllers\Pengaturan;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Pengguna extends Controller
{
    public function __construct()
    {
        $this->user = new UserModel();
        $this->validation =  \Config\Services::validation();
    }
    
    public function index()
    {
        $data = $this->user->listuser();
        $return['data'] = $data;

        return view('pengaturan/pengguna/index', $return);
    }

    public function tambah()
    {
        return view('pengaturan/pengguna/tambah');
    }

    public function store()
    {
        $req = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => md5($this->request->getPost('password'))
        ];

        $data = $this->user->store($req);

        return redirect()->back();

    }
}