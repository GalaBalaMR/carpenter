<x-guest-layout>
    <div class="d-flex justify-content-around mt-5">
        <h3 class="text-center">Upraviť projekt</h3>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-warning rounded-pill text-light mb-3">
          Prehľad projektov
        </a>
      </div>
    <form class="col-11 col-lg-8 m-auto" enctype="multipart/form-data" method="post" action="{{ route('admin.projects.update', $project->id) }}">
        @method('PUT')
        @csrf
        {{-- input NAME --}}
        <div class="mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="Názov projektu" aria-describedby="name" value="{{ old('name', $project->name) }}">
        </div>

        {{-- input MORE --}}
        <div class="mb-3">
            <input type="text" class="form-control" id="more" name="more" placeholder="Krátký opis" aria-describedby="more" value="{{ old('more', $project->more) }}">
        </div>

        {{-- input DESCRIPTION --}}
        <div class="mb-3">
            <input type="text" class="form-control" id="description" name="description" placeholder="Dlhý opis" aria-describedby="description" value="{{ old('description', $project->description) }}">
        </div>

        {{-- input KIND --}}
        <div class="mb-3">
            <input type="text" class="form-control" id="kind" name="kind" placeholder="Druh projektu" aria-describedby="kind" value="{{ old('kind', $project->kind) }}">
            <div id="kind" class="form-text">Druh projektu: skriňa, kuchyňa, nábytok, ostatné.</div>
        </div>
        
        <div class="mb-3">
            <input type="file" class="form-control" id="images" name="images[]" aria-describedby="images" multiple>
        </div>
        
        <div class="text-center mb-4">
            <button type="submit" class="btn btn-primary">Pridať</button>
        </div>
    </form>
  </x-guest-layout>