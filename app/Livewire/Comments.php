<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;

class Comments extends Component
{
    public $comments;

    public function render()
    {
        $this->comments = Comment::all();
        return view('livewire.comments');
    }
}
