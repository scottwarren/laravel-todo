<?php

namespace App\Models;

class Task {
    private $id;

    // Name of the task
    private $name;

    // Whether or not the task is completed
    private $isCompleted;

    public function __construct($id, $name, $isCompleted = false)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setIsCompleted($isCompleted);
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setIsCompleted($isCompleted)
    {
        $this->isCompleted = $isCompleted;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getIsCompleted()
    {
        return $this->isCompleted;
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'isCompleted' => $this->getIsCompleted(),
        ];
    }
}
