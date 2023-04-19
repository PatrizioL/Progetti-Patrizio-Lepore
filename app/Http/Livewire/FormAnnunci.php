<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Annuncio;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class FormAnnunci extends Component
{
    public $name;
    public $description;
    public $price;

    public $category;

    protected $rules =
    [
        'name' => 'required|min:5',
        'description' => 'required|min:5',
        'price' => 'required',
        'category' => 'required',
    ];

    protected $message =
    [
        'name.required' => 'il nome è richiesto',
        'description.required' => 'la descrizione è richiesta',
        'price.required' => 'il prezzo è richiesto',
        'category.required' => 'la catageoria è richiesta',
        'name.min' => 'il nome è troppo corto',
        'description.min' => 'la descrizione è troppo corto',
    ];
    public function render()
    {
        return view('livewire.form-annunci');
    }

    public function createFormAnnunci()
    {
        $category = Category::findOrfail($this->category);
        $this->validate();
        $category->annuncios()->create(
            [
                'name' => $this->name,
                'description' => $this->description,
                'price' => $this->price,
                'user_id' => Auth::user()->id,
            ]
        );
        $this->reset();

        return redirect(route('homepage'))->with('message', 'Annuncio pubblicato');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
