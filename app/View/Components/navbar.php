<?php

namespace App\View\Components;

use App\Models\Cat;
use Illuminate\View\Component;

class navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data['cats']=Cat::select('id','name')->get();
        return view('components.navbar')->with($data);
    }
}
