# inventoryManagement

# Database Configuration
we have done database connectivity with mysqli object oriented.
    1) database can be accessed by http://localhost/phpmyadmin
    2) Database related configuration inside ./src/config/dbConfig.php
    3) In order to connectivity with database we have made an globale variable in php to use mysqli object by name $GLOBALS['conn'] and same will be accessed using $GLOBALS['conn'].
    4) We have made some global functions for using database query here are some of them rest can be viewed in configuration file.
        
        | Function | Description | Params
        | --- | --- | --- | 
        | selectAll($table) | select a all fields from table with out condition | string $table is a string with table name ex "user" 
        | selectAllWhere($table,$cond) | select a all fields from table where cond exists | $table is a string with table name ex "user"
        $con is condition to pass
