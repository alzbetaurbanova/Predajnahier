<?php
// S�bor ktor� vyma�e �daje session.php
session_start();

if(session_destroy()) {
    header("Location: index.php");
}
?>