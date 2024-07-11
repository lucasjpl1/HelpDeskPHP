<?php
function is_admin() {
    return isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'administrador';
}

function get_user_id() {
    return isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
}
?>
