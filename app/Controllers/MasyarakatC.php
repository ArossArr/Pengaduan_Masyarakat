<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MasyarakatM;
class MasyarakatC extends Controller{
     protected $masyarakatt;
        function __construct(){
                $this->masyarakatt = new MasyarakatM();
        }
        public function view(){
                $data['masyarakat'] = $this->masyarakatt->findAll();
                return view('masyarakatv',$data);
        }
}