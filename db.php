<?php
class DBHandler {
	protected $connection;
	protected $query;

    //Connect to the DB
    public function __construct($dbhost = 'localhost', $dbuser = 'root', $dbpass = '', $dbname = '', $charset = 'utf8') {
		$this->connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
		if ($this->connection->connect_error) {
			$this->error('Failed to connect to MySQL - ' . $this->connection->connect_error);
		}
		$this->connection->set_charset($charset);
	}

	//Query DB
	public function query($query) {
		$result = $this->connection->query($query);
		if ($result->num_rows > 0) {
			return $result->fetch_all(MYSQLI_ASSOC);
		} else {
			return array();
		}
	}
    
    //Close the DB Connection
    public function close() {
		return $this->connection->close();
	}
}