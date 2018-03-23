### clients
SELECT firstName, lastName
FROM clients;
### Afficher tous les types de spectacles possibles.
SELECT DISTINCT genre
FROM genres;
### Afficher les 20 premiers clients selon leur identifiant.
SELECT firstName, lastName
FROM clients
WHERE id BETWEEN '1' AND '20';
### N’afficher que les clients possédant une carte de fidélité.
SELECT firstName, lastName
FROM cards
INNER JOIN cardTypes ON  cards.cardTypesId = cardTypes.id
INNER JOIN clients ON cards.cardNumber = clients.cardNumber
WHERE clients.cardNumber IS NOT NULL AND type = 'Fidelite';
### Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Les afficher comme ceci : Nom : Nom du client Prénom : Prénom du client (Trier les noms par ordre alphabétique.)
SELECT lastName, firstName
FROM clients
WHERE lastName LIKE 'M%'
ORDER BY lastName ASC;
###Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.
SELECT title, performer, date, startTime 
FROM shows 
ORDER BY performer ASC; 
###Afficher tous les clients comme ceci : Nom : Nom de famille du client Prénom : Prénom du client Date de naissance : Date de naissance du client Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas) Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.