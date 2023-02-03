<?php

namespace App\Http\Livewire;

use App\Models\Accounts;
use App\Models\Medicine;
use LivewireUI\Modal\ModalComponent;

class MedicineShow extends ModalComponent
{
    public $medicine;

    public function mount($id)
    {
        $this->medicine = Medicine::find($id);
    }

    public function render(Accounts $accounts)
    {
        $userLoggedIn = ['userLoggedIn' => $accounts->where('id', session('userLoggedIn'))->first()];

        $getMedicine = $this->medicine;

        return view('livewire.medicine-show', $userLoggedIn, compact('getMedicine'));
    }
}
