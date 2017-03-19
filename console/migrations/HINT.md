FOR MIGRATE:
============

*** 1. Create migration
Run 'cmd';
Change dir to 'path/to/project'
Type 'yii migrate/create {%create_some_table%}'
Confirm new migration 'y'
Complete
File was create in directory 'path/to/project/console/migration/mDDMMYY_HHMMSS_create_some_table.php'

*** 2 Setting table
Edit file 'mDDMMYY_HHMMSS_create_some_table.php' (method {up} and {down})

*** 3 Apply migration
Run 'cmd';
Change dir to 'path/to/project'
Type 'yii migrate'
Apply migration type 'y'






Get column type [doc] [http://www.yiiframework.com/doc-2.0/yii-db-querybuilder.html#getColumnType()-detail]
-----------------------------------------------------------------------------------------------------------
'''
    pk: an auto-incremental primary key type, will be converted into "int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY"
    bigpk: an auto-incremental primary key type, will be converted into "bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY"
    unsignedpk: an unsigned auto-incremental primary key type, will be converted into "int(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY"
    char: char type, will be converted into "char(1)"
    string: string type, will be converted into "varchar(255)"
    text: a long string type, will be converted into "text"
    smallint: a small integer type, will be converted into "smallint(6)"
    integer: integer type, will be converted into "int(11)"
    bigint: a big integer type, will be converted into "bigint(20)"
    boolean: boolean type, will be converted into "tinyint(1)"
    float`: float number type, will be converted into "float"
    decimal: decimal number type, will be converted into "decimal"
    datetime: datetime type, will be converted into "datetime"
    timestamp: timestamp type, will be converted into "timestamp"
    time: time type, will be converted into "time"
    date: date type, will be converted into "date"
    money: money type, will be converted into "decimal(19,4)"
    binary: binary data type, will be converted into "blob"
'''