<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    var $id = '';
    var $table = '';

    function __construct() {
        parent::__construct();
    }

    /**
     * Inserts a new row into the table and returns the
     * assocated ID.
     *
     * @param  array $data          the data for the row
     * @return int                  the associated ID
     */
    function insert($data) {
        $this->db->insert($this->table, $data);
		return $this->db->insert_id();
    }

    /**
     * Looks for the row with the given ID as it's primary key.
     * If found, returns that row. Otherwise, returns false.
     *
     * @param  int $id              the ID to search for
     * @return array                the row
     */
    function getByPk($id) {
        if (!is_numeric($id) || $id < 1) {
            return false;
        }

        $this->db->where($this->id, $id);
        $result = $this->db->get($this->table);

        if ($result->num_rows() > 0) {
            return $result->row_array();
        }
        return false;
    }

    /**
     * Returns all the rows in the table.
     *
     * @return array                the rows
     */
    function getAll() {
        return $this->db->get($this->table)->result_array();
    }

    /**
     * Updates the row associated with the given ID with
     * the given array of data.
     *
     * @param  int $id              the ID of the row
     * @return array                the data
     * @return boolean              true, if successful. otherwise, false
     */
    function update($id, $data) {
        if (!is_numeric($id) || $id < 1) {
            return false;
        }

        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows() === 1;
    }

    /**
     * Deletes the row with the given ID.
     *
     * @param  int $id              the ID of the row
     * @return boolean              true, if successful. otherwise, false
     */
    function delete($id) {
        if (!is_numeric($id) || $id < 1) {
            return false;
        }

        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows() === 1;
    }
}
