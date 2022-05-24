<?php

namespace HeppyEkberg\Larcom\Components\Forms;

use HeppyEkberg\Larcom\Input;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use function HeppyEkberg\Larcom\Components\view;

class Date extends Input
{
    public function render(): View
    {
        return view('Larcom::forms.date');
    }
}
