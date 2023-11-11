<?php
    class DB {
        public $conn;
        protected $host = 'localhost';
        protected $username = 'root';
        protected $password = '';
        protected $dbName = "food_store";

        function __construct() {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);
            if ($this->conn->connect_error) {
              die("Connection failed: " . $this->conn->connect_error);
            }
        }

        public function query($sql) {
            return $this->conn->query($sql);
        }

        public function select($sql) {
            $result = $this->query($sql);
            $data = array();

            while($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }

            return $data;
        }

        public function insert($table, $data) {
            $keys = array_keys($data);
            $values = array_values($data);
            $keys = array_map(array($this, "escape"), $keys);
            $values = array_map(array($this, "escape"), $values);
            $keys = implode(",", $keys);
            $values = "'" . implode("','", $values) . "'";
            $sql = "INSERT INTO " . $table . " (" . $keys . ") VALUES (" . $values . ")";
            $this->query($sql);
        }

        public function delete($table, $where) {
            $sql = "DELETE FROM $table WHERE $where";
            $result = $this->query($sql);
            return $result;
        }

        public function update($table, $data, $where) {
            $set = [];
            foreach ($data as $column => $value) {
              $set[] = "$column = '$value'";
            }
            $set = implode(', ', $set);
            $sql = "UPDATE $table SET $set WHERE $where";
            return $this->query($sql);   
        }

        public function search($table, $field, $keyword, $joinTables = [], $joinConditions = []) {
            $sql = "SELECT * FROM $table";
            $joinSql = "";
          
            $numJoins = count($joinTables);
            if ($numJoins > 0) {
              for ($i = 0; $i < $numJoins; $i++) {
                $joinTable = $joinTables[$i];
                $joinCondition = $joinConditions[$i];
                $joinSql .= " JOIN $joinTable ON $joinCondition";
              }
              $sql .= $joinSql;
            }
          
            $sql .= " WHERE $table.$field LIKE ?";
          
            $stmt = $this->conn->prepare($sql);
            $keyword = "%$keyword%";
            $stmt->bind_param("s", $keyword);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
          
            return $result;
          }
    }
