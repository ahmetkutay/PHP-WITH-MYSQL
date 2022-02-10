<?php
function find_all_subjects(){
    global $db;
    $sql = "SELECT * FROM subjects ";
    $sql .= "ORDER BY position ASC";

    $subject_set = mysqli_query($db, $sql);
    confirm_result_set();
    return $subject_set;
}
?>