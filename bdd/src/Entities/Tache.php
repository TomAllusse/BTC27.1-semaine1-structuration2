<?php

Class Tache {
    private $id;
    private $content;
    private $createdAt;

    /* GETTER */
    public function getId()
    {
        return $this->id;
    }

    public function getContent()
    {
        return $this->content;
    }
    
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /* SETTER */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}