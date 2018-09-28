<?php
     namespace App\Entities;
   
    use CodeIgniter\Entity;

    class User extends Entity
    {
        protected $id;
        protected $username;
        protected $email;
        protected $password;
        protected $created_at;
        protected $updated_at;
    }

?>