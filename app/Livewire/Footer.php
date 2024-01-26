<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;

class Footer extends Component
{
    public $yearNow;

    public array $content = [
        'title' => 'Occupio IT Solutors - ',
        'description' => 'All rights reserved',
        'body' => 'All rights reserved.',
        'link' => 'https://occupio.it',
        'year' => "2023",
    ];

    public function render()
    {
        return view('livewire.footer');
    }
}
