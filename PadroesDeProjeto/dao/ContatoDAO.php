<?php

require_once (__DIR__ . '/../config/Database.php');
require_once(__DIR__ . '/../model/Contato.php');

class ContatoDAO {

    public function adicionarContato(Database $conexao, Contato $contato) {
        $query = "INSERT INTO contato (nomeContato, telefoneContato, emailContato)
        VALUES ('" . $contato->getNome()                  . "',
                '" . $contato->getFone()                 . "',
                '" . $contato->getEmail()                  . "')";

                if(mysqli_query($conexao->conecta(), $query) == TRUE){
                    header("Location: ../view/index.php");
                }else{
                    throw new Exception('Ops... Algo deu errado: ' . mysqli_error($conexao->conecta()));
                }
    }

    public function exibirContatos(Database $conexao){
        $query = "SELECT * FROM contato";
        $contatos = mysqli_query($conexao->conecta(), $query);
        if(mysqli_num_rows($contatos) > 0)
        {   
         
            while($row = mysqli_fetch_assoc($contatos))
            {
                echo "
                <tbody>
                <tr>
                    <td>"   .   $row["idContato"]       .   "</td>
                    <td>"   .   $row["nomeContato"]     .   "</td>
                    <td>"   .   $row["telefoneContato"] .   "</td>      
                    <td>"   .   $row["emailContato"]    .   "</td>
                    <td class='td-out'>
                    
                    <a style='display:hidden' href='UpdateContato.php?id=" . $row["idContato"] . "''> 
                        <button class='btn-modal' type='button' id='btn-editar'>
                                Editar
                        </button>
                    </a>

                    <a style='display:hidden' href='DeleteContato.php?id=" . $row["idContato"] . "''>
                        <button class='btn-modal' type='button' id='btn-excluir'>
                                Excluir
                        </button>
                    </a>        
                    
                    </td>
                </tr>
                
                <?php } ?>
                </tbody>";  
            } 
        }
    }

    public function buscarContatoPorId($conexao, $id)
    {
        $query = "SELECT * FROM contato WHERE idContato = " . $id;
        $resultado = mysqli_query($conexao->conecta(), $query);

        if ($resultado && mysqli_num_rows($resultado) > 0) {

            $row = mysqli_fetch_assoc($resultado);

            $contato = new Contato();
            $contato->setNome($row['nomeContato']);
            $contato->setFone($row['telefoneContato']);
            $contato->setEmail($row['emailContato']);

            return $contato;
        } else {
            return null;
        }
    }

    public function updateContato(Database $conexao, Contato $contato, $idContato) {
        $query = "UPDATE contato SET 
            nomeContato     = '" . $contato->getNome()  . "',
            telefoneContato = '" . $contato->getFone()  . "',
            emailContato    = '" . $contato->getEmail() . "'
            WHERE idContato = "  . $idContato;
    
        if(mysqli_query($conexao->conecta(), $query) == TRUE){
            header("Location: ../view/index.php");
        }else{
            throw new Exception('Ops... Algo deu errado: ' . mysqli_error($conexao->conecta()));
        }
    }

    public function excluirContato(Database $conexao, $idContato){

        $query = "DELETE FROM contato WHERE idContato = $idContato";
    
        if(mysqli_query($conexao->conecta(), $query) == TRUE){
            header("Location: ../view/index.php");
        }else{
            throw new Exception('Ops... Algo deu errado: ' . mysqli_error($conexao->conecta()));
        }
    }
    
    
}

