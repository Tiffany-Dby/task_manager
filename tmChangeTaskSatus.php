<?php require_once 'tmDatabase.php';

$tmCompleted_at = "SELECT status FROM tasks WHERE task_id = :task_id";
$tmRep = $tmBase->prepare($tmCompleted_at);
$tmRep->bindParam(':task_id', $tmTaskID);

if (isset($_POST['status'])  && is_null($_POST['tmCompleted_at']) ) {
    $tmStatus = $_POST['status'];
    $tmCompleted_at = $_POST['tmCompleted_at'];
    $tmUser_id = 1;

    $tmSql = "UPDATE tasks SET status='completed' WHERE task_id = :task_id";
    $stmt = $tmBase->prepare($tmSql);
    $stmt->bindParam(':task_id', $tmTaskID);
    $stmt->execute([
        'completed' => $tmStatus,
        ':task_id' => $tmTaskID,]);

    if ($tmStatus == 'completed') {
        $tmSql2 = "UPDATE tasks SET completed_at = NOW() WHERE task_id = :task_id AND status = 'completed'";
        $stmt2 = $tmBase->prepare($tmSql);
        $stmt2->bindParam(':task_id', $tmTaskID);
        $stmt2->execute([
            ':status' => $tmStatus,
            ':task_id' => $tmTaskID
        ]);
        //pending state
    }else {
        $tmSql3 = "UPDATE tasks SET completed_at = NULL WHERE task_id = :task_id";
        $stmt3 = $tmBase->prepare($tmSql3);
        $stmt3->execute([':task_id' => $tmTaskID]);
    }
}