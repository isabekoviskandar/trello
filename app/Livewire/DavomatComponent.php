<?php

namespace App\Livewire;

use App\Models\Student;
use Carbon\Carbon;
use Livewire\Component;

class DavomatComponent extends Component
{

    public $date , $students, $studentId;
    public $davomatDate;

    public function mount()
    {
        $this->date = Carbon::now();
        $this->students = Student::all();
    }
    public function render()
    {   
        $daysInMonth = $this->date->daysInMonth;
        $days = [];
        for ($i=1; $i <= $daysInMonth ; $i++) { 
            $days[] = Carbon::create($this->date->year, $this->date->month, $i);
        }
        return view('livewire.davomat-component', compact('days'));
    }

    public function changeDate($data)
    {
        $this->date = Carbon::parse($data);
    }

    public function inputView($id, $data)
    {
        $this->studentId = $id;
        $this->davomatDate = $data;
    }

    public function createDavomat(Student $student, $date, $status)
    {
        $student->davomat()->updateOrCreate(
            ['date'=>Carbon::parse($date)],
            ['status'=> $status],
        );

        $this->reset('studentId' , 'davomatDate');
    }
}
