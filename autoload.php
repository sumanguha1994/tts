<?php 
foreach (glob("*.html") as $filename)
{
    include $filename;
}