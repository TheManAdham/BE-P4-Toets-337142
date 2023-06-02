<?php

class Instructeur extends BaseController
{
    private $instructeurModel;

    public function __construct()
    {
        $this->instructeurModel = $this->model('InstructeurModel');
    }

    

    public function index()
    {
        $instructeurs  = $this->instructeurModel->getInstructeurs();
        $aantalInstruceurs = sizeof($instructeurs);

        

        $tableRows = '';
        foreach ($instructeurs as $instructeur) {
            $datum = date_create($instructeur->DatumInDienst);
            $datum = date_format($datum, 'd-m-Y');
            $tableRows .="<tr>
                            <td>$instructeur->Voornaam</td>
                            <td>$instructeur->Tussenvoegsel</td>
                            <td>$instructeur->Achternaam</td>
                            <td>$instructeur->Mobiel</td>
                            <td>$datum</td>
                            <td>$instructeur->AantalSterren</td>
                            <td>
                                <a href='" . URLROOT . "/Instructeur/gebruikteVoertuigen/$instructeur->Id'>
                            <i class='bi bi-car-front'></i>
                            </td>
                        </tr>";
        }

        $data = [
            'title' => 'Instructeurs in dienst',
            'tableRows' => $tableRows,
            'aantalInstructeurs' => $aantalInstruceurs
        ];

        $this->view('instructeur/index', $data);
    }
}

class voertuig extends BaseController
{
    private $voertuigModel;

    public function __construct()
    {
        $this->voertuigModel = $this->model('VoertuigModel');
    }

    public function gebruikteVoertuigen($instructeurId)
    {
        $instructeur = $this->voertuigModel->getVoertuig($instructeurId);
        $naam = $instructeur[0]->Voornaam . " " . $instructeur[0]->Tussenvoegsel . " " . $instructeur[0]->Achternaam;  
        $date = $instructeur[0]->DatumInDienst;
        $aantalSterren = $instructeur[0]->AantalSterren;

    

        $tableRows = '';
            $tableRows .="<tr>
                            <td></td>
                            <td></td>
                            <td>/td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>"
        ;

        $data = 
        [
            'title' => 'Door instructeur gebruikte voertuigen',
            'naam' => $naam,
            'datum in dienst' => $date,
            'aantal sterren' => $aantalSterren,
            'tableRows' => $tableRows
        ];

        $this->view('Instructeur/gebruikteVoertuigen', $data);
    }


}