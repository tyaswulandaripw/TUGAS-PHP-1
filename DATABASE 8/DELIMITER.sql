DELIMITER //
CREATE TRIGGER pesanan_update_trigger
AFTER UPDATE ON pembayaran
FOR EACH ROW
BEGIN
    IF NEW.status_pembayaran = 'lunas' THEN
        UPDATE pesanan
        SET status = 'Lunas'
        WHERE id = NEW.pesanan_id;
    END IF;
END //
DELIMITER ;