<?php
class Song
{
	private $db;

	public $id;
	public $title;
	public $content;
	public $artist_id;
	public $created_at;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		global $db;
		$this->db = $db;
	}

	/**
	 * Metode til at hente lister med
	 */
	public function list()
	{
		$sql = "SELECT s.id, s.title, a.name 
				FROM song s 
				JOIN artist a 
				ON s.artist_id = a.id 
				ORDER BY s.title";
		return $this->db->query($sql);
	}

	/**
	 * Metode til at hente detaljer med
	 * @param id 
	 */
	public function details($id)
	{
		$params = array(
			"id" => array($id, PDO::PARAM_INT)
		);

		$sql = "SELECT s.id, s.title, s.content, a.name 
				FROM song s 
				JOIN artist a 
				ON s.artist_id = a.id 
				WHERE s.id = :id";
		return $this->db->query($sql, $params, Db::RESULT_SINGLE);
	}

	public function save() {
		$params = array(
			"title" => array($this->title, PDO::PARAM_STR),
			"content" => array($this->content, PDO::PARAM_STR),
			"artist_id" => array($this->artist_id, PDO::PARAM_INT)
		);

		if($this->id) {
			$params["id"] = array($this->id, PDO::PARAM_INT);
			$sql = "UPDATE song 
					SET title = :title, content = :content, artist_id = :artist_id 
					WHERE id = :id";
			return $this->db->query($sql, $params);
		} else {
			$sql = "INSERT INTO song(title, content, artist_id) 
					VALUES(:title, :content, :artist_id)";
			if($this->db->query($sql, $params)) {
				return $this->db->lastInsertId();
			}		
		}
	}

	/**
	 * Metode til at slette en record med
	 * @param id 
	 */
	public function delete($id)
	{
		$params = array(
			"id" => array($id, PDO::PARAM_INT)
		);

		$sql = "DELETE FROM song 
				WHERE id = :id";
		return $this->db->query($sql, $params);
	}
}
