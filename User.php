<?php

class User {
    public $id;
    public $name;
    public $email;

    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
    public function reserver($event)
    {
        // return new Reservation;
    }
}
class Organisateur extends User {

    public function __construct($id, $name, $email)
    {
        parent::__construct($id, $name, $email);
    }

    public function crierEvent($name, $date)
    {
        return new Event($name, $date);
    }
    
    public function modifierEvent(Event $event, $name, $date)
    {
        $event->setName($name);
        $event->setDate($date);
    }

    public function supprimerEvent()
    {

    }
}   



class Event {
    private $id;
    private $title;
    private $description;
    private $date;
    private $lieu;
    private $billetsDisponibles;

    public function __construct($title, $description, $date, $lieu, $billetsDisponibles)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->lieu = $lieu;
        $this->billetsDisponibles = $billetsDisponibles;
    }

    public function gettitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getlieu()
    {
        return $this->lieu;
    }

    public function getbilletsDisponibles()
    {
        return $this->$billetsDisponibles;
    }

    public function settitle($title)
    {
        $this->title = $title;
    }

    public function setDescription($description)
    {
        $this->description->$description;
    }    

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setLieu()
    {
        $this->lieu = $lieu;
    }

    public function setbilletsDisponibles($billetsDisponibles)
    {
        $this->billetsDisponibles = $billetsDisponibles;
    }

    public function reserverBillet(User $user)
    {
        
    }

    public function ajouterBilletsDisponibles($nombreBillets)
    {
        $this->billetsDisponibles += $nombreBillets;
    }
}