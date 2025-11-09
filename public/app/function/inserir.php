<?php
// require_once '../function/manipularDados.php';

// if($_SERVER['REQUEST_METHOD'] == 'POST'){

//     if($_POST['idForm'] == 'voluntarios'){
//        /**Receber os dados */
//        $nome = $_POST['nome'];
//        $email = $_POST['email'];
//        $senha = $_POST['senha'];

//        $tabela = 'voluntario';
//        $campos = "nome, email, senha";
//        $valores = "'$nome', '$email', '$senha'";
//        $campoId = "email";
//        $valorId = "'$email'";
//        if(empty($nome) || empty($email) || empty($senha)){
//          echo "
//          <div class='alert alert-danger mt-3'>
//            <p class='lead text-center text-bg-black'>Preencha os campos!</p>
//          </div>";
//        }else if(seExiste($tabela, $campoId, $valorId) == 1){
//          echo "
//          <div class='alert alert-danger mt-3'>
//            <p class='lead text-center text-bg-black'>O usuário já existe!</p>
//          </div>";
//        }
//        else{
//          echo "
//          <div class='alert alert-info mt-3'>
//            <p class='lead text-center text-bg-black'>"
//              .inserir($tabela, $campos, $valores).
//            "</p>
//          </div>";
//        }  
//    }


//     if($_POST['idForm'] == 'cidade'){
//         $nome = $_POST['nome'];
//         $id = $_POST['idEstado'];

//         $tabela = 'cidade';
//         $campos = "nomeCidade, idEstado";
//         $valores = "'$nome', '$id'";

//         if(empty($nome) || empty($id)){
//           echo "
//           <div class='alert alert-danger mt-3'>
//             <p class='lead text-center text-bg-black'>Preencha os campos!</p>
//           </div>";
//         }else{
//           try {
//             $sql = "SELECT nomeCidade FROM cidade WHERE nomeCidade = '$nome' AND idEstado = '$id'";
//             if(!$conn = conexao()){
//               echo "Erro ao conectar para verificar a existência de cidade!";
//               return null;
//             }
//             $query = mysqli_query($conn, $sql);
//             $resultado = mysqli_num_rows($query);
//             if($resultado == 1){
//               echo "
//               <div class='alert alert-danger mt-3'>
//                 <p class='lead text-center text-bg-black'>A cidade já está cadastrada!</p>
//               </div>";
//             }else{
//               echo "
//               <div class='alert alert-info mt-3'>
//                 <p class='lead text-center text-bg-black'>"
//                   .inserir($tabela, $campos, $valores).
//                 "</p>
//               </div>";
//             }
//           } catch (Exception $e) {
//             echo "
//             <div class='alert alert-warning mt-3'>
//                 <p class='lead text-center text-bg-black'>Erro de SQL:" . $e->getMessage()."</p>
//               </div>"
//              ;
//           }
//         }
//     }

//     if($_POST['idForm'] == 'usuario'){
//         /**Receber os dados */
//         $nome = $_POST['nome'];
//         $email = $_POST['email'];
//         $senha = $_POST['senha'];

//         $tabela = 'usuarios';
//         $campos = "nome, email, senha";
//         $valores = "'$nome', '$email', '$senha'";
//         $campoId = "email";
//         $valorId = "'$email'";
//         if(empty($nome) || empty($email) || empty($senha)){
//           echo "
//           <div class='alert alert-danger mt-3'>
//             <p class='lead text-center text-bg-black'>Preencha os campos!</p>
//           </div>";
//         }else if(seExiste($tabela, $campoId, $valorId) == 1){
//           echo "
//           <div class='alert alert-danger mt-3'>
//             <p class='lead text-center text-bg-black'>O usuário já existe!</p>
//           </div>";
//         }
//         else{
//           echo "
//           <div class='alert alert-info mt-3'>
//             <p class='lead text-center text-bg-black'>"
//               .inserir($tabela, $campos, $valores).
//             "</p>
//           </div>";
//         }  
//     }
// }