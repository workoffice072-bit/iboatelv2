<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageUploadPreview extends Component
{
    public $prefix;
    public $name;
    public $label;

    public function __construct(
        $prefix = 'user',
        $name = 'profile_photo',
        $label = 'Profile Photo'
    ) {
        $this->prefix = $prefix;
        $this->name = $name;
        $this->label = $label;
    }

    public function render(): View|Closure|string
    {
        return view('components.image-upload-preview');
    }
}
