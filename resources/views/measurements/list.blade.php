@extends('./layouts/main')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-12 my-3">
        <a href="/">Voltar</a>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-primary text-white text-center">
            <h2>Medidas Cadastradas</h2>
          </div>
          <div class="card-body">
            <div class="container px-3 my-3">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($measurements as $measurement)
                  <tr>
                    <th scope="row">{{$measurement->id}}</th>
                    <td>{{$measurement->date}}</td>
                    <td>
                      <button class="btn btn-secondary">Editar</button>
                      <button class="btn btn-danger">Excluir</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div><!-- fim do card-body -->
        </div> <!-- fim do card -->
      </div> <!-- fim da col -->
    </div> <!-- fim da row-->
  </div> <!-- fim da container -->
@endsection

