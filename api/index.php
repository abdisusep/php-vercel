<?php

echo '<a href="?page=home">Home</a>';
echo '<a href="?page=about">About</a>';

echo $_GET['page']?:'home';
