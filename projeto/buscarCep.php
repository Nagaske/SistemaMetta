<?php
    include("menu.php");
    include("topo.php");
?>

<?php   
/* 
 *  Função de busca de Endereço pelo CEP 
 *  -   Desenvolvido Felipe Olivaes para ajaxbox.com.br 
 *  -   Utilizando WebService de CEP da republicavirtual.com.br 
 */  
function busca_cep($cep){  
    $resultado = @file_get_contents('http://republicavirtual.com.br/web_cep.php?cep='.urlencode($cep).'&formato=query_string');  
    if(!$resultado){  
        $resultado = "&resultado=0&resultado_txt=erro+ao+buscar+cep";  
    }  
    parse_str($resultado, $retorno);   
    return $retorno;  
}  
  
  
/* 
 * Exemplo de utilização  
 */  
  
//Vamos buscar o CEP 90020022  
$resultado_busca = busca_cep('37701630');  
  
  
switch($resultado_busca['resultado']){  
    case '2':  
        $texto = " 
    Cidade com logradouro único 
    <b>Cidade: </b> ".$resultado_busca['cidade']." 
    <b>UF: </b> ".$resultado_busca['uf']." 
        ";    
    break;  
      
    case '1':  
        $texto = " 
    Cidade com logradouro completo 
    <b>Tipo de Logradouro: </b> ".$resultado_busca['tipo_logradouro']." 
    <b>Logradouro: </b> ".$resultado_busca['logradouro']." 
    <b>Bairro: </b> ".$resultado_busca['bairro']." 
    <b>Cidade: </b> ".$resultado_busca['cidade']." 
    <b>UF: </b> ".$resultado_busca['uf']." 
        ";  
    break;  
      
    default:  
        $texto = "Fala ao buscar cep: ".$resultado_busca['resultado'];  
    break;  
}  
?>  

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Buttons</h3>
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
                <?php  
                  echo $texto;
                ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php
    include("rodape.php");
?>