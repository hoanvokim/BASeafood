CREATE TRIGGER `baseafood`.`news_INSERT` BEFORE INSERT ON `baseafood`.`news`
FOR EACH ROW BEGIN
    -- Set the creation date
    SET NEW.created_date = now();

    -- Set the udpate date
    SET NEW.updated_date = now();
END;

CREATE TRIGGER `baseafood`.`news_UPDATE` BEFORE UPDATE ON `baseafood`.`news`
FOR EACH ROW BEGIN
    -- Set the udpate date
    SET NEW.updated_date = now();
END;