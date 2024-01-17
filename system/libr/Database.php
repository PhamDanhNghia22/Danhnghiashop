<?php 
class Database extends PDO{
    
    public function __construct($server,$username,$password){
        parent::__construct($server,$username,$password);
        
       
        
    }

    public function select($sql, $data = array(), $fetchstyle=PDO::FETCH_ASSOC){
        
        $stmt = $this->prepare($sql);
        foreach($data as $key=> $value){
            $stmt->bindParam($key, $value);
        }
        
        $stmt->execute();
        return $stmt->fetchAll($fetchstyle);
        
        

    }
    
    public function insert($table, $data){
        $keys= implode(",", array_keys($data));
        $values = ":" .implode(", :", array_keys($data));
        $sql="INSERT INTO $table($keys) VALUES($values)";
        $stmt = $this->prepare($sql); 
        foreach($data as $key=> $value){
            $stmt->bindValue(":$key", $value);
            
        }
        return $stmt->execute();
        
    }

    public function update($table, $data, $cond){
        $updateKeys = NULL;
        foreach($data as $key=> $value){
            $updateKeys .= "$key=:$key,";
        }
        $updateKeys = rtrim($updateKeys,",");
        $sql="UPDATE $table SET $updateKeys WHERE $cond";
        $stmt = $this->prepare($sql); 
        foreach($data as $key=> $value){
            $stmt->bindValue(":$key", $value);
        }
        return $stmt->execute();
    }

    public function delete($table,$cond,$limit=1){
        $sql="DELETE FROM $table where $cond LIMIT $limit";
        return $this->exec($sql);
    }

    public function affectedRows($sql,$username,$password){
        $stmt = $this->prepare($sql);
        $stmt->execute(array($username,$password));
        return $stmt->rowCount();

    }
    public function selectUser($sql,$username,$password){
        $stmt = $this->prepare($sql);
        $stmt->execute(array($username,$password));
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    
}





?>  