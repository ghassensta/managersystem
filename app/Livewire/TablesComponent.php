<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Manager;

class TablesComponent extends Component
{
    public $searchTerm;
    public $searchBy = 'title';
    public $count;
    public $manager;

    protected $listeners = ['deleteAll'];

    public function mount()
    {
        $this->manager = Manager::all();
        $this->count = $this->manager->count();
    }

    public function render()
    {
        return view(' livewire.tables-component', [
            'manager' => $this->search()
        ]);
    }

    public function search()
    {
        $query = Manager::query();

        if ($this->searchTerm) {
            if ($this->searchBy === 'title') {
                $query->where('title', 'LIKE', '%' . $this->searchTerm . '%');
            } elseif ($this->searchBy === 'category') {
                $query->where('category', 'LIKE', '%' . $this->searchTerm . '%');
            }
        }

        return $query->get();
    }

    public function searchByTitle()
    {
        $this->searchBy = 'title';
        $this->search();
    }

    public function searchByCategory()
    {
        $this->searchBy = 'category';
        $this->search();
    }

    public function displayAll()
    {
        $this->searchTerm = '';
        $this->manager = Manager::all();
    }

    public function deleteAll()
    {
        Manager::truncate();
        session()->flash('message', 'Tous les enregistrements ont été supprimés.');
        $this->mount(); // Rafraîchir la table
    }

    public function delete($id)
    {
        Manager::find($id)->delete();
        session()->flash('message', 'Enregistrement supprimé avec succès.');
        $this->mount(); // Rafraîchir la table
    }
}

