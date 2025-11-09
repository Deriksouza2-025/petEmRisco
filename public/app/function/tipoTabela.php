<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['form'] == 'cadVoluntario'){
        // echo "
        //       <div class='alert alert-info mt-3'>
        //         <p class='lead text-center text-bg-black'>"
        //           .inserir($tabela, $campos, $valores).
        //         "</p>
        //       </div>";
        echo
        '
        <p class="text-center mt-2 bg-secondary-subtle text-dark fw-bolder fs-3">STATUS</p>
        
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NOME</th>
                            <th scope="col">SIGLA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>'.$nome.'</td>
                            <td>'.$email.'</td>
                            <td>'.$senha.'</td>
                        </tr>
                    </tbody>
                </table>
        
                <div class="alert alert-success d-flex align-items-center h-10" role="alert">
                    <p class="fw-bold"><i class="bi bi-patch-check-fill"></i>'.inserir($tabela, $campos, $valores).'</p>
                </div>
        
                <div class="text-center">
                    <a href="?tela=form_cad_voluntario" class="btn btn-outline-secondary">Voltar</a>
                </div>
        ';
        }
        if($_POST['form'] == 'cadCidade'){
            echo
        '
        <p class="text-center mt-2 bg-secondary-subtle text-dark fw-bolder fs-3">STATUS</p>
        
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NOME</th>
                            <th scope="col">ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>'.$nome.'</td>
                            <td>'.$id.'</td>
                        </tr>
                    </tbody>
                </table>
        
                <div class="alert alert-success d-flex align-items-center h-10" role="alert">
                    <p class="fw-bold"><i class="bi bi-patch-check-fill"></i>'.inserir($tabela, $campos, $valores).'</p>
                </div>
        
                <div class="text-center">
                    <a href="?tela=form_cad_cidades" class="btn btn-outline-secondary">Voltar</a>
                </div>
                ';
        }
        if($_POST['form'] == 'cadUsuario'){
            echo
        '
        <p class="text-center mt-2 bg-secondary-subtle text-dark fw-bolder fs-3">STATUS</p>
        
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NOME</th>
                            <th scope="col">E-MAIL</th>
                            <th scope="col">SENHA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>'.$nome.'</td>
                            <td>'.$email.'</td>
                            <td>'.$senha.'</td>
                        </tr>
                    </tbody>
                </table>
        
                <div class="alert alert-success d-flex align-items-center h-10" role="alert">
                    <p class="fw-bold"><i class="bi bi-patch-check-fill"></i>'.inserir($tabela, $campos, $valores).'</p>
                </div>
        
                <div class="text-center">
                    <a href="?tela=form_cad_usuarios" class="btn btn-outline-secondary">Voltar</a>
                </div>
                ';
        }
        if($_POST['form'] == 'upEstado'){
            echo
            '
            <p class="text-center mt-2 bg-secondary-subtle text-dark fw-bolder fs-3">STATUS</p>
            
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NOME</th>
                                <th scope="col">SIGLA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>'.$nome.'</td>
                                <td>'.$sigla.'</td>
                            </tr>
                        </tbody>
                    </table>
            
                    <div class="alert alert-success d-flex align-items-center h-10" role="alert">
                        <p class="fw-bold"><i class="bi bi-patch-check-fill"></i>'.atualizar($tabela, $valor, $campoId, $valorId).'</p>
                    </div>
            
                    <div class="text-center">
                        <a href="?tela=form_search_upsStado" class="btn btn-outline-secondary">Voltar</a>
                    </div>
            ';
        }
            if($_POST['form'] == 'cadAgendamento'){
                echo
                '
                <p class="text-center mt-2 bg-secondary-subtle text-dark fw-bolder fs-3">STATUS</p>
                
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">DIA</th>
                                    <th scope="col">HORÁRIO</th>
                                    <th scope="col">NOME</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>'.$dataAgenda.'</td>
                                    <td>'.$horaInicio.'</td>
                                    <td>'.$nome.'</td>
                                </tr>
                            </tbody>
                        </table>
                
                        <div class="alert alert-success d-flex align-items-center h-10" role="alert">
                            <p class="fw-bold"><i class="bi bi-patch-check-fill"></i>'.inserir($tabela, $campos, $valores).'</p>
                        </div>
                
                        <div class="text-center">
                            <a href="?tela=agendamento" class="btn btn-outline-secondary">Voltar</a>
                        </div>
                ';
                }
        
}

?>