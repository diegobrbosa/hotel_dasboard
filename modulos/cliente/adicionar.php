 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Cadastro de Clientes</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Formulário Cadastro -->
    <div class="container">
 <form role="form" action="#" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control"  placeholder="Insira o Nome Completo">
                  </div>
                  <div class="form-group">
                    <label>CPF</label>
                    <input type="text" class="form-control" name="CPF" id="CPF" placeholder="Insira o CPF">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control"  placeholder="Insira o E-mail">
                  </div>
                  <div class="form-group">
                    <label>Celular</label>
                    <input type="tel"   class="form-control" name="celular" id="celular" placeholder="Insira o Celular">
                  </div>
                  <div class="form-group">
                    <label>Data de Nascimento</label>
                    <input type="text" class="form-control" name="dtnascimento" id="dtnascimento" placeholder="Insira a Data de Nascimento">
                  </div>

                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                  <button type="reset" class="btn btn-danger ">Limpar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        <!-- Main row -->
         </div>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<script>
  //Mascaras
$(document).ready(function(){
  $('#CPF').mask('999.999.999-99');
  $('#celular').mask('(00) 00000-0000');
  //$('#RG').mask('000000');
  $('#dtnascimento').mask("00/00/0000", {dtnascimento: true});

});

</script>
