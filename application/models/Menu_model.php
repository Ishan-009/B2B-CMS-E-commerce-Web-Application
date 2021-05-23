<?php
/**
 * document code
 */
class Menu_model extends CI_Model
{	
	function __construct()
	{
		parent::__construct();
	}
	public function menu_all(){
		$this->db->select('*,mmenu.Mid as menu_id, submenu.Mmenu as menu_item_id');
		$this->db->from('mmenu');
		$this->db->join('submenu', 'mmenu.Mid = submenu.Mmenu','left');
		$this->db->group_by('mmenu.Mname');
		$this->db->order_by('mmenu.Mid');
		$query = $this->db->get();
		return $query->result();
	}
	public function menu_select(){
		$this->db->select('*');
		$this->db->from('submenu');//submenu
		$query = $this->db->get();
		return $query->result();
	}

	public function getmenu()
	{
		return $this->db->get('mmenu')->result_array();

	}

}
/**
 * menu.m_id=mmenu.id, 
 * menu_item.m_id= submenu.mmenu
 * mmenu
 * submenu, mmenu.id=submenu.mmenu,left
 * mmenu->name
 * mmenu
 * 
 * 
 * 
 * 
 * 
 * **/

