<style>
.form-color {
    outline: none;
    background: none;
    width: 38px;
    height: 38px;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    margin-right: 10px;
}
  #colorPickerRGB {
    outline: none;
    background: none;
    width: 38px;
    height: 38px;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    margin-right: 10px;
  }

  #rgbInputs {
    display: flex;
    align-items: center;
  }

  .rgbInput {
    width: 70px;
    margin-right: 10px;
    text-align: center;
  }

  #colorPreview {
    width: 50px;
    height: 50px;
    margin-top: 10px;
    border: 1px solid #ccc;
  }
</style>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph text-success"></i>
                </div>
                <div>
                    Sobre a sua Instituição
                    <div class="page-title-subheading">Altere as informações da sua instituição aqui!</div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Example Tooltip"
                    data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                    <i class="fa fa-star"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-business-time fa-w-20"></i>
                        </span>
                        Buttons
                    </button>
                    <div tabindex="-1"  role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-inbox"></i>
                                    <span> Inbox</span>
                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-book"></i>
                                    <span> Book</span>
                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-picture"></i>
                                    <span> Picture</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a disabled class="nav-link disabled">
                                    <i class="nav-link-icon lnr-file-empty"></i>
                                    <span> File Disabled</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Sobre a Instituição</h5>
                    <form action="<?php echo INCLUDE_PATH_ADMIN; ?>back-end/update.php" method="post">
                        <div class="position-relative row form-group">
                            <label for="nome" class="col-sm-2 col-form-label">Nome da sua Instituição *</label>
                            <div class="col-sm-10">
                                <input name="nome" id="nome"
                                    type="text" class="form-control" value="<?php echo $nome; ?>">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="title" class="col-sm-2 col-form-label">Texto do Título da Página</label>
                            <div class="col-sm-10">
                                <input name="title" id="title"
                                    type="text" class="form-control" value="<?php echo $title; ?>">
                                <small class="form-text text-muted">
                                    Será mostrado na aba do seu navegador e na página do Google.
                                </small>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="descricao" class="col-sm-2 col-form-label">Descrição da Instituição</label>
                            <div class="col-sm-10">
                                <textarea name="descricao" id="descricao" class="form-control"><?php echo $descricao; ?></textarea>
                                <small class="form-text text-muted">
                                    Preencha o campo com uma breve descrição sobre sua instituição. Esta informação ficará disponível no canto inferior direito do checkout.
                                </small>
                            </div>
                        </div>
                        <button type="submit" name="btnUpdAbout" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Logo</h5>
                    <form action="<?php echo INCLUDE_PATH_ADMIN; ?>back-end/update.php" method="post" enctype="multipart/form-data">
                        <div class="position-relative row form-group">
                            <label for="input0" class="col-sm-2 col-form-label">Logo da sua Instituição *</label>
                            <div class="col-sm-10">
                                <input type="file" name="logo" id="input0" class="imagemInput"
                                    accept=".jpg, .jpeg, .png" value="<?php echo $logo; ?>">
                                    
                                <small class="form-text text-muted">
                                    Essa será a logo mostrada no header do checkout.
                                </small>
                                
                                <label for="input0" id="card-img" style="max-width: 300px; margin-top: 1rem; padding: 1.5rem; border: 1px dashed #afb2d2; border-radius: .5rem; background: #dfdfdf;">
                                    <img id="imagemPreview0" src="<?php echo INCLUDE_PATH . 'assets/img/' . $logo; ?>" alt="Miniatura da Imagem" style="width: 100%;">
                                </label>
                            </div>
                        </div>
                        <button type="submit" name="btnUpdLogo" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Cores</h5>
                    <form action="<?php echo INCLUDE_PATH_ADMIN; ?>back-end/update.php" method="post" enctype="multipart/form-data">
                        <div class="position-relative row form-group">
                            <label for="colorCode" class="col-sm-2 col-form-label">Cor dos Botões *</label>
                            <div class="col-sm-10 d-flex">
                                <input type="color" id="colorPicker" class="form-color" value="<?php echo $color; ?>">
                                <input type="text" id="colorCode" name="color" class="form-control" placeholder="Digite o código hexadecimal da cor" value="<?php echo $color; ?>">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="hoverCode" class="col-sm-2 col-form-label">Hover *</label>
                            <div class="col-sm-10 d-flex">
                                <input type="color" id="hoverPicker" class="form-color" value="<?php echo $hover; ?>">
                                <input type="text" id="hoverCode" name="hover" class="form-control" placeholder="Digite o código hexadecimal da cor" value="<?php echo $hover; ?>">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="hoverCode" class="col-sm-2 col-form-label">Cor do botão carregar *</label>
                            <div class="col-sm-10 d-flex">
                                    <?php
                                        $numbersArray = explode(", ", $progress);

                                        if (count($numbersArray) === 3) {
                                            list($red, $green, $blue) = $numbersArray;
                                        }

                                        // Função para converter um valor decimal em hexadecimal
                                        function decimalToHex($decimalValue) {
                                            // Converte o valor decimal para hexadecimal e adiciona um zero à esquerda se necessário
                                            return str_pad(dechex($decimalValue), 2, '0', STR_PAD_LEFT);
                                        }

                                        // Converte os valores RGB em códigos hexadecimais
                                        $hexRed = decimalToHex($red);
                                        $hexGreen = decimalToHex($green);
                                        $hexBlue = decimalToHex($blue);

                                        // Combina os códigos hexadecimais e adiciona o prefixo '#'
                                        $hexColorCode = "#" . $hexRed . $hexGreen . $hexBlue;
                                    ?>
                                <input type="color" id="colorPickerRGB" value="<?php echo $hexColorCode; ?>">
                                <div id="rgbInputs">
                                    <input type="number" name="red" class="form-control rgbInput" id="red" min="0" max="255" value="<?php echo $red; ?>">
                                    <input type="number" name="green" class="form-control rgbInput" id="green" min="0" max="255" value="<?php echo $green; ?>">
                                    <input type="number" name="blue" class="form-control rgbInput" id="blue" min="0" max="255" value="<?php echo $blue; ?>">
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="btnUpdColor" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Adicionar Imagem</h5>
                    <form action="<?php echo INCLUDE_PATH_ADMIN; ?>back-end/imagens.php" method="post" enctype="multipart/form-data">
                        <?php 
                            if(isset($_SESSION['msgaddcad'])){
                                echo $_SESSION['msgaddcad'];
                                unset($_SESSION['msgaddcad']);
                            }
                        ?>
                        <?php
                            // Nome da tabela para a busca
                            $tabela = 'tb_imagens';
                            
                            // Preparando a consulta SQL
                            $stmt = $conn->prepare("SELECT * FROM $tabela ORDER BY id DESC");
                            
                            // Executando a consulta
                            $stmt->execute();
                            
                            // Obtendo os resultados da busca
                            $imagens = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            // Consulta SQL para recuperar informações das tabelas
                            $sql = "SELECT COUNT(id) FROM $tabela";
                            $stmt = $conn->query($sql);
                            
                            // Obter o número de linhas
                            $numLinhas = $stmt->fetchColumn();
                            $novaLinha = $numLinhas + 1;
                            
                            // Loop através dos resultados e exibir todas as colunas
                            if ($numLinhas < 4) {
                                echo '
                                    <div class="position-relative row form-group">
                                        <label for="input' . $novaLinha . '" class="col-sm-2 col-form-label">Imagem *</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="imagem" id="input' . $novaLinha . '" class="imagemInput"
                                                accept=".jpg, .jpeg, .png">
                                                
                                            <small class="form-text text-muted">
                                                Essa imagem será mostrada no checkout.
                                            </small>
                                            <small class="form-text text-muted">
                                                Imagem em .jpg com 500px x 160px.
                                            </small>
                                            
                                            <label for="input' . $novaLinha . '" id="card-img" style="max-width: 300px; margin-top: 1rem; padding: 1.5rem; border: 1px dashed #afb2d2; border-radius: .5rem; background: #dfdfdf;">
                                                <img id="imagemPreview' . $novaLinha . '" alt="Miniatura da Imagem" style="width: 100%;">
                                            </label>
                                        </div>
                                    </div>
                                ';
                            } else {
                                echo 'Só é possível adicionar até 4 imagens!';
                            }
                        ?>
                        <div class="divider"></div>
                        <button type="<?php echo ($numLinhas < 4) ? 'submit' : 'button'; ?>" name="btnAddCard" class="btn <?php echo ($numLinhas < 4) ? 'btn-primary' : 'btn-secondary'; ?>">Adicionar</button>
                    </form>
                </div>
            </div>
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Recompensas já existentes</h5>
                        <?php 
                            if(isset($_SESSION['msgupdcad'])){
                                echo $_SESSION['msgupdcad'];
                                unset($_SESSION['msgupdcad']);
                            }
                        ?>
                        <?php
                            // Nome da tabela para a busca
                            $tabela = 'tb_imagens';
                            
                            // Consulta SQL para recuperar informações das tabelas
                            $sql = "SELECT COUNT(id) FROM $tabela";
                            $stmt = $conn->query($sql);
                            
                            // Obter o número de linhas
                            $numLinhas = $stmt->fetchColumn();
                            
                            // Consulta SQL para selecionar todas as colunas
                            $sql = "SELECT * FROM $tabela ORDER BY id DESC";
                            
                            // Preparar e executar a consulta
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            
                            // Recuperar os resultados
                            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            
                            // Loop através dos resultados e exibir todas as colunas
                            foreach ($resultados as $usuario) {
                                echo '
                                    <form action="' . INCLUDE_PATH_ADMIN . 'back-end/imagens.php" method="post" enctype="multipart/form-data">
                                        <div class="position-relative row form-group">

                                            <label for="input' . $usuario['id'] . '" class="col-sm-2 col-form-label">Imagem *</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="imagem" id="input' . $usuario['id'] . '" class="imagemInput"
                                                    accept=".jpg, .jpeg, .png" value="' . $usuario['imagem'] . '">
                                                    
                                                <small class="form-text text-muted">
                                                    Imagem em .jpg com 500px x 160px.
                                                </small>
                                                
                                                <label for="input' . $usuario['id'] . '" id="card-img" style="max-width: 300px; margin-top: 1rem; padding: 1.5rem; border: 1px dashed #afb2d2; border-radius: .5rem; background: #dfdfdf;">
                                                    <img id="imagemPreview' . $usuario['id'] . '" src="' . INCLUDE_PATH . 'assets/img/' . $usuario['imagem'] . '" alt="Miniatura da Imagem" style="width: 100%;">
                                                </label>
                                            </div>

                                            <div class="col-sm-12 float-right">
                                                <input type="hidden" name="ids[]" value="' . $usuario['id'] . '">
                                                <button type="submit" name="btnUpdCard" class="btn btn-primary">Editar</button>
                                                <a href="' . INCLUDE_PATH_ADMIN . 'back-end/apagar-imagem.php?id=' . $usuario['id'] . '" class="btn btn-outline-danger">Deletar</a>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                    </form>
                                ';
                            }
                        ?>
                </div>
            </div>
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Rodapé</h5>
                    <form action="<?php echo INCLUDE_PATH_ADMIN; ?>back-end/update.php" method="post">
                        <div class="position-relative row form-group">
                            <label for="privacidade" class="col-sm-2 col-form-label">Privacidade dos Doadores</label>
                            <div class="col-sm-10">
                                <input name="privacidade" id="privacidade"
                                    type="text" class="form-control" value="<?php echo $privacidade; ?>">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="faq" class="col-sm-2 col-form-label">Perguntas Frequentes</label>
                            <div class="col-sm-10">
                                <input name="faq" id="faq"
                                    type="text" class="form-control" value="<?php echo $faq; ?>">
                            </div>
                        </div>

                        <p class="card-title">Links</p>
                        <div class="position-relative row form-group">
                            <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                            <div class="col-sm-10">
                                <input name="facebook" id="facebook"
                                    type="text" class="form-control" value="<?php echo $facebook; ?>" <?php echo ($facebook == '') ? 'disabled' : '';?>>
                                    
                                <small class="form-text text-muted">
                                    <input type="checkbox" name="dFacebook" id="dFacebook" data-input-id="facebook" <?php echo ($facebook == '') ? 'checked' : '';?>>
                                    <label for="dFacebook" class="mb-0">Desabilitar Facebook</label>
                                </small>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                            <div class="col-sm-10">
                                <input name="instagram" id="instagram"
                                    type="text" class="form-control" value="<?php echo $instagram; ?>" <?php echo ($instagram == '') ? 'disabled' : '';?>>
                                    
                                <small class="form-text text-muted">
                                    <input type="checkbox" name="dInstagram" id="dInstagram" data-input-id="instagram" <?php echo ($instagram == '') ? 'checked' : '';?>>
                                    <label for="dInstagram" class="mb-0">Desabilitar Instagram</label>
                                </small>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="linkedin" class="col-sm-2 col-form-label">LinkedIn</label>
                            <div class="col-sm-10">
                                <input name="linkedin" id="linkedin"
                                    type="text" class="form-control" value="<?php echo $linkedin; ?>" <?php echo ($linkedin == '') ? 'disabled' : '';?>>
                                    
                                <small class="form-text text-muted">
                                    <input type="checkbox" name="dLinkedin" id="dLinkedin" data-input-id="linkedin" <?php echo ($linkedin == '') ? 'checked' : '';?>>
                                    <label for="dLinkedin" class="mb-0">Desabilitar LinkedIn</label>
                                </small>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="youtube" class="col-sm-2 col-form-label">YouTube</label>
                            <div class="col-sm-10">
                                <input name="youtube" id="youtube"
                                    type="text" class="form-control" value="<?php echo $youtube; ?>" <?php echo ($youtube == '') ? 'disabled' : '';?>>
                                    
                                <small class="form-text text-muted">
                                    <input type="checkbox" name="dYoutube" id="dYoutube" data-input-id="youtube" <?php echo ($youtube == '') ? 'checked' : '';?>>
                                    <label for="dYoutube" class="mb-0">Desabilitar YouTube</label>
                                </small>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="website" class="col-sm-2 col-form-label">Website</label>
                            <div class="col-sm-10">
                                <input name="website" id="website"
                                    type="text" class="form-control" value="<?php echo $website; ?>" <?php echo ($website == '') ? 'disabled' : '';?>>
                                    
                                <small class="form-text text-muted">
                                    <input type="checkbox" name="dWebsite" id="dWebsite" data-input-id="website" <?php echo ($website == '') ? 'checked' : '';?>>
                                    <label for="dWebsite" class="mb-0">Desabilitar Website</label>
                                </small>
                            </div>
                        </div>

                        <p class="card-title">Contato</p>
                        <div class="position-relative row form-group">
                            <label for="telefone" class="col-sm-2 col-form-label">Telefone</label>
                            <div class="col-sm-10">
                                <input name="telefone" id="telefone"
                                    type="text" class="form-control" value="<?php echo $telefone; ?>">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input name="email" id="email"
                                    type="text" class="form-control" value="<?php echo $email; ?>">
                            </div>
                        </div>

                        <p class="card-title">Endereço</p>
                        <div class="position-relative row form-group">
                            <label for="cep" class="col-sm-2 col-form-label">CEP</label>
                            <div class="col-sm-10">
                                <input name="cep" id="cep" onblur="getCepData()"
                                    type="text" class="form-control" value="<?php echo $cep; ?>">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="rua" class="col-sm-2 col-form-label">Rua</label>
                            <div class="col-sm-10">
                                <input name="rua" id="rua"
                                    type="text" class="form-control" value="<?php echo $rua; ?>">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="numero" class="col-sm-2 col-form-label">Número</label>
                            <div class="col-sm-10">
                                <input name="numero" id="numero"
                                    type="text" class="form-control" value="<?php echo $numero; ?>" <?php echo ($numero == '') ? 'disabled' : '';?>>
                                    
                                <small class="form-text text-muted">
                                    <input type="checkbox" name="dNumero" id="dNumero" data-input-id="numero" <?php echo ($numero == '') ? 'checked' : '';?>>
                                    <label for="dNumero" class="mb-0">Sem Número</label>
                                </small>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="bairro" class="col-sm-2 col-form-label">Bairro</label>
                            <div class="col-sm-10">
                                <input name="bairro" id="bairro"
                                    type="text" class="form-control" value="<?php echo $bairro; ?>">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="cidade" class="col-sm-2 col-form-label">Cidade</label>
                            <div class="col-sm-10">
                                <input name="cidade" id="cidade"
                                    type="text" class="form-control" value="<?php echo $cidade; ?>">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                            <div class="col-sm-10">
                                <input name="estado" id="estado"
                                    type="text" class="form-control" value="<?php echo $estado; ?>">
                            </div>
                        </div>
                        <button type="submit" name="btnUpdFooter" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const checkboxes = document.querySelectorAll('[name^="d"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const inputId = this.getAttribute('data-input-id');
            const input = document.getElementById(inputId);
            
            if (this.checked) {
                input.disabled = true;
            } else {
                input.disabled = false;
            }
        });
    });
</script>
<script>
    
function getCepData()
{
    let cep = $('#cep').val();
    cep = cep.replace(/\D/g, "");
    if(cep.length<8)
    {
        $("#div-errors-price").html("CEP deve conter no mínimo 8 dígitos").slideDown('fast').effect( "shake" );
        $("#cep").addClass('is-invalid').focus();
        return;
    }
    $("#cep").removeClass('is-invalid');
    $("#div-errors-price").slideUp('fast');


    if(cep != "")
    {
        $("#rua").val("Carregando...");
        $("#bairro").val("Carregando...");
        $("#cidade").val("Carregando...");
        $("#estado").val("...");
        $.getJSON( "https://viacep.com.br/ws/"+cep+"/json/", function( data )
        {
            $("#rua").val(data.logradouro);
            $("#bairro").val(data.bairro);
            $("#cidade").val(data.localidade);
            $("#estado").val(data.uf);
            $("#numero").focus();
        }).fail(function()
        {
            $("#rua").val("");
            $("#bairro").val("");
            $("#cidade").val("");
            $("#estado").val(" ");
        });
    }
}
</script>
<script>
    const colorPicker = document.getElementById('colorPicker');
    const colorCodeInput = document.getElementById('colorCode');

    colorPicker.addEventListener('input', updateColorPreview);
    colorCodeInput.addEventListener('input', updateColorFromCode);

    function updateColorPreview(event) {
        const selectedColor = event.target.value;
        colorCodeInput.value = selectedColor;
    }

    function updateColorFromCode() {
        const colorCode = colorCodeInput.value;
        if (isValidHexColorCode(colorCode)) {
            colorPicker.value = colorCode;
        }
    }

    function isValidHexColorCode(code) {
        return /^#([0-9A-F]{3}){1,2}$/i.test(code);
    }
</script>
<script>
    const hoverPicker = document.getElementById('hoverPicker');
    const hoverCodeInput = document.getElementById('hoverCode');

    hoverPicker.addEventListener('input', updateHoverPreview);
    hoverCodeInput.addEventListener('input', updateHoverFromCode);

    function updateHoverPreview(event) {
        const selectedHover = event.target.value;
        hoverCodeInput.value = selectedHover;
    }

    function updateHoverFromCode() {
        const hoverCode = hoverCodeInput.value;
        if (isValidHexHoverCode(hoverCode)) {
            hoverPicker.value = hoverCode;
        }
    }

    function isValidHexHoverCode(code) {
        return /^#([0-9A-F]{3}){1,2}$/i.test(code);
    }
</script>
<script>
    const colorPickerRGB = document.getElementById('colorPickerRGB');
    const redInput = document.getElementById('red');
    const greenInput = document.getElementById('green');
    const blueInput = document.getElementById('blue');

    colorPickerRGB.addEventListener('input', updateColorFromPicker);
    redInput.addEventListener('input', updateColorFromRGBInputs);
    greenInput.addEventListener('input', updateColorFromRGBInputs);
    blueInput.addEventListener('input', updateColorFromRGBInputs);

    function updateColorFromPicker(event) {
      const selectedColor = event.target.value;
      const rgbValues = hexToRGB(selectedColor);
      redInput.value = rgbValues.r;
      greenInput.value = rgbValues.g;
      blueInput.value = rgbValues.b;
      updateColorPreview();
    }

    function updateColorFromRGBInputs() {
      const redValue = parseInt(redInput.value);
      const greenValue = parseInt(greenInput.value);
      const blueValue = parseInt(blueInput.value);
      const hexColor = RGBToHex(redValue, greenValue, blueValue);
      colorPickerRGB.value = hexColor;
      updateColorPreview();
    }

    function updateColorPreview() {
      const hexColor = RGBToHex(parseInt(redInput.value), parseInt(greenInput.value), parseInt(blueInput.value));
    }

    function hexToRGB(hex) {
      const bigint = parseInt(hex.slice(1), 16);
      const r = (bigint >> 16) & 255;
      const g = (bigint >> 8) & 255;
      const b = bigint & 255;
      return { r, g, b };
    }

    function RGBToHex(r, g, b) {
      return `#${(1 << 24 | r << 16 | g << 8 | b).toString(16).slice(1)}`;
    }
  </script>