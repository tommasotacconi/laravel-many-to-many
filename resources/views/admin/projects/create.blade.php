@extends('layouts.app')

@section('content')
<div class="container-md">
		<h1 class="ms-1">Create</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST" class="col-md-8 mx-auto row gy-3">
      @csrf

			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
      <div class="col-9 col-sm-8">
        <label for="input-name" class="form-label">Nome del progetto</label>
        <input type="text" class="form-control" id="input-name" name="name">
      </div>
      <div class="col-3 col-sm-4">
        <label for="input-type-id" class="form-label">Tipo</label>
        <select class="form-select" id="input-type-id" name="type_id">
					@foreach ($types as $id => $type)
						<option value="{{ $type->id }}">{{ $type->name }}</option>
					@endforeach
        </select>
      </div>
      <div class="col-12">
        <label for="input-authors" class="form-label">Autori</label>
        <input type="text" class="form-control" id="input-authors" name="authors">
      </div>
      <div class="col-12">
        <label for="input-arguments" class="form-label">Argomenti</label>
        <textarea type="text" class="form-control" id="input-arguments" name="arguments" rows="4"></textarea>
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <label for="input-start-date" class="form-label">Data d'inizio</label>
        <input type="date" class="form-control" id="input-start-date" name="start_date">
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <label for="input-end-date" class="form-label">Data di fine</label>
        <input type="date" class="form-control" id="input-end-date" placeholder="" name="end_date">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Crea</button>
        <button type="reset" class="btn btn-warning">Cancella campi</button>
      </div>
    </form>
  </div>

@endsection
