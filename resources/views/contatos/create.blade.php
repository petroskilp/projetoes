@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Adicionar contato</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contatos.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">Nome:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Sobrenome:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="city">Cidade:</label>
              <input type="text" class="form-control" name=9"city"/>
          </div>
          <div class="form-group">
              <label for="country">País:</label>
              <input type="text" class="form-control" name="country"/>
          </div>
          <div class="form-group">
              <label for="job_title">Profissão:</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>                         
          <button type="submit" class="btn btn-primary-outline">Adicionar contato</button>
      </form>
  </div>
</div>
</div>
@endsection