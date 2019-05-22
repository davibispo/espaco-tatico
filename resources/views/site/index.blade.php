@extends('layouts.app')

@section('content')

    <!-- Header -->
    <header class="masthead">
            <div class="container">
                <div class="intro-text">
                <div class="intro-lead-in">Clube de Tiro Esportivo</div>
                <div class="intro-heading text-uppercase">
                    <img src="{{ url('img/logo-espaco-tatico.png')}}" alt="" width="50%" style="opacity: 0.8; filter: alpha(opacity=80);">
                </div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about">Conheça Mais</a>
                </div>
            </div>
        </header>

        <!-- About -->
        <section id="about">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase">Sobre</h2>
                  <h3 class="section-subheading text-muted">Um pouco de nossa história</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 text-center">
                <!--
                <table class="table">
                <tr>
                    <td>2011</td>
                    <td>2012</td>
                    <td>Hoje</td>
                </tr>
                <tr>
                    <td><img src="img/about/1.jpg" width="250px"></td>
                    <td><img src="img/about/2.png" width="250px"></td>
                    <td><img src="img/about/3.jpg" width="250px"></td>
                </tr>
                </table>
                -->
            </div>
              </div>
            </div>
          </section>

        <!-- Galeria Grid -->
        <section class="bg-light" id="portfolio">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Galeria</h2>
                <h3 class="section-subheading text-muted">Fotos de nossos associados em ação.</h3>
              </div>
            </div>

            <div class="row">
                <!-- Pasta 1 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                        <i class="fas fa-bullseye fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-thumbnail" src="img/album1/trofeis/trofeis.png" alt="">
                    </a>
                    <div class="portfolio-caption">
                    <h4>Album 1</h4>
                    <p class="text-muted">Prêmios</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                        <i class="fas fa-bullseye fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-thumbnail" src="img/album2/fotos/foto1.png" alt="">
                    </a>
                    <div class="portfolio-caption">
                    <h4>Album 2</h4>
                    <p class="text-muted">Fotos</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                        <i class="fas fa-bullseye fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-thumbnail" src="img/album3/IMG-20181003-3.jpg" alt="" >
                    </a>
                    <div class="portfolio-caption">
                    <h4>Album 3</h4>
                    <p class="text-muted">Fotos</p>
                    </div>
                </div>
            </div>

            <!-- SEGUNDA LINHA DE GALERIA -->
            <div class="row">
              <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                      <i class="fas fa-bullseye fa-3x"></i>
                    </div>
                  </div>
                  <img class="img-thumbnail" src="img/album4/7.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                  <h4>Album 4</h4>
                  <p class="text-muted">Confraternização 2018</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-bullseye fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-thumbnail" src="img/alvos/tiro-defesa.jpeg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Alvos</h4>
                    <p class="text-muted">Imagens</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                      <i class="fas fa-bullseye fa-3x"></i>
                    </div>
                  </div>
                  <img class="img-thumbnail" src="img/album3/IMG-20181003-15.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                  <h4>Vídeos</h4>
                  <p class="text-muted">vídeos</p>
                </div>
              </div>
            </div>

        <!-- TERCEIRA LINHA DE GALERIA -->
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                      <i class="fas fa-bullseye fa-3x"></i>
                    </div>
                  </div>
                  <img class="img-thumbnail" src="img/album5/6.jpeg" alt="">
                </a>
                <div class="portfolio-caption">
                  <h4>Album 5</h4>
                  <p class="text-muted">Desembargador no Stand</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                      <i class="fas fa-bullseye fa-3x"></i>
                    </div>
                  </div>
                  <img class="img-thumbnail" src="img/album6/7.jpeg" alt="">
                </a>
                <div class="portfolio-caption">
                  <h4>Album 6</h4>
                  <p class="text-muted">OAB</p>
                </div>
            </div>

        </div>
    </div>
    </section>

        <!-- Calendario -->
        <section id="calendario">
            <div class="container">
                <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Calendário {{ date('Y') }}</h2>
                    <h3 class="section-subheading text-muted">Não perca nossos eventos!</h3>
                </div>
            </div>

            <div class="card">
                <div class="card-header" style="background:#5fa07a; color:white;">
                        <h4>Janeiro</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                        @foreach ($eventos as $evento)
                            @if (date('m', strtotime($evento->data)) == '1' and date('Y', strtotime($evento->data)) == 2019)
                            <li>
                                {{ date('d/m/y', strtotime($evento->data)) }} - {{ $evento->hora }} - <b>{{ $evento->evento }}</b>
                                <br>
                                @if (isset($evento->detalhe))
                                    <button type="button" class="btn btn-sm" data-toggle="collapse" data-target="#c{{ $evento->id }}">Detalhes</button>
                                    <div id="c{{ $evento->id }}" class="collapse">
                                        {{ $evento->detalhe }}
                                    </div>
                                @endif
                            </li>
                            <hr>
                            @endif
                        @endforeach
                        </ul>
                    </div>
                </div>

                    <div class="card">
                        <div class="card-header" style="background:#5fa07a; color:white;">
                                <h4>Fevereiro</h4>
                            </div>
                            <div class="card-body">
                                <ul>
                                    @foreach ($eventos as $evento)
                                        @if (date('m', strtotime($evento->data)) == '2'  and date('Y', strtotime($evento->data)) == date('Y'))
                                            <li>
                                                {{ date('d/m/y', strtotime($evento->data)) }} - {{ $evento->hora }} - <b>{{ $evento->evento }}</b>
                                                <br>
                                                @if (isset($evento->detalhe))
                                                    <button type="button" class="btn btn-sm" data-toggle="collapse" data-target="#c{{ $evento->id }}">Detalhes</button>
                                                    <div id="c{{ $evento->id }}" class="collapse">
                                                        {{ $evento->detalhe }}
                                                    </div>
                                                @endif
                                            </li>
                                            <hr>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                    </div>

                <div class="card">
                    <div class="card-header" style="background:#5fa07a; color:white;">
                            <h4>Março</h4>
                        </div>
                        <div class="card-body">
                            <ul>
                                @foreach ($eventos as $evento)
                                    @if (date('m', strtotime($evento->data)) == '3' and date('Y', strtotime($evento->data)) == date('Y'))
                                        <li>
                                            {{ date('d/m/y', strtotime($evento->data)) }} - {{ $evento->hora }} - <b>{{ $evento->evento }}</b>
                                            <br>
                                            @if (isset($evento->detalhe))
                                                <button type="button" class="btn btn-sm" data-toggle="collapse" data-target="#c{{ $evento->id }}">Detalhes</button>
                                                <div id="c{{ $evento->id }}" class="collapse">
                                                    {{ $evento->detalhe }}
                                                </div>
                                            @endif
                                        </li>
                                        <hr>
                                    @endif
                                @endforeach
                            </ul>

                        </div>
                    </div>

                    <div class="card">
                            <div class="card-header" style="background:#5fa07a; color:white;">
                              <h4>Abril</h4>
                            </div>
                              <div class="card-body">
                                <ul>
                                    @foreach ($eventos as $evento)
                                        @if (date('m', strtotime($evento->data)) == '4' and date('Y', strtotime($evento->data)) == date('Y'))
                                            <li>
                                                {{ date('d/m/y', strtotime($evento->data)) }} - {{ $evento->hora }} - <b>{{ $evento->evento }}</b>
                                                <br>
                                                @if (isset($evento->detalhe))
                                                    <button type="button" class="btn btn-sm" data-toggle="collapse" data-target="#c{{ $evento->id }}">Detalhes</button>
                                                    <div id="c{{ $evento->id }}" class="collapse">
                                                        {{ $evento->detalhe }}
                                                    </div>
                                                @endif
                                            </li>
                                            <hr>
                                        @endif
                                    @endforeach
                                </ul>

                        </div>
                      </div>

                      <div class="card">
                          <div class="card-header" style="background:#5fa07a; color:white;">
                                <h4>Maio</h4>
                            </div>
                            <div class="card-body">
                            <ul>
                                @foreach ($eventos as $evento)
                                    @if (date('m', strtotime($evento->data)) == '5' and date('Y', strtotime($evento->data)) == date('Y'))
                                        <li>
                                            {{ date('d/m/y', strtotime($evento->data)) }} - {{ $evento->hora }} - <b>{{ $evento->evento }}</b>
                                            <br>
                                            @if (isset($evento->detalhe))
                                                <button type="button" class="btn btn-sm" data-toggle="collapse" data-target="#c{{ $evento->id }}">Detalhes</button>
                                                <div id="c{{ $evento->id }}" class="collapse">
                                                    {{ $evento->detalhe }}
                                                </div>
                                            @endif
                                        </li>
                                        <hr>
                                    @endif
                                @endforeach
                            </ul>

                        </div>
                      </div>

                      <div class="card">
                            <div class="card-header" style="background:#5fa07a; color:white;">
                              <h4>Junho</h4>
                            </div>
                            <div class="card-body">
                                <ul>
                                    @foreach ($eventos as $evento)
                                        @if (date('m', strtotime($evento->data)) == '6' and date('Y', strtotime($evento->data)) == date('Y'))
                                            <li>
                                                {{ date('d/m/y', strtotime($evento->data)) }} - {{ $evento->hora }} - <b>{{ $evento->evento }}</b>
                                                <br>
                                                @if (isset($evento->detalhe))
                                                    <button type="button" class="btn btn-sm" data-toggle="collapse" data-target="#c{{ $evento->id }}">Detalhes</button>
                                                    <div id="c{{ $evento->id }}" class="collapse">
                                                        {{ $evento->detalhe }}
                                                    </div>
                                                @endif
                                            </li>
                                            <hr>
                                        @endif
                                    @endforeach
                                </ul>

                              </div>
                            </div>

                            <div class="card">
                                    <div class="card-header" style="background:#5fa07a; color:white;">
                                      <h4>Julho</h4>
                                    </div>
                                    <div class="card-body">
                                    <ul>
                                        @foreach ($eventos as $evento)
                                            @if (date('m', strtotime($evento->data)) == '7' and date('Y', strtotime($evento->data)) == date('Y'))
                                                <li>
                                                    {{ date('d/m/y', strtotime($evento->data)) }} - {{ $evento->hora }} - <b>{{ $evento->evento }}</b>
                                                    <br>
                                                    @if (isset($evento->detalhe))
                                                        <button type="button" class="btn btn-sm" data-toggle="collapse" data-target="#c{{ $evento->id }}">Detalhes</button>
                                                        <div id="c{{ $evento->id }}" class="collapse">
                                                            {{ $evento->detalhe }}
                                                        </div>
                                                    @endif
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                  </div>
                                </div>

                            <div class="card">
                                <div class="card-header" style="background:#5fa07a; color:white;">
                                    <h4>Agosto</h4>
                                </div>
                                    <div class="card-body">
                                        <ul>
                                            @foreach ($eventos as $evento)
                                                @if (date('m', strtotime($evento->data)) == '4' and date('Y', strtotime($evento->data)) == date('Y'))
                                                    <li>
                                                        {{ date('d/m/y', strtotime($evento->data)) }} - {{ $evento->hora }} - <b>{{ $evento->evento }}</b>
                                                        <br>
                                                        @if (isset($evento->detalhe))
                                                            <button type="button" class="btn btn-sm" data-toggle="collapse" data-target="#c{{ $evento->id }}">Detalhes</button>
                                                            <div id="c{{ $evento->id }}" class="collapse">
                                                                {{ $evento->detalhe }}
                                                            </div>
                                                        @endif
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                </div>
                            </div>

                        <div class="card">
                            <div class="card-header" style="background:#5fa07a; color:white;">
                                    <h4>Setembro</h4>
                                </div>
                                <div class="card-body">
                                <ul>
                                    @foreach ($eventos as $evento)
                                        @if (date('m', strtotime($evento->data)) == '9' and date('Y', strtotime($evento->data)) == date('Y'))
                                            <li>
                                                {{ date('d/m/y', strtotime($evento->data)) }} - {{ $evento->hora }} - <b>{{ $evento->evento }}</b>
                                                <br>
                                                @if (isset($evento->detalhe))
                                                    <button type="button" class="btn btn-sm" data-toggle="collapse" data-target="#c{{ $evento->id }}">Detalhes</button>
                                                    <div id="c{{ $evento->id }}" class="collapse">
                                                        {{ $evento->detalhe }}
                                                    </div>
                                                @endif
                                            </li>
                                            <hr>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="card">
                                <div class="card-header" style="background:#5fa07a; color:white;">
                                  <h4>Outubro</h4>
                                </div>
                                  <div class="card-body">
                                    <ul>
                                        @foreach ($eventos as $evento)
                                            @if (date('m', strtotime($evento->data)) == '10' and date('Y', strtotime($evento->data)) == date('Y'))
                                                <li>
                                                    {{ date('d/m/y', strtotime($evento->data)) }} - {{ $evento->hora }} - <b>{{ $evento->evento }}</b>
                                                    <br>
                                                    @if (isset($evento->detalhe))
                                                        <button type="button" class="btn btn-sm" data-toggle="collapse" data-target="#c{{ $evento->id }}">Detalhes</button>
                                                        <div id="c{{ $evento->id }}" class="collapse">
                                                            {{ $evento->detalhe }}
                                                        </div>
                                                    @endif
                                                </li>
                                                <hr>
                                            @endif
                                        @endforeach
                                    </ul>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" style="background:#5fa07a; color:white;">
                                    <h4>Novembro</h4>
                                </div>
                                <div class="card-body">
                                <ul>
                                    @foreach ($eventos as $evento)
                                        @if (date('m', strtotime($evento->data)) == '11' and date('Y', strtotime($evento->data)) == date('Y'))
                                            <li>
                                                {{ date('d/m/y', strtotime($evento->data)) }} - {{ $evento->hora }} - <b>{{ $evento->evento }}</b><br>
                                                @if (isset($evento->detalhe))
                                                    <button type="button" class="btn btn-sm" data-toggle="collapse" data-target="#c{{ $evento->id }}">Detalhes</button>
                                                    <div id="c{{ $evento->id }}" class="collapse">
                                                        {{ $evento->detalhe }}
                                                    </div>
                                                @endif
                                            </li>
                                            <hr>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" style="background:#5fa07a; color:white;">
                                    <h4>Dezembro</h4>
                                </div>
                                <div class="card-body">
                                <ul>
                                    @foreach ($eventos as $evento)
                                        @if (date('m', strtotime($evento->data)) == '12' and date('Y', strtotime($evento->data)) == date('Y'))
                                            <li>
                                                {{ date('d/m/y', strtotime($evento->data)) }} - {{ $evento->hora }} - <b>{{ $evento->evento }}</b><br>
                                                @if (isset($evento->detalhe))
                                                    <button type="button" class="btn btn-sm" data-toggle="collapse" data-target="#c{{ $evento->id }}">Detalhes</button>
                                                    <div id="c{{ $evento->id }}" class="collapse">
                                                        {{ $evento->detalhe }}
                                                    </div>
                                                @endif
                                            </li>
                                            <hr>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
            </div>
        </section>

        <!-- Resultados Grid -->
        <section class="bg-light" id="resultado">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Resultados</h2>
                        <h3 class="section-subheading text-muted">Desempenho dos associados</h3>
                    </div>

                    <div class="col-lg-12">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header card-link">
                                <a class="card-link" data-toggle="collapse" href="#collapse1">
                                    Resultados
                                </a>
                                </div>
                                <div id="collapse1" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <table class="table table-bordered table-striped" style="font-size:10px">
                                        <tr>
                                            <th>Etapa</th>
                                            <th>Nome</th>
                                            <th>N1</th>
                                            <th>N2</th>
                                            <th>N3</th>
                                            <th>Nota Final</th>
                                        </tr>
                                        @foreach ($resultados as $res)
                                            @foreach ($cadastros as $cad)
                                                @if ($res->cadastro_id == $cad->id)
                                                    <tr>
                                                        <td>{{ $res->evento }}</td>
                                                        <td>{{ $cad->nome }}</td>
                                                        <td>{{ $res->nota1 }}</td>
                                                        <td>{{ $res->nota2 }}</td>
                                                        <td>{{ $res->nota3 }}</td>
                                                        <td>{{ number_format($res->nota_final, 2, '.', ',') }}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <!-- Contact -->
        <section id="contact">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contato</h2>
                <h3 class="section-subheading text-muted">Mande uma mensagem para nós!</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                {!! Form::open(['method'=>'POST', 'action'=>'ContatoController@store']) !!}
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        {{ Form::text('nome', null,['class'=>'form-control', 'placeholder'=>'Nome *']) }}
                        <p class="help-block text-danger"></p>
                      </div>
                      <div class="form-group">
                        {{ Form::text('email', null,['class'=>'form-control', 'placeholder'=>'E-mail *']) }}
                        <p class="help-block text-danger"></p>
                      </div>
                      <div class="form-group">
                        {{ Form::text('telefone', null,['class'=>'form-control', 'placeholder'=>'Telefone *']) }}
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <textarea class="form-control" name="mensagem" placeholder="Sua Mensagem *" required="required" data-validation-required-message="Por favor digite uma mensagem."></textarea>
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                      <div id="success"></div>
                      {!! Form::submit('Enviar Mensagem', ['class'=>'btn btn-primary btn-xl text-uppercase']) !!}
                    </div>
                  </div>
                  {!! Form::close() !!}
              </div>
            </div>
          </div>
        </section>

        <!-- Footer -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <span class="copyright text-center">
                    Clube de Tiro Esportivo - Espaço Tático <br>
                    Av. Gov. Afrânio Lages, 110 - Cambona - Maceió/AL - (82) 3316-4370<br>
                    Copyright &copy; 2018 - Todos os direitos reservados
                </span>

              </div>

            </div>
          </div>
        </footer>


    <!-- Modal da Galeria -->

    <!-- Modal Pasta 1 -->
    <div class="modal fade" id="portfolioModal1" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-center">Prêmios</h4>
            </div>
            <div class="modal-body">
                <!-- Conteudo Modal -->
                <div id="carousel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ url('img/album1/trofeis/trofeu1.png')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album1/trofeis/trofeu3.png')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album1/trofeis/trofeu4.png')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album1/trofeis/trofeu5.png')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album1/trofeis/trofeu6.png')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album1/trofeis/trofeis.png')}}" alt="" width="600">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <!-- Fim Conteudo Modal-->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
    </div>

    <!-- Modal Pasta 2 -->
    <div class="modal fade" id="portfolioModal2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Fotos</h4>
            </div>
            <div class="modal-body">
                <!-- Conteudo Modal -->
                <div id="carousel2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ url('img/album2/fotos/foto2.png')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album2/fotos/foto1.png')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album2/fotos/1.jpeg')}}" alt="" width="600">
                            <p>Stand sendo usado para curso de nossa Briosa Polícia Militar</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <!-- Fim Conteudo Modal-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Pasta 3 -->
    <div class="modal fade" id="portfolioModal3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Fotos</h4>
            </div>
            <div class="modal-body">
                <!-- Conteudo Modal -->
                <div id="carousel3" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ url('img/album3/IMG-20181003-3.jpg')}}" alt="" width="600px">
                        </div>
                        @for($i = 1; $i <= 85; $i++)
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/album3/IMG-20181003-{{ $i }}.jpg" width='600px'>
                            </div>
                        @endfor
                    </div>
                    <a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <!-- Fim Conteudo Modal-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
        </div>
    </div>


    <!-- Modal Pasta 4 -->
    <div class="modal fade" id="portfolioModal4" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Fotos</h4>
            </div>
            <div class="modal-body">
                <!-- Conteudo Modal -->
                <div id="carousel4" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ url('img/album4/1.jpg')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album4/2.jpg')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album4/3.jpg')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album4/4.jpg')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album4/5.jpg')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album4/6.jpg')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album4/7.jpg')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album4/8.jpg')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album4/9.jpg')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album4/10.jpg')}}" alt="" width="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('img/album4/11.jpg')}}" alt="" width="600">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel4" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel4" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <!-- Fim Conteudo Modal-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Pasta 5 -->
    <div class="modal fade" id="portfolioModal5" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Alvos</h4>
            </div>
            <div class="modal-body">
                <!-- Conteudo Modal -->
                <div id="carousel5" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ url('img/alvos/laudo-pf.jpeg')}}" alt="" width="640" height="480">
                                <p>Alvo para teste de tiro e laudo para a polícia federal, e porte de arma de fogo cano curto.</p>
                                </div>
                                <div class="carousel-item">
                                <img src="{{ url('img/alvos/precisao.jpeg')}}" alt="" width="640" height="480">
                                <p>Alvo para treino e precisão</p>
                                </div>
                                <div class="carousel-item">
                                <img src="{{ url('img/alvos/tiro-defesa.jpeg')}}" alt="" width="640" height="480">
                                <p>Alvo da confederação e do calendário do clube 2019 tiro de defesa.</p>
                            </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel5" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel5" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <!-- Fim Conteudo Modal-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Pasta 6 Videos -->
    <div class="modal fade" id="portfolioModal6" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Vídeos</h4>
            </div>
            <div class="modal-body">
                <!-- Conteudo Modal -->
                <div id="carousel6" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active text-center" style="background-color:#5fa07a">
                            <b style="color:white">Tenente DG no Stand</b>
                            <video width="400" height="400" controls>
                                <source src="videos/tenente-dg.mp4" type="video/mp4">
                            </video>
                            <p>Assita vídeo completo aqui: <a style="color: white" href="https://www.youtube.com/watch?v=nDuneex1ZtQ&feature=youtu.be" target="_blank">https://goo.gl/2DrGFy</a></p>
                        </div>
                        <div class="carousel-item text-center" style="background-color:#5fa07a">
                            <video width="400" height="400" controls>
                                <source src="videos/treino/video1.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="carousel-item text-center" style="background-color:#5fa07a">
                            <video width="400" height="400" controls>
                                <source src="videos/treino/video2.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="carousel-item text-center" style="background-color:#5fa07a">
                            <video width="400" height="400" controls>
                                <source src="videos/treino/video3.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="carousel-item text-center" style="background-color:#5fa07a">
                            <video width="400" height="400" controls>
                                <source src="videos/v1-oab.mp4" type="video/mp4">
                            </video>
                            <p>OAB - vídeo 1</p>
                        </div>
                        <div class="carousel-item text-center" style="background-color:#5fa07a">
                            <video width="400" height="400" controls>
                                <source src="videos/v2-oab.mp4" type="video/mp4">
                            </video>
                            <p>OAB - vídeo 2</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel6" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel6" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <!-- Fim Conteudo Modal-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Pasta 7 -->
    <div class="modal fade" id="portfolioModal7" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Fotos</h4>
            </div>
            <div class="modal-body">
                <!-- Conteudo Modal -->
                <div id="carousel7" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ url('img/album5/6.jpeg')}}" alt="" width="600px">
                            <p>
                                Dia 28 de dezembro esteve presente ao nosso clube o Sr Excelentíssimo Desembargador do Tribunal de Justiça
                                do Estado  Fernando Torino, acompanhado do nosso Ilustre Instrutor de Tiro Sr Nelmo Monte.
                            </p>
                        </div>
                        @for($i = 1; $i <= 7; $i++)
                            <div class="carousel-item">
                                <img src="img/album5/{{ $i }}.jpeg" width='200px'>
                            </div>
                        @endfor
                    </div>
                    <a class="carousel-control-prev" href="#carousel7" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel7" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <!-- Fim Conteudo Modal-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal Pasta 8 -->
    <div class="modal fade" id="portfolioModal8" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Fotos - OAB</h4>
            </div>
            <div class="modal-body">
                <!-- Conteudo Modal -->
                <div id="carousel8" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ url('img/album6/7.jpeg')}}" alt="" width="600px">
                        </div>
                        @for($i = 1; $i <= 8; $i++)
                            <div class="carousel-item">
                                <img src="img/album6/{{ $i }}.jpeg" width='200px'>
                            </div>
                        @endfor
                    </div>
                    <a class="carousel-control-prev" href="#carousel8" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel8" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <!-- Fim Conteudo Modal-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
    </div>


@endsection
