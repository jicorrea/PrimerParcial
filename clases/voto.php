<?php
class voto
{

  public $idVoto;
  public $dni;
  public $provincia;
  public $localidad;
  public $direccion;
  public $candidato;
  public $sexo;


 
  
   public static function TraerVotos()
   {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerVotos()");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "voto"); 

   }
  public function InsertarVoto()
     {
                $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                $consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO votos (dni,provincia,localidad,direccion,candidato,sexo)values(:dni, :provincia, :localidad, :direccion, :candidato, :sexo)");
                $consulta->bindValue(':dni',$this->dni, PDO::PARAM_INT);
                $consulta->bindValue(':provincia', $this->provincia, PDO::PARAM_STR);
                                $consulta->bindValue(':localidad', $this->localidad, PDO::PARAM_STR);
                                $consulta->bindValue(':direccion', $this->direccion, PDO::PARAM_STR);
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
   
     public static function eliminarVoto($idVotor)
     {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("DELETE from votos where idVoto= :idVoto");
    $consulta->bindValue(':idVoto', $idVotor, PDO::PARAM_INT);
    $consulta->execute();
    //$provBuscado= $consulta->fetchObject('voto');
   // return $provBuscado;
     }

   public function ModificarVoto()
   {
      $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
      $consulta =$objetoAccesoDato->RetornarConsulta("UPDATE votos set provincia= :provincia, localidad= :localidad, direccion= :direccion,candidato= :candidato, sexo= :sexo WHERE idVoto= :idVoto");
      $consulta->bindValue(':idVoto',$this->idVoto, PDO::PARAM_INT);
    //  $consulta->bindvalue(':dni',$this->$dni,PDO::PARAM_INT);
      $consulta->bindValue(':provincia',$this->provincia, PDO::PARAM_STR);
                                $consulta->bindValue(':localidad', $this->localidad, PDO::PARAM_STR);
                                $consulta->bindValue(':direccion', $this->direccion, PDO::PARAM_STR);      
      $consulta->bindValue(':candidato', $this->candidato, PDO::PARAM_STR);
      $consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
      return $consulta->execute();
   }

}

?>