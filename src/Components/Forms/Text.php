<?php

namespace HeppyEkberg\Larcom\Components\Forms;

use HeppyEkberg\Larcom\Input;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Text extends Input
{
    public function render(): View
    {
        return view('Larcom::forms.text');
    }

}
