# inventoryManagement

# Database Configuration
we have done database connectivity with mysqli object oriented.
    * database can be accessed by http://localhost/phpmyadmin
    * Database related configuration inside ./src/config/dbConfig.php
    * In order to connectivity with database we have made an globale variable in php to use mysqli object by name $GLOBALS['conn'] and same will be accessed using $GLOBALS['conn'].
    * We have made some global functions for using database query here are some of them rest can be viewed in configuration file.
       
### Functions

| Name                     | Discription | Return |
| :----------------------- | :----- | :-----|
| selectAll($table)        | select a all fields from table with out condition | An Associate Array of result. |
| selectAllWhere($table,$cond)| select a all fields from table where cond exists| An Associate Array of result.|
| selectFieldWhere($table, $field, $cond) | select a single field from table | An Associate Array of result.|
| selectFieldsWhere($table, $fields, $con) | select only required fields from table | An Associate Array of result.|
|insertInto($value, $table) | insert into is a common query builder for insert data into a table | True/False |
| insertIntoFields($fields, $values, $table) | insert into is a common query builder for insert data into specific fields in a table | True/False |
| updateField($field, $table, $value, $cond) |  insert into is a common query builder for insert data into specific fields in a table | True/False |


