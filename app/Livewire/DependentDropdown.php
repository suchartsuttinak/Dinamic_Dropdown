<?php

namespace App\Livewire;

use App\Models\Provinces;
use App\Models\Amphure;
use App\Models\Tambon;


use Livewire\Component;

class DependentDropdown extends Component
{
    public $provinces;
    public $amphures;
    public $tambons;

    // สร้างตัวแปรชื่อ 
    public $seclectedProvince = null;
    public $seclectedAmphure = null;
    public $seclectedTambon = null;

   

    public function mount()
    {
    $this->provinces = Provinces::all();
    }

   
   // ต้องใส่ชื่อฟังชั่น  updaeted แล้วตามด้วย ชื่อฟังช่น seclectedProvince ได้แก่ updatedseclectedProvince 
   // ถ้าไม่ใส่ updaeted จะหาฟังชั่นไม่พบ
    public function updatedseclectedProvince($province){

        $this->amphures = Amphure::where('province_id', $province)->get();
        $this->seclectedAmphure = null;
    }

    public function updatedseclectedAmphure($amphure){
        
        $this->tambons = Tambon::where('amphure_id', $amphure)->get();
    }
        



    public function render()
    {
        return view('livewire.dependent-dropdown');
    }
}