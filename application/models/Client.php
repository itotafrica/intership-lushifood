<?php 

    class User extends Doctrine_Record {

        public function setTableDefinition(){

            $this->hasColumn("nom","string", 255);
            $this->hasColumn("mail","string", 255);
            $this->hasColumn("phone","string", 255);
            
        }

    }

?>