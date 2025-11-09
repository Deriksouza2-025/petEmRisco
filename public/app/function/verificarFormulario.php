<?php 
function verificarFormulario(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // if($_POST['form'] == 'cadVoluntario'){
        //     require_once '../function/cadastrarVoluntario.php';
        //     cadastrarVoluntario();
        // }
        if($_POST['form'] == 'cadAdmin'){
            require_once '../function/cadastrarCidade.php';
            cadastrarCidade();
        }
        if($_POST['form'] == 'cadUsuario'){
            require_once '../function/cadastrarUsuario.php';
            cadastrarUsuario();
        }
        // if($_POST['form'] == 'cadDate'){
        //     require_once '../function/dateHour.php';
        //     cadDateHour();
        // }
        // if($_POST['form'] == 'cadMensagem'){
        //     require_once '../function/message.php';
        //     message();
        // }
        if($_POST['form'] == 'cadAgendamento'){
            require_once '../function/agenda.php';
            agenda();
        }
        if($_POST['form'] == 'upAgenda'){
            require_once '../function/updateAgenda.php';
            // updateCidade();
        }
        if($_POST['form'] == 'upUsuario'){
            require_once '../function/updateUsuario.php';
            // updateUsuario();
        }
    }
}
?>