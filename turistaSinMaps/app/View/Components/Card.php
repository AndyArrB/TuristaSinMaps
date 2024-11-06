<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $header;
    public $title;
    public $text;
    public $btnText;
    public $btnLink;
    public $bgColor;


    public function __construct($header, $title, $text, $btnText, $btnLink, $bgColor = 'primary')
    {
        $this->header = $header;
        $this->title = $title;
        $this->text = $text;
        $this->btnText = $btnText;
        $this->btnLink = $btnLink;
        $this->bgColor = $bgColor;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
