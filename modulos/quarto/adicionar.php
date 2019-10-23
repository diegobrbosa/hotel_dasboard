<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Cadastro de de Quartos</h1>
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
                    <label>Situação</label><br>
                    <input type="radio" name="gender" value="ocupado"> Ocupado
                    <input type="radio" style="margin-left:30px" name="gender" value="Vazio"> Vazio
                    
                  </div>
                  <div class="form-group">
                    <label>Identificação</label>
                    <input type="text" class="form-control"  placeholder="Insira a Identificação">
                  </div>
                  <div class="form-group">
                    <label>Lotacão</label>
                    <input type="text" class="form-control"  placeholder="Insira a Lotação">
                  </div>
                <div class="form-group">
                  <label >Tipo de Quarto</label>
                  <select name="Tipo de Quarto" class="form-control">
                    <option value="">Selecione o Tipo de Quarto</option>
                    <option value="">Individual</option>
                    <option value="">Duplo</option>
                    <option value="">Familiar</option>
                    <option value="">Vários</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label>Descrição</label>
                    <input type="text" class="form-control"  placeholder="Insira a Descrição">
                  </div>
                  <div class="form-group">
                    <label>Valor Único em R$:</label>
                    <input type="text"   class="form-control" placeholder="Insira o Valor Único">
                  </div>

                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                  <button type="reset" class="btn btn-danger ">Limpar</button>
                </div>
              </form>
            </div>