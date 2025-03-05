<?php

namespace App\Livewire;

use App\Models\Supplier;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\BookCategory as Category;

class SupplierTableData extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public $search = '';

    #[Url(history: true)]
    public $perPage = 10;

    #[Url(history: true)]
    public $filter = 0;

    #[Url(history: true)]
    public $sortBy = 'id';

    #[Url(history: true)]
    public $sortDir = 'DESC';

    public function setFilter($value)
    {
        $this->filter = $value;
        $this->resetPage();
    }

    public function setSortBy($newSortBy)
    {
        if ($this->sortBy == $newSortBy) {
            $newSortDir = ($this->sortDir == 'DESC') ? 'ASC' : 'DESC';
            $this->sortDir = $newSortDir;
        } else {
            $this->sortBy = $newSortBy;
        }
    }

    // ResetPage when updated search
    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        $publisher = Supplier::find($id);
        $publisher->delete();

        session()->flash('success', 'Supplier successfully deleted!');
    }

    // ==========Add New Publisher============
    public $new_name = null;
    public $new_phone = null;
    public $new_gender = null;
    public $new_link = null;
    public $new_category_id = null;

    public function saveNewPublisher()
    {
        try {
            $validated = $this->validate([
                'new_name' => 'required|string|max:255',
            ]);

            Supplier::create([
                'name' => $this->new_name,
                'phone' => $this->new_phone,
                'link' => $this->new_link,
                'category_id' => $this->new_category_id,
            ]);

            session()->flash('success', 'Add New Supplier successfully!');

            $this->reset(['new_name', 'new_gender', 'new_phone']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            session()->flash('error', $e->validator->errors()->all());
        }
    }

    public $editId = null;
    public $name;
    public $gender;
    public $phone;
    public $link;
    public $category_id;

    public function setEdit($id)
    {
        $publisher = Supplier::find($id);
        $this->editId = $id;
        $this->name = $publisher->name;
        $this->gender = $publisher->gender;
        $this->phone = $publisher->phone;
        $this->link = $publisher->link;
        $this->category_id = $publisher->category_id;
    }

    public function cancelUpdatePublisher()
    {
        $this->editId = null;
        $this->name = null;
        $this->phone = null;
        $this->gender = null;
        $this->category_id = null;
        $this->link = null;
    }

    public function updatePublisher($id)
    {
        try {
            $validated = $this->validate([
                'name' => 'required|string|max:255',
            ]);

            $publisher = Supplier::find($id);
            $publisher->update([
                'name' => $this->name,
                'phone' => $this->phone,
                'link' => $this->link,
                'category_id' => $this->category_id,
            ]);

            session()->flash('success', 'Supplier successfully edited!');

            $this->reset(['name', 'gender', 'editId', 'link', 'category_id']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            session()->flash('error', $e->validator->errors()->all());
        }
    }

    public function render()
    {

        $items = Supplier::where(function ($query) {
            $query->where('name', 'LIKE', "%$this->search%");
        })
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->perPage);
        $categories = Category::all();
        return view('livewire.supplier-table-data', [
            'items' => $items,
            'categories' => $categories,
        ]);
    }
}
