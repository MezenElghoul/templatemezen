<?php
class User {
    private $id;
    private $email;
    private $pwd;
    private $First_Name;
    private $Last_Name;
    public function __construct($First_Name=null, $Last_Name=null ,$email=null, $pwd=null ) {
       
        $this->First_Name = $First_Name;
        $this->Last_Name = $Last_Name;
         $this->email = $email;
        $this->pwd = $pwd;



    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**a
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pwd
     */ 
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set the value of pwd
     *
     * @return  self
     */ 
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }
    /**
     * Get the value of name
     */ 
    

    /**
     * Get the value of First_Name
     */ 
    public function getFirst_Name()
    {
        return $this->First_Name;
    }

    /**
     * Set the value of First_Name
     *
     * @return  self
     */ 
    public function setFirst_Name($First_Name)
    {
        $this->First_Name = $First_Name;

        return $this;
    }

    /**
     * Get the value of Last_Name
     */ 
    public function getLast_Name()
    {
        return $this->Last_Name;
    }

    /**
     * Set the value of Last_Name
     *
     * @return  self
     */ 
    public function setLast_Name($Last_Name)
    {
        $this->Last_Name = $Last_Name;

        return $this;
    }
    } 




?>







