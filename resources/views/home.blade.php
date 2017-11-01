@extends('layouts.menu')
@section('menu')
<div class="main main-raised" id="seleccionMD">
  <div class="profile-content">
          <div class="container">
              <div class="row">
                  <div class="profile">
                      <div class="avatar">
                          <img src="{{asset('img/pabic.jpg')}}" alt="Circle Image" class="img-circle img-responsive img-raised">
                      </div>
                      <div class="name">
                          <h3 class="title">Areas</h3>
                      </div>
                  </div>
              </div>


      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="profile-tabs">
              <!--Aqui va todo los cuadros de los  departamentos-->
              <div class="profile-tabs">
                          <div class="nav-align-center">
                  <ul class="nav nav-pills" role="tablist">
                    <li class="active">
                      <button class="btn btn-primary" data-toggle="modal" data-target="#sucursal">
                        Editar
                      </button>
                    </li>
                    <!-- Button trigger modal -->


                            </ul>


                            <div class="tab-content gallery">
                    <div class="tab-pane active" id="studio">
                                    <div class="row">
                        <div class="col-md-6">
                          <a href="{{ url('administrador') }} " class="portfolio-link" data-toggle="modal">

                              <img src="{{asset('img/cabin.png')}}" class="img-responsive" alt="Cabin" title="omar">
                          </a>
                          <img src="{{asset('img/circus.png')}}" class="img-rounded" />
                        </div>
                        <div class="col-md-6">
                          <img src="{{asset('img/circus.png')}}" class="img-rounded" />
                          <img src="{{asset('img/cake.png')}}" class="img-rounded" />
                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane text-center" id="work">
                      <div class="row">
                        <div class="col-md-6">
                          <img src="../assets/img/examples/chris5.jpg" class="img-rounded" />
                          <img src="../assets/img/examples/chris7.jpg" class="img-rounded" />
                          <img src="../assets/img/examples/chris9.jpg" class="img-rounded" />
                        </div>
                        <div class="col-md-6">
                          <img src="../assets/img/examples/chris6.jpg" class="img-rounded" />
                          <img src="../assets/img/examples/chris8.jpg" class="img-rounded" />
                        </div>
                      </div>
                                </div>
                    <div class="tab-pane text-center" id="shows">
                      <div class="row">
                        <div class="col-md-6">
                          <img src="../assets/img/examples/chris4.jpg" class="img-rounded" />
                          <img src="../assets/img/examples/chris6.jpg" class="img-rounded" />
                        </div>
                        <div class="col-md-6">
                          <img src="../assets/img/examples/chris7.jpg" class="img-rounded" />
                          <img src="../assets/img/examples/chris5.jpg" class="img-rounded" />
                          <img src="../assets/img/examples/chris9.jpg" class="img-rounded" />
                        </div>
                      </div>
                                </div>

                            </div>
                </div>
              </div>
          </div>
        </div>
       </div>

       @include('sucursal')

       <div class="col-sm-8">
           <pre>
               @{{$data}}
           </pre>
       </div>


      </div>
   </div>
</div>


@endsection
