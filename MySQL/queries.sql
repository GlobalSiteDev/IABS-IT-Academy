1. Вывести ФИО клиентов со статусом Активен

SELECT lname, fname, mname FROM clients
JOIN states ON clients.state_id = states.id
WHERE title = 'Активен';

2. Вывести ФИО клиентов из города Днепр

SELECT lname, fname, mname FROM clients
JOIN cities ON clients.city_id = cities.id
WHERE cities.title = 'Днепр';

3. Вывести ФИО клиентов из города Днепр и статусом Активен

SELECT lname, fname, mname FROM clients
JOIN cities ON clients.city_id = cities.id
JOIN states ON clients.state_id = states.id
WHERE cities.title = 'Днепр'
AND states.title = 'Активен';

4. Вывести сумму счетов по каждому клиенту в таблице

SELECT CONCAT(lname, ' ', fname, ' ', mname) as client, SUM(amount) FROM clients
JOIN invoices ON invoices.client_id = clients.id
GROUP BY client;
