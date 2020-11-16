<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends Controller
{
    public function __construct()
    {
        $this->user = new UserModel();
        $this->validation =  \Config\Services::validation();
        $this->session = session();
    }

    /**
     * Halaman login
     * Jika status telah login redirect ke halaman dashboard
     */
    public function index()
	{
        if($this->session->get('logged_in'))
        {
            return redirect()->to('/dashboard');
        }

		return view('index');
	}

    /**
     * Validasi request login
     * Jika kredensial cocok redirect ke dashboard, jika tidak kembali dan tampilkan pesan error
     */
    public function login()
    {
        $req = $this->request->getPost();
        $validate = $this->validation->run($req, 'login');
        $errors = $this->validation->getErrors();
        
        if($errors)
        {
            $this->session->setFlashdata('errors', $errors);

            return redirect()->back();
        }
        
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = $this->user->login($username, $password);

        if($data)
        {
            if($data['aktif'] == 'Y')
            {
                return redirect()->to('/dashboard');
            } else {
                $this->session->destroy();
                $this->session->setFlashdata('errors', ['denied' => 'Akun non-aktif, hubungi pengelola aplikasi']);
            }
        } else {
            $this->session->setFlashdata('errors', ['denied' => 'Kombinasi username dan kata sandi salah']);
        }

        return redirect()->back();
    }


    /**
     * Request logout
     */
    public function logout()
    {
        $this->session->destroy();

        return redirect()->to('/');
    }
}