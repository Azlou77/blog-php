<?php $page = $_GET['page'] ?? '';
if (isset($_GET['blog'])) {
    include 'include/blog.php';
} elseif (isset($_GET['details'])) {
    include 'include/details.php';
}
