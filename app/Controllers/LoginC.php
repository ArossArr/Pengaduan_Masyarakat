<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MasyarakatM;
use App\Models\PetugasM;

class LoginC extends BaseController{
     protected $masyarakatt,$petugass;
     function __construct(){
          $this->masyarakatt = new MasyarakatM();
          $this->petugass = new PetugasM();
     }
     
     public function view()
     {
          return view('loginv');
     }
     // register
     public function register()
     {
          return view('registerv');
     }
     public function savereg()
     {
          $ceknik = $this->masyarakatt->where('nik',$this->request->getPost('nik'))->findAll();
          // dd($ceknik);
          if($ceknik==null){
          $data = array(
               'nik' => $this->request->getPost('nik'),
               'nama' => $this->request->getPost('nama'),
               'username' => $this->request->getPost('username'),
               'no_tlp' => $this->request->getPost('no_tlp'),
               'password' => password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT)
          );
          $this->masyarakatt->insert($data);
          return redirect('login');
                         
          } else {
               return redirect('register')->with('error', lang('nik sudah ada'));
          }
     }
     public function plogin(){
          $petugas = new PetugasM();
          $masyarakat = new MasyarakatM();
          $username = $this->request->getPost('username');
          $pass = $this->request->getPost('password')."";
          $cekptgs = $petugas->where(['username'=>$username])->first();
          $cekmsya = $masyarakat->where(['username' => $username])->first();
          if(!($cekmsya)&&!($cekptgs))
          {
               return redirect('login')->with("error", lang("Username tidak ditemukan"));
          } 
          else
          {
               if($cekmsya)
               {
                    // dd($cekmsya);
                    if(password_verify($pass,$cekmsya['password']))
                    {
                         session()->set([
                              'nik' => $cekmsya['nik'],
                              'nama' => $cekmsya['nama'],
                              'level' => 'masyarakat'
                         ]);
                         return redirect('/');
                    }
                    else
                    {
                         return redirect('login')->with("error", lang("Password Masyarakat Salah"));
                    }
               }
               if($cekptgs)
               {
                    dd($cekptgs);
                    // if(password_verify($pass,$cekptgs['password']))
                    // {
                    //      session()->set([
                    //           'id_petugas' => $cekptgs['id_petugas'],
                    //           'username' => $cekptgs['username'],
                    //           'level' => 'admin'
                    //      ]);
                    //      return redirect('/');
                    // }
                    // else
                    // {
                    //      return redirect('login')->with("error", lang("Password Petugas Salah"));
                    // }
               }
          }
     }

}