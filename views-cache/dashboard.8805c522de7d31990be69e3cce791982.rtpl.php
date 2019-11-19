<?php if(!class_exists('Rain\Tpl')){exit;}?>





      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-email-85 text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">E-mail</p>
                      <p class="card-title">4
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                    <button id="entrarEmail" class="btn btn-outline-warning btn-round" onclick="window.location.href = '/admin/email'">
                      <i class="nc-icon nc-chat-33"></i> Acessar
                    </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Revenue</p>
                      <p class="card-title">$ 1,345
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i> Last day
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Error Code</p>
                      <p data-error_per class="card-title">
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <!-- <i class="fa fa-clock-o"></i> In the last hour -->
                  <button id="listarerros" class="btn btn-outline-danger btn-round" data-toggle="modal" data-target="#codigos_erros">
                      <i class="nc-icon nc-bullet-list-67"></i>Listar erros
                    </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      
                      <i class="nc-icon nc-chart-bar-32 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Graficos</p>
                      <p class="card-title">3
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  
                  <button id="btnchartajax" class="btn btn-outline-primary btn-round">
                    <i class="fa fa-refresh"></i> Atualizar
                  </button>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Numero de visitas</h5>
                <p data-nqnt="value" class="card-category"></p>
              </div>
              <div class="card-body ">
                <canvas id=chartHours width="400" height="100"></canvas>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i data-update-per-visitas class="fa fa-history"></i> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Email Statistics</h5>
                <p class="card-category">Last Campaign Performance</p>
              </div>
              <div class="card-body ">
                <canvas id="chartEmail"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-primary"></i> Opened
                  <i class="fa fa-circle text-warning"></i> Read
                  <i class="fa fa-circle text-danger"></i> Deleted
                  <i class="fa fa-circle text-gray"></i> Unopened
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar"></i> Number of emails sent
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">NASDAQ: AAPL</h5>
                <p class="card-category">Line Chart with Points</p>
              </div>
              <div class="card-body">
                <canvas id="speedChart" width="400" height="100"></canvas>
              </div>
              <div class="card-footer">
                <div class="chart-legend">
                  <i class="fa fa-circle text-info"></i> Tesla Model S
                  <i class="fa fa-circle text-warning"></i> BMW 5 Series
                </div>
                <hr/>
                <div class="card-stats">
                  <i class="fa fa-check"></i> Data information certified
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="container">

            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item" style="margin: auto;" aria-current="page">
                    
                      <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="nc-icon nc-bullet-list-67"></i></div>
                          </div>
                            <input type="text" class="form-control" name="Filtro" id="Filtro" placeholder="Filtrar...">
                          </div>
                    
                </ol>
              </nav>
          </div>
            
        </div>
        <div id="row-per" class="row">
          <!-- LOOP php -->
          <div data-filter="" class="col-md-4">
            <div  class="card" style=" padding-left: 5px; padding-right: 5px;">
              <img class="card-img-top" src="/res/admin/assets/img/bg5.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
                <a  href="#" >
                    <button  class="btn-dark-per bd-radius-per-4 btn-hg-45px-per animation-cover-per wgh-bold-per" type="button">BAIXAR
                        <span class=""><i style="font-size: 24px;" class="nc-icon nc-cloud-download-93"></i></span>
                    </button>
                </a>
                |
                <a  href="#" >
                    <button  class="btn-dark-per bd-radius-per-4 btn-hg-45px-per animation-cover-per wgh-bold-per" type="button">GITHUB
                        <span class=""><i style="font-size: 24px;" class="nc-icon nc-spaceship"></i></span>
                    </button>
                </a>
              </div>
            </div>
          </div>
          <!-- END loop php -->
         
          
        </div>
      </div>

  
  <!-- Modal Code Error -->
  <div class="modal fade" id="codigos_erros" tabindex="-1" role="dialog" aria-labelledby="codigos_erros" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Codigos de erros</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <b>1 -></b> <i>Erro na requisicao do ajax. Ou dados incompletos recebidos. Codigo Atual: <small id="show_error_code_ajax"></small></i>
          <hr>
          <b>2 -></b> <i>Dados nao foram bem trabalhados, provavelmente, dados incompletos ou erro de sintaxe. Error: <small id="show_error_code_trycatch_ajax"></small></i>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



<!--       
      <div data-filter="Sockess" class="card" style="width: 18rem;">
        <img src="../img/workflow-demo.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sockes Stress Python</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a data-card_links="0" href="#" >
            <button  class="btn-dark-per bd-radius-per-4 btn-hg-45px-per animation-cover-per wgh-bold-per" type="button">Download
                <span class=""><i class="fab fa-github"></i></span>
            </button>
        </a>
        </div>
      </div> -->
