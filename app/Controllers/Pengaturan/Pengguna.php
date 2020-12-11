<?php namespace App\Controllers\Pengaturan;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\JurusanModel;
use App\Models\RoleModel;

class Pengguna extends Controller
{
    public function __construct()
    {
        $this->user = new UserModel();
        $this->jurusan = new JurusanModel();
        
        helper('form');
        $this->validation =  \Config\Services::validation();
        $this->session = session();
    }
    
    public function index()
    {
        $data = $this->user->get();

        $role = new RoleModel();
        $role = $role->get();
        
        $return = [
            'role' => $role,
            'data' => $data
        ];

        return view('pengaturan/pengguna/index', $return);
    }

    public function tambah()
    {
        $get_jurusan = $this->jurusan->find();
        $jurusan = [];
        foreach ($get_jurusan as $item) {
            $jurusan += [
                $item['id'] => $item['nama_jurusan']
            ];
        }

        return view('pengaturan/pengguna/tambah', ['jurusan'=>$jurusan]);
    }

    public function store()
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|min_length[5]|is_unique[sys_users.username]',
            'email' => 'required|valid_email|is_unique[sys_users.email]',
            'id_group' => 'required|is_not_unique[sys_group_users.id]',
            'kode_jurusan' => 'permit_empty|is_not_unique[jurusan.id]',
            'password' => 'required|min_length[6]',
            're_password' => 'matches[password]'
        ];
        $errors = [
            'first_name' => [
                'required' => 'Isian nama depan harus diisi'
            ],
            'last_name' => [
                'required' => 'Isian nama belakang harus diisi'
            ],
            'username' => [
                'required' => 'Isian username harus diisi',
                'min_length' => 'Panjang username minimal {param} karakter',
                'is_unique' => 'Isian username sudah ada'
            ],
            'username' => [
                'required' => 'Isian email harus diisi',
                'valid_email' => 'Isian email tidak valid',
                'is_unique' => 'Isian email sudah ada'
            ],
            'id_group' => [
                'required' => 'Harap memilih hak akses pengguna'
            ],
            'kode_jurusan' => [
                'is_not_unique' => 'Jurusan yang dipilih tidak ada dalam basis data'
            ],
            'password' => [
                'required' => 'Isian kata sandi harus diisi',
                'min_length' => 'Panjang kata sandi minimal {param} karakter'
            ],
            're_password' => [
                'matches' => 'Isian ini harus sama dengan kata sandi'
            ]
        ];

        $validate = $this->validate($rules, $errors);

        if($validate)
        {
            try {
                $req = [
                    'first_name' => $this->request->getPost('first_name'),
                    'last_name' => $this->request->getPost('last_name'),
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'id_group' => $this->request->getPost('id_group'),
                    'kode_jurusan' => $this->request->getPost('kode_jurusan'),
                    'password' => md5($this->request->getPost('password'))
                ];

                $data = $this->user->store($req);

                $this->session->setFlashdata('messages', ['type'=>'success', 'text'=>'Data berhasil ditambahkan']);

                return redirect()->to(base_url('pengaturan/pengguna/'));
            } catch (\Throwable $th) {
                throw $th;
            }
        } else {
            return redirect()->back()->withInput();
        }

        return redirect()->back();
    }

    public function edit()
    {
        return view('pengaturan/pengguna/tambah');
    }
}