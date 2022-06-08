@extends('/layouts/main')

@section('name')
    <h1>Form</h1>

    <div class="container">
        <div class="row">´
            <div class="col-12">
                <a href="/">Voltar</a>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary text-center fs-3 fw-bold text-white">
                        🦾Cadastrar
                    </div><!--fim do card-header-->

                    <div class="card-body">

                        <div class="container px-3 my-3">
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <table class="table table-striped table-hover">
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
                                                <th>{{$measurement->id}}</th>
                                                <td>{{$measurement->date}}</td>
                                                <td>
                                                    <button class="btn btn-secondary">Editar</button>
                                                    <button class="btn btn-danger">excluir</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>

                    </div><!--fim do card-body-->
                </div><!--fim do card-->
            </div><!--fim da col-->
        </div><!--fim da row-->
    </div><!-- fim da container-->
@endsection