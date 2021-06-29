<?php
$UserUniqueBind = getRandomString(61);
$UserName = strtolower($UserName);
$UserMail = strtolower($UserMail);
$RUserFN = ucfirst(strtolower($RUserFN));
$RUserLN = ucfirst(strtolower($RUserLN));

$UserUniqueBind = htmlspecialchars($UserUniqueBind);
$UserUniqueBind = strval($UserUniqueBind);
$hashCosts = ['cost' => 12];
$UserPassword = password_hash($UserPassword, PASSWORD_BCRYPT, $hashCosts);

$stmt5->bindValue(':UserID', NULL, PDO::PARAM_INT);
$stmt5->bindValue(':UserUniqueBind', $UserUniqueBind, PDO::PARAM_STR);
$stmt5->bindValue(':UserMark', $UserMarkMarker);
$stmt5->bindValue(':UserName', $UserName);
$stmt5->bindValue(':UserPassword', $UserPassword);
$stmt5->bindValue(':UserMail', $UserMail);
$stmt5->bindValue(':RUserFN', $RUserFN);
$stmt5->bindValue(':RUserLN', $RUserLN);
$stmt5->bindValue(':CreatedDate', $CreatedDate);
$stmt5->bindValue(':LastLogged', $LastLogged);
$stmt5->bindValue(':UserStatus', $UserStatus);
?>
