-- You are given a table numbers with just one column, number. It holds some numbers that are already ordered.

-- You need to write a query that makes them un-ordered, as in, every possible ordering should appear equally often.

-- Version compliquée
SELECT number
FROM numbers
ORDER BY CAST(md5(random()::text || number::text) AS BYTEA);

-- Version simple
SELECT number
FROM numbers
ORDER BY RANDOM();