<?php

class VoertuigModel 
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getVoertuig()
    {
        $sql = "SELECT TypeVoertuig, Type, Kenteken, Bouwjaar, Brandstof, Rijbewijscategorie from typevoertuig tv left join voertuig v on tv.id = v.TypeVoertuig;  ";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}