<?php

namespace App\Livewire;

use App\Models\Test;
use Livewire\Component;

class TestComponent extends Component
{
    public $tests;

    public function mount()
    {
        $this->tests = Test::orderBy('tr', 'asc')->get();
    }
    
    public function render()
    {
        return view('livewire.test-component', [
            'tests' => $this->tests
        ]);
    }
    
    public function testUpdate($orderedIds)
    {

        dd($orderedIds);
        // foreach ($orderedIds as $index => $id) {
        //     Test::where('id', $id)->update(['tr' => $index + 1]);
        // }
        
        // // Yangilangan ma'lumotlarni qayta olish
        // $this->tests = Test::orderBy('tr', 'asc')->get();
    }
    
}
