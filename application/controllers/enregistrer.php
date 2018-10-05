<?php
    class Enregistrer extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('restaurant');
        }
        public function ecrire()
        {
            
            $this->load->library('form_validation');
            if ($this->fom_validation->run())
            {
                $Nom_restaurant = $this->input->post('Nom_restaurant');
                $Adresse_restaurant = $this->input->post('Adresse_restaurant');
                $Email = $this->input->post('Email');
                $Contact = $this->input->post('Contact');
                $Latitude = $this->input->post('Latitude');
                $Longitude = $this->input->post('Longitude');
                

                $data = array(
                    'Nom_restaurant'=>$Nom_restaurant,
                    'Adresse_restaurant'=>$Adresse_restaurant,
                    'Email'=>$Email,
                    'Contact'=>$Contact,
                    'Latitude'=>$Latitude,
                    'Longitude'=>$Longitude );
                    $this->restaurant->ajouter_restaurant($data);
                    $this->load->view(vue_restaurant);
                
            }
        }
    }
?>