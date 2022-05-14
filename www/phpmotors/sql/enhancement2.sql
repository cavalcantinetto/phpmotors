
--Query 1:

INSERT INTO clients(clientFirstName, clientLastName, clientEmail, clientPassword, comment) VALUES("Tony", "Stark", "tony@starkent.com", "Iam1ronM@n", "I am the real Ironman")

--Query 2:
UPDATE clients SET clientLevel = 3 WHERE clientEmail = "tony@starkent.com"

--Query 3:
UPDATE inventory SET invDescription = replace(invDescription, 'small interior', 'spacious interior') WHERE invModel = "Hummer"

--Query 4:
SELECT inventory.invModel, carclassification.classificationName FROM inventory INNER JOIN carclassification ON inventory.classificationId=carclassification.classificationId WHERE carclassification.classificationName="SUV"

--Query 5:
DELETE FROM inventory WHERE inventory.invMake = "Jeep" AND inventory.invModel = "Wrangler"