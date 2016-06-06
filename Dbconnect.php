<?php
if(!mysql_connect("mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/theband","admingB5zzLW","atNb-_XCQKV9"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("dbtest"))
{
     die('oops database selection problem ! --> '.mysql_error());
}

?>