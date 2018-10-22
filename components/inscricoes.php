<section class="mt-6 mb-3" id="inscricoes">
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="text-center display-5">INSCRIÇÕES</p>	
      </div>
    </div>
    <!--<div class="row">
      <p class="mt-3">&bull; Selecione o melhor dia e horário para você ter essa experiência</p> 
    </div>-->
    <div class="row">
      <div class="offset-lg-3 col-lg-7">
        <form  class="form-inline">
          <label class="my-1 mr-3" for="semana">Selecione a Semana</label>
          <select class="custom-select my-1 mr-sm-1" id="semana" required>
              <?php
                // $segundaFeirasValidas vem de index.php
                foreach ($segundaFeirasValidas as $diaDoAno => $data) {
                  $diaMesAno = explode('-', explode(' ', $data)['0']);
                  echo '<option value="'. $diaDoAno. '"> Semana do Dia '.$diaMesAno[0].'/'.$diaMesAno[1].' </options>';
                }
              ?>
          </select>
          
          <label class="my-1 mr-2" for="dia">Selecione o dia</label>
          <select class="custom-select my-1 mr-sm-2" id="dia" required>
              <option value="">Selecione...</option>
          </select>

          <label class="my-1 mr-2" for="hora">e a hora</label>
          <select class="custom-select my-1 mr-sm-2" id="turma" required> 
              <option>Selecione...</option>
              <option value="1" horario="10:00">10:00h</option>
              <option value="2" horario="11:15">11:15h</option>
              <option value="3" horario="13:30">13:30h</option>
              <option value="4" horario="15:00">15:00h</option>
          </select>

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgendamento">Agendar</button>					
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col mt-3">
        <h5 class="text-center">Obs.: Quantidade máxima de pessoas por turma [6]</h5>
      </div>
    </div>

    <!-- modal agendamento -->
    <div class="modal fade" id="modalAgendamento" tabindex="-1" role="dialog" aria-labelledby="tituloModalAgendamento" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tituloModalAgendamento">Agendamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
            <div id="resultMessage" class="alert text-center" style="display: none;"></div>
                <div class="form-group">
                <label for="nome">Digite seu nome</label>
                <input type="text" class="form-control" id="nome">
              </div>
              <div class="form-group">
                <label for="matricula">Matrícula</label>
                <input type="text" class="form-control" id="matricula" aria-describedby="matriculaHelp">
                <small id="matriculaHelp" class="form-text text-muted">Digite sua matricula no formato FXXXXXXX</small>
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" id="botaoConfirmaAgendamento">Agendar</button>
              </div>
          </div>
        </div>
    </div>
    <!-- fim modal -->
    <div class="row" id="calendario">
      <div class="col-lg-12">
        <div class="cd-schedule loading">
          <div class="timeline">
            <ul>
              <li><span>09:00</span></li>
              <li><span>09:30</span></li>
              <li><span>10:00</span></li>
              <li><span>10:30</span></li>
              <li><span>11:00</span></li>
              <li><span>11:30</span></li>
              <li><span>12:00</span></li>
              <li><span>12:30</span></li>
              <li><span>13:00</span></li>
              <li><span>13:30</span></li>
              <li><span>14:00</span></li>
              <li><span>14:30</span></li>
              <li><span>15:00</span></li>
              <li><span>15:30</span></li>
              <li><span>16:00</span></li>
              <li><span>16:30</span></li>
              <li><span>17:00</span></li>
              <li><span>17:30</span></li>
              <li><span>18:00</span></li>
            </ul>
          </div> <!-- .timeline -->

          <!-- js -->
          <div class="events">
            <ul>
              <li class="events-group" id="mon">
                <div class="top-info"><span></span></div>
                <ul>
                </ul>
              </li>

              <li class="events-group" id="tue">
                <div class="top-info"><span></span></div>
                <ul>
                </ul>
              </li>

              <li class="events-group" id="wed">
                <div class="top-info"><span></span></div>
                <ul>
                </ul>
              </li>

              <li class="events-group" id="thurs">
                <div class="top-info"><span></span></div>
                <ul>
                </ul>
              </li>

              <li class="events-group" id="fri">
                <div class="top-info"><span></span></div>
                <ul>
                </ul>
              </li>
            </ul>
          </div>
          <!-- fim js -->

          <div class="event-modal">
            <header class="header">
              <div class="content">
                <span class="event-date"></span>
                <h3 class="event-name"></h3>
              </div>

              <div class="header-bg"></div>
            </header>

            <div class="body">
              <div class="event-info"></div>
              <div class="body-bg"></div>
            </div>

            <a href="#0" class="close">Close</a>
          </div>

          <div class="cover-layer"></div>
      </div>
    </div>
  </div>
</section>
