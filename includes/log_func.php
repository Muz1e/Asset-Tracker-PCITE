<?php
function invalidUid($username)
{
    $result = "";
    if (!preg_match("/^[a-zA-Z0-9\s]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function pwdMatch($pwd, $pwdRepeat)
{
    $result = "";
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function uidExists($con, $username)
{
    $sql = "SELECT * FROM `admin_acc` WHERE `admin_uid` = ?;";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../createAdmin.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}
function emailExists($con, $email)
{
    $sql = "SELECT * FROM admin WHERE `admin_email` = ?;";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../createAdmin.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createAdmin($con, $name, $email, $username, $pwd)
{
    $sql = "INSERT INTO admin (adminName, adminEmail, adminUid, adminPwd) VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {

        header("location: ../createAdmin.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../createAdmin.php?error=none");
    exit();
}

function loginAdmin($con, $username, $pwd)
{
    $uidExists = uidExists($con, $username);

    if ($uidExists === false) {
        header("location: ../index.php?error=noaccountexist");
        exit();
    }

    $pwdHashed = $uidExists["admin_pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../index.php?error=wrongpassword");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["adminuid"] = $uidExists["admin_uid"];
        header("location: ../dashboard.php");
        exit();
    }
}