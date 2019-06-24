var express = require('express');
var router = express.Router();
var pool= require('../services/ApiConnection'); //Api connection 
/* GET users listing. */
router.get('/:id_experiencia', function(req, res, next) {
  const id_experiencia=req.params.id_experiencia;
  pool.getConnection(function(err, connection) {
    connection.query('Select * from experiencia where id="'+id_experiencia+'"', function (error, results, fields) {
        connection.release();
        if (error) throw error;
        res.json(results);  //We return the respone with all the information needed
    });
  });
});

router.post('/', function(req, res, next) {
  const{direccion,estado, descripcion, personas, precio,duracion, idioma,id_anfitrion }=req.body;
    pool.getConnection(function(err, connection) {
      connection.query('Insert into experiencia (direccion,estado, descripcion, personas, precio,duracion, idioma,id_anfitrion ) values ("'+direccion+'","'+estado+'","'+descripcion+'","'+personas+'","'+precio+'","'+duracion+'","'+idioma+'","'+id_anfitrion+'")', function (error, results, fields) {
          if (error) throw error;
      });
      connection.query('Select * from experiencia where id_anfitrion ="'+id_anfitrion+'" and descripcion like "'+descripcion+'"', function (error, results, fields) {
        connection.release();
        if (error) throw error;
        res.json(results);  //We return the respone with all the information needed
    });
    });
});

router.delete('/:id_experiencia', function(req, res, next) {
  const id_experiencia=req.params.id_experiencia;
    pool.getConnection(function(err, connection) {
      connection.query('Delete from experiencia where id="'+id_experiencia+'"', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
});

router.put('/:id_experiencia', function(req, res, next) {
  const id_experiencia=req.params.id_experiencia;
  const{direccion,estado, descripcion, personas, precio,duracion, idioma,id_anfitrion }=req.body;
    pool.getConnection(function(err, connection) {
      connection.query('Update experiencia set checkin="'+checkin+'", checkout="'+checkout+'", numero_personas="'+numero_personas+'", fecha=NOW(), id_usuario="'+id_usuario+'", id_departamento="'+id_departamento+'" where id="'+id_experiencia+'"' , function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
});

module.exports = router;
