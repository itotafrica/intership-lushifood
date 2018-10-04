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
                $this->restaurant->ajouter_restaurant
                $Nom_restaurant = $this->input->post('nom');
                $Adresse_restaurant = $this->input->post('adresse');
                $Email = $this->input->post('email');
                $Contact = $this->input->post('contact');
                $data = array(
                    'Nom_restaurant'=>$Nom_restaurant,
                    'Adresse_restaurant'=>$Adresse_restaurant,
                    'Email'=>$Email,
                    'Contact'=>$Contact);
                    $this->restaurant->ajouter_restaurant($data);
                $this->load->view(vue_restaurant);
            }
        }
    }
?>