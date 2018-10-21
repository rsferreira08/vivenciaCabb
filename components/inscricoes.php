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
          <label class="my-1 mr-2" for="dia">Selecione o dia</label>
          <select class="custom-select my-1 mr-sm-2" id="dia" required>
              <option value="">Selecione...</option>
              <option value="18-10-2018">18/10</option>
              <option value="22-10-2018">22/10</option>
              <option value="23-10-2018">23/10</option>
              <option value="24-10-2018">24/10</option>
              <option value="25-10-2018">25/10</option>
              <option value="26-10-2018">26/10</option>
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

          <div class="events">
            <ul>
            <?php
              // TODO: Finish generic
              /* for ($i = 0; $i < floor($numeroDeEventos / $numeroTipoDeEventos); $i++) {
                echo '<li class="events-group">';
                foreach ()

                echo '</li>';
              } */
            ?>
              <li class="events-group">
                <div class="top-info"><span>22/10</span></div>

                <ul>
                  <li class="single-event" data-start="10:00" data-end="11:00" data-content="22-10-2018 10:00" data-event="event-1">
                    <a href="#0">
                      <em class="event-name mt-3">
                        <?php foreach ( $dia22turma1 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="11:15" data-end="12:15" data-content="22-10-2018 11:15" data-event="event-2">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia22turma2 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="13:30" data-end="14:30"  data-content="22-10-2018 13:30" data-event="event-3">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia22turma3 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="15:00" data-end="16:00"  data-content="22-10-2018 15:00" data-event="event-4">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia22turma4 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="events-group">
                <div class="top-info"><span>23/10</span></div>

                <ul>
                  <li class="single-event" data-start="10:00" data-end="11:00" data-content="23-10-2018 10:00" data-event="event-1">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia23turma1 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="11:15" data-end="12:15" data-content="23-10-2018 11:15" data-event="event-2">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia23turma2 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="13:30" data-end="14:30"  data-content="23-10-2018 13:30" data-event="event-3">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia23turma3 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="15:00" data-end="16:00"  data-content="23-10-2018 15:00" data-event="event-4">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia23turma4 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="events-group">
                <div class="top-info"><span>24/10</span></div>

                <ul>
                  <li class="single-event" data-start="10:00" data-end="11:00" data-content="24-10-2018 10:00" data-event="event-1">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia24turma1 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="11:15" data-end="12:15" data-content="24-10-2018 11:15" data-event="event-2">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia24turma2 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="13:30" data-end="14:30"  data-content="24-10-2018 13:30" data-event="event-3">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia24turma3 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="15:00" data-end="16:00"  data-content="24-10-2018 15:00" data-event="event-4">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia24turma4 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="events-group">
                <div class="top-info"><span>25/10</span></div>

                <ul>
                  <li class="single-event" data-start="10:00" data-end="11:00" data-content="25-10-2018 10:00" data-event="event-1">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia25turma1 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="11:15" data-end="12:15" data-content="25-10-2018 11:15" data-event="event-2">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia25turma2 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="13:30" data-end="14:30"  data-content="25-10-2018 13:30" data-event="event-3">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia25turma3 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="15:00" data-end="16:00"  data-content="25-10-2018 15:00" data-event="event-4">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia25turma4 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="events-group">
                <div class="top-info"><span>26/10</span></div>

                <ul>
                  <li class="single-event" data-start="10:00" data-end="11:00" data-content="26-10-2018 10:00" data-event="event-1">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia26turma1 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="11:15" data-end="12:15" data-content="26-10-2018 11:15" data-event="event-2">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia26turma2 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="13:30" data-end="14:30"  data-content="26-10-2018 13:30" data-event="event-3">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia26turma3 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>

                  <li class="single-event" data-start="15:00" data-end="16:00"  data-content="26-10-2018 15:00" data-event="event-4">
                    <a href="#0">
                      <em class="event-name">
                        <?php foreach ( $dia26turma4 as $turma ) { ?>
                        <img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
                        <?php } ?>
                      </em>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

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