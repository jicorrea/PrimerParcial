<?php
class voto
{

  public $idVoto;
  public $dni;
  public $provincia;
  public $candidato;
  public $sexo;


 
  
   public static function TraerVotos()
   {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("select * from votos");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "voto"); 

   }
  public function InsertarVoto()
     {
                $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                $consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO votos (dni,provincia,candidato,sexo)values(:dni, :provincia, :candidato, :sexo)");
                $consulta->bindValue(':dni',$this->dni, PDO::PARAM_INT);
                $consulta->bindValue(':provincia', $this->provincia, PDO::PARAM_STR);
                $consulta->bindValue(':candidato', $this->candidato, PDO::PARAM_STR);
                $consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);

                $consulta->execute();       
                return $objetoAccesoDato->RetornarUltimoIdInsertado();
     }
     public static function validarDni($idVotor)
     {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("SELECT * from votos where idVoto= :idVoto");
    $consulta->bindValue(':idVoto', $idVotor, PDO::PARAM_INT);
    $consulta->execute();
    $provBuscado= $consulta->fetchObject('voto');
    return $provBuscado;
     }
   

   public function ModificarVoto()
   {
      $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
      $consulta =$objetoAccesoDato->RetornarConsulta("UPDATE votos set dni= :dni,provincia= :provincia,candidato= :candidato, sexo= :sexo WHERE id= :idVoto");
      $consulta->bindValue(':idVoto',$this->idVoto, PDO::PARAM_INT);
      $consulta->bindvalue(':dni',$this->$dni,PDO::PARAM_INT);
      $consulta->bindValue(':provincia',$this->provincia, PDO::PARAM_STR);
      $consulta->bindValue(':candidato', $this->candidato, PDO::PARAM_STR);
      $consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
      return $consulta->execute();
   }

}

?>