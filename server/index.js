import express from 'express';
import mysql   from 'mysql';

const intranetdb = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'rootpass',
  database: 'intranet',
});

const funcionariosdb = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'rootpass',
  database: 'recursos_humanos'
});

const app = express();

app.get('/api/sistemas', (_, res) => {
  intranetdb.query(
    'SELECT * FROM sistema',
    (err, data) => res.json(err ? err : data)
  )
});

for (let i = 1; i <= 18; i++) {
  app.get(`/api/docs/${i}`, (_, res) => {
    intranetdb.query(
      `SELECT * FROM documento WHERE id_categoria = ${i};`,
      (err, data) => res.json(err ? err : data)
    )
  })
}

app.get('/api/cumple', (_, res) => {
  funcionariosdb.query(
    `SELECT
      id_funcionario,
      nombre,
      DAY(fecha_nacimiento)   as dia,
      MONTH(fecha_nacimiento) as mes
    FROM
      funcionario
    WHERE
      DAY(fecha_nacimiento) = DAY(CURRENT_DATE())
      AND MONTH(fecha_nacimiento) = MONTH(CURRENT_DATE());`,
      (err, data) => res.json(err ? err : data)
  )
})

app.listen(5174, () => { });
