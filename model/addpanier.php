<?php

class panier
{
    private  $idp;
    private $marquep;
    private $nomp;
    private $quantite;
    private $prixp;
    private $color1;
    private $taille1;
    

public function __construct($idp,$marquep,$nomp,$quantite,$prixp,$color1,$taille1)
{
 
    $this->idp=$idp;
    $this->marquep=$marquep;
    $this->nomp=$nomp;
    $this->quantite=$quantite;
    $this->prixp=$prixp;
    $this->color1=$color1;
    $this->taille1=$taille1;
    


}

public function setidp($idp)
{

    $this->idp=$idp;

}

public function getidp()
{

   return  $this->idp;

}

public function setmarquep($marquep)
{

    $this->marquep=$marquep;

}

public function getmarquep()
{

   return  $this->marquep;

}


public function setnomp($nomp)
{

    $this->nomp=$nomp;

}

public function getnomp()
{

   return  $this->nomp;

}


public function setquantite($quantite)
{

    $this->quantite=$quantite;

}

public function getquantite()
{

   return  $this->quantite;

}

public function setprixp($prixp)
{

    $this->prixp=$prixp;

}

public function getprixp()
{

   return  $this->prixp;

}


public function setcolor1($color1)
{

    $this->color1=$color1;

}

public function getcolor1()
{

   return  $this->color1;

}



public function settaille1($taille1)
{

    $this->taille=$taille1;

}

public function gettaille1()
{

   return  $this->taille1;

}


/*
public function settaille2($taille2)
{

    $this->taille2=$taille2;

}

public function gettaille2()
{

   return  $this->taille2;

}



public function settaille3($taille3)
{

    $this->taille3=$taille3;

}

public function gettaille3()
{

   return  $this->taille3;

}


*/

}

?>