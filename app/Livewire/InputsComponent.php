<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Manager;

class InputsComponent extends Component
{
    public $title;
    public $price;
    public $taxes;
    public $ads;
    public $discount;
    public $count;
    public $category;
    public $total = 0;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'price' => 'required|numeric',
            'taxes' => 'required|numeric',
            'ads' => 'required|numeric',
            'discount' => 'required|numeric',
        ]);

        $this->total = $this->price + $this->taxes + $this->ads - $this->discount;
    }

    public function store()
    {
        $this->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'taxes' => 'required|numeric',
            'ads' => 'required|numeric',
            'discount' => 'required|numeric',
            'count' => 'required|numeric',
            'category' => 'required|string',
        ]);

        Manager::create([
            'title' => $this->title,
            'price' => $this->price,
            'taxes' => $this->taxes,
            'ads' => $this->ads,
            'discount' => $this->discount,
            'count' => $this->count,
            'category' => $this->category,
            'total' => $this->total
        ]);

        session()->flash('message', 'Produit créé avec succès!');

        // Réinitialisation des champs
        $this->resetInputFields();
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->price = '';
        $this->taxes = '';
        $this->ads = '';
        $this->discount = '';
        $this->count = '';
        $this->category = '';
        $this->total = 0;
    }

    public function render()
    {
        return view('livewire.inputs-component');
    }
}


