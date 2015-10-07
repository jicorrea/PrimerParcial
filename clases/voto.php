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
                $consulta =$objetoAccesoDato->RetornarConsulta("INSERT into votos (dni,provincia,candidato,sexo)values(:dni,:provincia,:candidato,:sexo");
                $consulta->bindValue(':dni',$this->dni, PDO::PARAM_INT);
                $consulta->bindValue(':provincia', $this->provincia, PDO::PARAM_STR);
                $consulta->bindValue(':candidato', $this->candidato, PDO::PARAM_STR);
                $consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);

                $consulta->execute();       
                return $objetoAccesoDato->RetornarUltimoIdInsertado();
     }
     public function validarDni($dni)
     {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("select * from votos where dni=$dni");
            $consulta->execute();         

     }
   
}

?>