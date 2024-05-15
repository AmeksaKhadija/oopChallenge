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
        
    }
}
class Organisateur extends User {

    public function __construct($id, $name, $email, $age)
    {
        parent::__construct($id, $name, $email);
        $this->age = $age;
    }

    public function creerEvent($title, $description, $date, $lieu)
    {
        return new Event($title, $description, $date, $lieu);
    }
    
    public function modifierEvent(Event $title, $description, $date, $lieu)
    {
        $event->settitle($title);
        $event->setDescription($description);
        $event->setDate($date);
        $event->setLieu($lieu);
    }

    public function supprimerEvent(Event $event)
    {
        $event = new Event();
        $event->supprimerEvent($event);
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

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getLieu()
    {
        return $this->lieu;
    }

    public function setLieu($lieu)
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
}