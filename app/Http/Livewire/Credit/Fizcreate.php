<?php

namespace App\Http\Livewire\Credit;

use Livewire\Component;

class Fizcreate extends Component
{
    public $client,$ClientType;

    protected $rules=[
        'client.type'=>'required|numeric',
        'client.sex'=>'required|numeric',
        'client.code'=>'required|numeric|unique:clients',
        'client.add_date'=>'required|date',
        'client.workaddress'=>'required|string',
        'client.inn'=>'required|numeric|digits:9',
        'client.pen_chet'=>'required|numeric',
        'client.phone'=>'required|numeric',
        'client.email'=>'nullable|email',
    ];

    public function render()
    {


        // dd($this->client->code);
        return view('livewire.credit.fizcreate');
    }
    public function store()
    {
        $this->validate();
      dd($this->client);
    }
    public function mount()
    {
        $this->ClientType=\App\Models\CreditType::where('subject_id',2)->get();
        $this->client=new \App\Models\Client();
        // dd();
        $this->client->type=$this->ClientType->first()->id;
        $code=\App\Models\Client::latest()->first();
        if($code==null){
            $lastcode=1;
        }
        else{
            $lastcode=$code->id+1;
        }
        $this->client->code=999000000+$lastcode;
        $this->client->add_date=now()->format('Y-m-d');
    }
}
