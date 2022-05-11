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

                                {{-- pesso --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="pesoKg" type="text" placeholder="Peso (Kg)" data-sb-validations="required" />
                                    <label for="pesoKg">Peso (Kg)</label>
                                    <div class="invalid-feedback" data-sb-feedback="pesoKg:required">Peso é obrigatorio.</div>
                                </div>

                                {{-- altura --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="alturaCm" type="text" placeholder="Altura (cm)" data-sb-validations="required" />
                                    <label for="alturaCm">Altura (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="alturaCm:required">Altura é obrigatorio.</div>
                                </div>

                                {{-- peitoral --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="peitoralCm" type="text" placeholder="Peitoral (cm)" data-sb-validations="required" />
                                    <label for="peitoralCm">Peitoral (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="peitoralCm:required">Peitoral é obrigatorio.</div>
                                </div>

                                {{-- braço esquerdo --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="bracoEsquerdoCm" type="text" placeholder="Braço esquerdo (cm)" data-sb-validations="required" />
                                    <label for="bracoEsquerdoCm">Braço esquerdo (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="bracoEsquerdoCm:required">Braço esquerdo é obrigatorio.</div>
                                </div>

                                {{-- braço direito --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="bracoDireitoCm" type="text" placeholder="Braço direito (cm)" data-sb-validations="required" />
                                    <label for="bracoDireitoCm">Braço direito (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="bracoDireitoCm:required">Braço direito é obrigatorio.</div>
                                </div>

                                {{-- abdômen --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="abdomenCm" type="text" placeholder="Abdômen (cm)" data-sb-validations="required" />
                                    <label for="abdomenCm">Abdômen (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="abdomenCm:required">Abdômen é obrigatorio.</div>
                                </div>

                                {{-- cintura --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="cinturaCm" type="text" placeholder="Cintura (cm)" data-sb-validations="required" />
                                    <label for="cinturaCm">Cintura (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="cinturaCm:required">Cintura é obrigatorio.</div>
                                </div>

                                {{-- quadril --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="quadrilCm" type="text" placeholder="Quadril (cm)" data-sb-validations="required" />
                                    <label for="quadrilCm">Quadril (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="quadrilCm:required">Quadril é obrigatorio.</div>
                                </div>

                                {{-- coxa esquerda --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="coxaEsquerdaCm" type="text" placeholder="Coxa esquerda (cm)" data-sb-validations="required" />
                                    <label for="coxaEsquerdaCm">Coxa esquerda (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="coxaEsquerdaCm:required">Coxa esquerda é obrigatorio.</div>
                                </div>

                                {{-- coxa direita --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="coxaDireitaCm" type="text" placeholder="Coxa direita (cm)" data-sb-validations="required" />
                                    <label for="coxaDireitaCm">Coxa direita (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="coxaDireitaCm:required">Coxa direita é obrigatorio.</div>
                                </div>

                                {{-- panturrilha esquerda --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="panturrilhaEsquerdaCm" type="text" placeholder="Panturrilha esquerda (cm)" data-sb-validations="required" />
                                    <label for="panturrilhaEsquerdaCm">Panturrilha esquerda (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="panturrilhaEsquerdaCm:required">Panturrilha esquerda é obrigatorio.</div>
                                </div>

                                {{-- panturrilha direita --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="panturrilhaDireitaCm" type="text" placeholder="Panturrilha direita (cm)" data-sb-validations="required" />
                                    <label for="panturrilhaDireitaCm">Panturrilha direita (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="panturrilhaDireitaCm:required">Panturrilha direita é obrigatorio.</div>
                                </div>

                                {{-- botoes --}}
                                <div class="d-flex">
                                    <button class="btn btn-primary btn-lg disabled flex-fill me-1" id="submitButton" type="submit">Submit</button>
                                    <button class="btn btn-secondary btn-lg flex-fill ms-1" id="resetButton" type="reset">Reset</button>
                                </div>
                            </form>
                        </div>

                    </div><!--fim do card-body-->
                </div><!--fim do card-->
            </div><!--fim da col-->
        </div><!--fim da row-->
    </div><!-- fim da container-->
@endsection