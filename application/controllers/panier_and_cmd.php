<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paniercmd extends CI_Controller {
    //==========================================================================================
        /* conrtucteur et loading des bibliotheques, model et helper*/
    function __construct(){
        parent::__construct();
        $this->load->model('essai_model');
        $this->load->library('cart');
    }
    //============================================================================================
        /*Ajout un plat dans un panier*/ 
    public function add_in_panier(){

            $data = array('id' => $this->input->post('id'),
                        'qty'=>1,
                        'price'=>$this->input->post('prix'),
                        'name'=>$this->input->post('nom'),
                        'file'=>$this->input->post('file'));
            $this->cart->insert($data);
            redirect('welcome/panier');
        }
    //===========================================================================================
        /*Vue panier*/
        public function panier(){
        
            $this->load->view('panier');
        }
    //===========================================================================================
        /*mise a jour du panier */
        public function mettreajourpanier(){
            $data = array('rowid' =>$this->input->post('id') , 
                    'qty'=>$this->input->post('quantity'));
            $this->cart->update($data);
            redirect($_SERVER['HTTP_REFERER']);
        }
    //============================================================================================
        /*efface dans un plat dans un article */
        public function deletepanier(){

            $data = array('rowid'=>$this->uri->segment(3),'qty'=>0);
            $this->cart->update($data);
            redirect($_SERVER['HTTP_REFERER']);
        }
    //=============================================================================================
        /*vide tout le panier */
        
        public function viderpanier(){
            $this->cart->destroy();
            redirect($_SERVER['HTTP_REFERER']);
        }
    //=============================================================================================
        /*passe la commande et communique avec le model */
        public function passetacommande(){
            $nomuser = strip_tags($this->input->post('nameuser'));
            $addressemailuser = strip_tags($this->input->post('mail'));
            $nomarticle = $this->input->post('nomarticle');
            $quantity = strip_tags($this->input->post('quantity'));
            $prixtotal = strip_tags($this->input->post('total'));
            if (empty($nomuser) OR empty($teluser) OR empty($addressemailuser) OR empty($addressehomeuser)) {
                return false;
            }
            if( !$this->seach->writecorrectyadressmail(	$addressemailuser)){
                return false;
            }	
           $this->essaie_model-> add_commande( $nomuser, $addressemailuser, $quantity, $prixtotal, $nomarticle);
           redirect($_SERVER['HTTP_REFERER']);
        }
    //============================================================================================================
}