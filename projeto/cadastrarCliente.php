<?php
    include("menu.php");
    include("topo.php");
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Cadastro de Novos Clientes</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
              <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" for="first-name"><p class=" text-center"><u>Dados do Cliente</u></p>
                        </label>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nome <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Endereço <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                      <div class="form-group text-center">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Bairro <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">CEP
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="number" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>  

                      <div class="form-group text-center">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Cidade <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Estado <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                      <div class="form-group text-center">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">CGC / CPF<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="number" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Inscriçao Estadual <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="number" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>  

                      <div class="form-group text-center">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Telefone<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="number" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Fax
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="number" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">E-mail
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                      <br/>
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" for="first-name"><p class=" text-center"><u>Dados Contato Principal</u></p>
                        </label>
                      </div>

                      <div class="form-group text-center">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nome <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Telefone
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="number" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>  

                      <br/>
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" for="first-name"><p class=" text-center"><u>Dados Taxas Financeiras</u></p>
                        </label>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Taxa de Juros ao mês<span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="number" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Taxa de Administração <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="number" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="first-name">Taxa para Parcelamento <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="number" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-9">
						              <button class="btn btn-warning" type="reset">Limpar Campos</button>
                          <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php
    include("rodape.php");
?>