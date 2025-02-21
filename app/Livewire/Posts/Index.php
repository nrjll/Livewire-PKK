<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use str;
use App\Models\Product;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Index extends Component
{

   
    public $search;
    public $perPage = 5;
    protected $updateQueryString = ['search' => ['except'=>'']];
    public function render()
    {
        return view('livewire.posts.index', [
            'products'=>$this->search === null ?
                 Product::latest()->paginate($this->perPage) :
                 Product::latest()->where('name','like','%'.$this->search.'%')->paginate($this->perPage)
        ]);
    }
}
