<!-- 
DROP DATABASE IF EXISTS test;
CREATE DATABASE test;
USE test;

CREATE TABLE test(
    idx int PRIMARY KEY AUTO_INCREMENT,
    a int,
    b varchar(10)
);

INSERT INTO test(a) VALUES(1);

DELIMITER $$
DROP PROCEDURE IF EXISTS pro_test;
CREATE PROCEDURE `pro_test` (uid int)  
    BEGIN
        DECLARE EXIT HANDLER FOR SQLEXCEPTION
            BEGIN
                SELECT "transaction error";                
                ROLLBACK;
                SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Custom error';
            END;
        START TRANSACTION;
            SELECT @oldData := a, @idx := idx FROM test;
            SET @newData = CONCAT(@idx, "_", @oldData);
            INSERT INTO test(a, r) VALUES (uid, @newData);
            SELECT * FROM test;
        COMMIT;
    END$$
DELIMITER ; 
-->

<?php

$db = new PDO("mysql:host=localhost;dbname=test", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $db->beginTransaction();

echo "Transaction State: {$db->inTransaction()}<hr>";

$query = "call pro_test(:userid)";

try {
    $stmt = $db->prepare($query);
    
    print_r($db->errorInfo());
    echo "<br>";

    $stmt->bindValue(":userid", floor(rand(1000, 10000)));

    if ($stmt->execute()) {
        echo "executed<hr>";
    }
} catch (PDOException $e) {
    throw $e;
} catch (Exeception $e) {
    throw $e;
}
    // 試試看不使用 fetch
    // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     var_dump($row);
    //     echo "<hr>";
    // }

// if ($stmt->closeCursor()) {
    // echo "close cursor<br>";
// }

// if ($db->commit()) {
    // echo "commit<br>";
// }

echo "done<br>";
?>
