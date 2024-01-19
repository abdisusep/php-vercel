<?php

error_reporting(0);

echo '<a href="?page=home">Home</a> | ';
echo '<a href="?page=about">About</a>';
echo '<br>';
echo $_GET['page']?:'home';
