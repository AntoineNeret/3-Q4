<?php
use PHPUnit\Framework\TestCase;
use function App\Fonctions\CalculComplexiteMdp;
use function PHPUnit\Framework\assertEquals;

class CalculComplexiteMdpTest extends TestCase
{
    public function testCalculComplexiteMdp_aubry_23(){
        $mdp = "aubry";
        $resultat = CalculComplexiteMdp($mdp);
        echo $resultat;
        $this->assertEquals(23, $resultat);
    }

    public function testCalculComplexiteMdp_superaubry_45(){
        $mdp = "super@ubry";
        $resultat = CalculComplexiteMdp($mdp);
        echo $resultat;
        $this->assertEquals(45, $resultat);
    }

    public function testCalculComplexiteMdp_Superaubry2022_63(){
        $mdp = "Super@ubry2022";
        $resultat = CalculComplexiteMdp($mdp);
        echo $resultat;
        $this->assertEquals(63, $resultat);
    }

    public function testCalculComplexiteMdp_GiroudPresident2027_104(){
        $mdp = "Giroud-Président||2027";
        $resultat = CalculComplexiteMdp($mdp);
        $this->assertEquals(104, $resultat);
    }
}