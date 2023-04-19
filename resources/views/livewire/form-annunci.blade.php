<div>
    <form wire:submit.prevent="createFormAnnunci">
        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select wire:model.debounce.lazy="category" id="" class="form-control @error('category') is-invalid @enderror">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
          </div>
        <div class="mb-3">
          <label class="form-label">Titolo</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.debounce.lazy="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea  class="form-control @error('description') is-invalid @enderror" wire:model.debounce.lazy="description"></textarea>
        </div>
          <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input type="number" step="0.1" class="form-control @error('price') is-invalid @enderror" wire:model.debounce.lazy="price">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
