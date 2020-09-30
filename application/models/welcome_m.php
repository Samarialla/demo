<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author samarilla
 * @package demo
 * @subpackage models 
 *
 */
class welcome_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function guardar($data)
    {
        $resultado =  $this->db->insert('contactos', $data);
        $demo_id = $this->db->insert_id();
        if ($demo_id !== 0 || $demo_id !== '') {
            $resultado = true;
        }else{
            $resultado = false;
        }
        return $resultado;
    }
}
