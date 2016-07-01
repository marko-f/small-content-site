<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Site extends CI_Controller {
    
//uèitavanje stranice 
   
    public function index (){
        $this->home();
    }
    
    public function home () {
        $this->load->view ("site_header");
        $this->load->view ("site_nav");
        $this->load->view ("site_nav2");
        $this->load->view ("content_home");
        $this->load->view ("site_footer");
        $this->load->view ("site_footer1");
    }

//navigacija
    
     public function usluge () {
        $this->load->view ("site_header");
        $this->load->view ("site_nav_usluge_a");
        $this->load->view ("site_nav2");
        $this->load->view ("content_usluge");
        $this->load->view ("site_footer");
        $this->load->view ("site_footer1");
    }
    
        public function onama () {
        $this->load->view ("site_header");
        $this->load->view ("site_nav");
        $this->load->view ("site_nav2");
        $this->load->view ("content_onama");
        $this->load->view ("site_footer");
        $this->load->view ("site_footer1");
    }
    
        public function djelatnosti () {
        $this->load->view ("site_header");
        $this->load->view ("site_nav_djelatnosti_a");
        $this->load->view ("site_nav2");
        $this->load->view ("content_djelatnosti");
        $this->load->view ("site_footer");
        $this->load->view ("site_footer1");
        }
        
        public function investitori () {
        $this->load->view ("site_header");
        $this->load->view ("site_nav_investitori_a");
        $this->load->view ("site_nav2");
        $this->load->view ("content_investitori");
        $this->load->view ("site_footer");
        $this->load->view ("site_footer1");
        }
        
        public function kontakt () {
        $this->load->view ("site_header");
        $this->load->view ("site_nav_kontakt_a");
        $this->load->view ("site_nav2");
        $this->load->view ("content_kontakt");
        $this->load->view ("site_footer");
        $this->load->view ("site_footer1");
        }
        
        public function galerija () {
        $this->load->view ("site_header");
        $this->load->view ("site_nav");
        $this->load->view ("site_nav2");
        $this->load->view ("content_galerija");
        $this->load->view ("site_footer");
        $this->load->view ("site_footer1");
        }
        
        
//uèitavanje galerija

        public function trg_branitelja_zdenci () {
        $this->load->view ("site_header");
        $this->load->view ("site_nav");
        $this->load->view ("site_nav2");
        $this->load->view ("galerije/content_galerija_trgbranitelja");
        $this->load->view ("site_footer");
        $this->load->view ("site_footer1");
        }

        
    
}
