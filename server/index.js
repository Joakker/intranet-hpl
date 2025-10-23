import express from 'express';
import mysql   from 'mysql';

const database = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'rootpass',
  database: 'intranet',
});

const app = express();

app.get('/api/sistemas', (_, res) => {
  database.query(
    'SELECT * FROM sistema',
    (err, data) => res.json(err ? err : data)
  )
});


app.listen(5174, () => { });
