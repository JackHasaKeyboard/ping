<?php

error_reporting(0);

mysql_connect("localhost","root","") or die("

  <center>

  <div class='conErr'>

  <h1> We had an error connecting to the host, sorry about that </h1>

  <h3> We've likely gone down for maintanence. </h3>

  </div>

  </center>

  ");


mysql_select_db("ping") or die("

  <center>

  <div class='conErr'>

  <h1> We had an error connecting to the database, sorry about that </h1>

  <h3> We've likely gone down for maintanence. </h3>

  </div>

  </center>

  ");

?>