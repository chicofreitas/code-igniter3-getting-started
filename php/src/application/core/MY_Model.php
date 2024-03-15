<?php

class MY_Model extends CI_Model {
    /**
     * protected string $table
     */
   protected $table = '';

   /**
    * Return all entries from the especified $table 
    * variable.
    */
   public function get() {
       $query = $this->db->get($this->table);
       return $query->result();
   }

   /**
    * Find an entry by id primary key from the especified 
    * $table variable.
    */
   public function findOne($id) {
       $query = $this->db
           ->where('id', $id)
           ->limit(1)
           ->get($this->table);
       return $query->result();
   }

   /**
    * 
    */
   public function save() {
       $this->db->insert($this->table, $data);
       $this->db->update($this->table, $data);
   }

   /**
    * 
    */
   public function delete($id) {
       $this->db->delete($this->table, array('id' => $id));
   }

   /**
    * 
    * @param string $parent The name of the parent table.
    * @param string $children The name of the children table.
    * @param string $pivot_table The name of the pivot table.
    */
   public function oneToMany(
        $table = $this->table, 
        $children, 
        $foreigh_key = 'TABLE_id', 
        $references = 'id'
    ) {
        //return $this->db->get()->result();
   }

   public function manyToMany(
        $left_table, $right_table, $pivot_table, $left_key, $right_key, ) {
        //return $this->db->get()->result();
   }
}