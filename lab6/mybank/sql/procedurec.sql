USE mybank;
DROP PROCEDURE IF exists transfer;

DELIMITER $$

CREATE PROCEDURE transfer(	  sender varchar(100),
							  receiver varchar(100),
							  title varchar(100),
							  amnt FLOAT(8),
							  pass varchar(100)
                             )
BEGIN
	DECLARE `_rollback` BOOL DEFAULT 0;
    DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
	SET SQL_SAFE_UPDATES = 0;
		
	START TRANSACTION;
		IF (SELECT `amount` FROM `users` WHERE `username` = sender) < amnt THEN
			ROLLBACK;
        ELSE
			UPDATE `users` SET `amount` = `amount` - amnt
			WHERE `username` = sender
			AND `password` = pass;
			
			UPDATE `users` SET `amount` = `amount` + amnt
			WHERE `username` = receiver;
			
			INSERT into transfers (`sender`,`receiver`,`title`,`amount`)
						   values (sender,receiver,title,amnt);
		
		END IF;
    IF `_rollback` THEN
		ROLLBACK;
	ELSE
		COMMIT;
        
	END IF;
END$$
DELIMITER ;

call transfer("a","b","title",1,"0cc175b9c0f1b6a831c399e269772661");