<?php

use UseCase;
use FactureDetail;

class UseCaseUnitTest
{
    public function testSuccefulCreateUseCase()
    {
        $patata = new UseCase();
        $patata->facturar();

        $facturedetail = new FactureDetail('ES0023317447863227CM', 230, 4.4, 3.5);
        
    }

}