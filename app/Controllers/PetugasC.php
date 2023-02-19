<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PetugasM;
class PetugasC extends Controller{
        protected $petugass;
        function __construct(){
                $this->petugass = new PetugasM();
        }
        public function view(){
                $data['petugas'] = $this->petugass->findAll();
                return view('petugasv',$data);
        }
        public function viewc(){
                return view('coba');
        }
}