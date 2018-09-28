<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paniercmd extends CI_Controller {

    public function add_in_panier(){

            $data = array('id' => $this->input->post('id'),
                        'qty'=>1,
                        'price'=>$this->input->post('prix'),
                        'name'=>$this->input->post('nom'),
                        'file'=>$this->input->post('file'));
            $this->cart->insert($data);
            redirect('welcome/panier');
        }
    //==========================================================================================================
        public function panier(){
        
            $this->load->view('panier');
        }
    //==========================================================================================================
        public function mettreajourpanier(){
            $data = array('rowid' =>$this->input->post('id') , 
                    'qty'=>$this->input->post('quantity'));
            $this->cart->update($data);
            $this->input->post('quantity');
            redirect($_SERVER['HTTP_REFERER']);
        }
    //==========================================================================================================
        public function deletepanier(){

            $data = array('rowid'=>$this->uri->segment(3),'qty'=>0);
            $this->cart->update($data);
            redirect($_SERVER['HTTP_REFERER']);
        }
    //==========================================================================================================
        public function viderpanier(){
            $this->cart->destroy();
            redirect($_SERVER['HTTP_REFERER']);
        }
    //==========================================================================================================
        public function passetacommande(){
            $nomuser = strip_tags($this->input->post('nameuser'));
            $teluser = strip_tags($this->input->post('number'));
            $addressemailuser = strip_tags($this->input->post('mail'));
            $addressehomeuser = strip_tags($this->input->post('adresse'));
            $nomarticle = $this->input->post('nomarticle');
            $prixarticle = $this->input->post('prixarticle');
            $taillearticle = strip_tags($this->input->post('taillearticle'));
            $couleurarticle =  strip_tags($this->input->post('colorarticle'));
            $quantity = strip_tags($this->input->post('quantity'));
            if (empty($nomuser) OR empty($teluser) OR empty($addressemailuser) OR empty($addressehomeuser)) {
                redirect($_SERVER['HTTP_REFERER']);
            }
            if(!$this->seach->writecorrectynumberphone($teluser) OR !$this->seach->writecorrectyadressmail(	$addressemailuser)){
                return false;
            }	
            $this->unique_model->add_query_commande($nomarticle,$prixarticle,$taillearticle,$couleurarticle,$quantity,$nomuser,$teluser,$addressemailuser,$addressehomeuser);
                $this->load->view('succescmd');
        }
}