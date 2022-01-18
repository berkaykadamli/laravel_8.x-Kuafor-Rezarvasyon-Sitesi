<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record, $subject, $review, $service_id, $rate, $IP;

    public function render()
    {
//        print_r("Record : ".$this->record->id);
//        exit();
        return view('livewire.review');
    }

    public function mount($id)
    {
        $this->record = Service::findOrFail($id);
        $this->service_id = $this->record->id;
    }

    public function resetInput()
    {
        $this->subject = null;
        $this->review = null;
        $this->rate = null;
        $this->service_id = null;
        $this->IP = null;
    }

    public function store()
    {

        $this->validate([
            'subject' => 'required|min:5',
            'review' => 'required|min:10',
            'rate' => 'required',
        ]);

        \App\Models\Review::create([
            'user_id' => Auth::id(),
            'service_id' => $this->service_id,
            'IP' => $_SERVER['REMOTE_ADDR'],
            'rate' => $this->rate,
            'subject' => $this->subject,
            'review' => $this->review,
            'status'=>'New'
        ]);
        session()->flash('message', 'Review Send Successfully');
        $this->resetInput();
    }

}
