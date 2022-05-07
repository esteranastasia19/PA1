<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminWebLayout extends Component
{
    public $title;
    public function __construct($title)
    {
        $this->title = $title;
    }
    public function render()
    {
        return view('theme.admin.web.main');
    }
}