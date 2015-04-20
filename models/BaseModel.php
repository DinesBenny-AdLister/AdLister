<?php 
	class BaseModel {

    protected static $dbc;
    protected static $table;

    public $attributes = array();

    /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /*
     * Connect to the DB
     */
    private static function dbConnect()
    {
        if (!self::$dbc)
        {
    		define("DB_HOST", '127.0.0.1');
			define("DB_NAME", 'adlister_db');
			define("DB_USER", 'adlister_user');
			define("DB_PASS", 'password');

            self::$dbc = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);

            self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo self::$dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
        }
    }

    /*
     * Get a value from attributes based on name
     */
    public function __get($name)
    {
        if (isset($this->attributes[$name])){
        	return $this->attributes[$name];
        }
        else{
        	return null;
        }
    }

    /*
     * Set a new attribute for the object
     */
    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    /*
     * Persist the object to the database
     */
    public function save()
    {
        if (!empty($this->attributes)){
        	self::dbConnect();
        	$stmt = self::$dbc->prepare("SELECT * FROM " . static::$table . " WHERE id = :id");
        	
        	$stmt->bindValue(":id", $this->attributes["id"], PDO::PARAM_STR);

        	$stmt->execute();

        	$results = $stmt->fetch(PDO::FETCH_ASSOC);

        	if ($results){
        		foreach ($this->attributes as $key => $value) {
	        		$stmt = self::$dbc->prepare("UPDATE " . static::$table . " SET $key = :$key WHERE id = :id");

					$stmt->bindValue(":id",      $this->attributes["id"], PDO::PARAM_INT);
					$stmt->bindValue(":$key",    $value,                  PDO::PARAM_STR);

					$stmt->execute();
				}
        	}
        	else{
        		$cols = implode(", ", array_keys($this->attributes));
	        	$vals = ":" . implode(", :", array_keys($this->attributes));
        		$query = "INSERT INTO " . static::$table . " ($cols) VALUES ($vals)";
        		$stmt = self::$dbc->prepare($query);

        		foreach($this->attributes as $key => $val){
	        		$stmt->bindValue(":$key", $val, PDO::PARAM_STR);
	        	}

        		$stmt->execute();
        	}
        }
    }

    /*
     * Find a record based on an id
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // The following code will set the attributes on the calling object based on the result variable's contents
        $stmt = self::$dbc->prepare("SELECT * FROM " . static::$table . " WHERE id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    // Return all rows in the table.
    public static function all()
    {
        self::dbConnect();

        $stmt = self::$dbc->prepare("SELECT * FROM " . static::$table);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // Delete a row in the table based on a passed ID.
    public static function delete($id){
    	self::dbConnect();

    	$stmt = self::$dbc->prepare("DELETE * FROM " . static::$table . " WHERE id = :id");

    	$stmt->bindValue(":id", $id, PDO::PARAM_INT);

    	$stmt->execute();
    }
 ?>