var express = require('express');
var router = express.Router();
var pool= require('../services/ApiConnection'); //Api connection 
/* GET users listing. */
router.get('/:id_reservacion', function(req, res, next) {
  const id_reservacion=req.params.id_reservacion;
  pool.getConnection(function(err, connection) {
    connection.query('Select * from reservacion where id="'+id_reservacion+'"', function (error, results, fields) {
        connection.release();
        if (error) throw error;
        res.json(results);  //We return the respone with all the information needed
    });
  });
});

router.post('/', function(req, res, next) {
  const{checkin,checkout,numero_personas,fecha,id_usuario,id_departamento}=req.body;
  if(correo!="undefined" && nombre!="undefined"){
    pool.getConnection(function(err, connection) {
      connection.query('Insert into (checkin,checkout,numero_personas,fecha,id_usuario,id_departamento) values ("'+checkin+'","'+checkout+'","'+numero_personas+'","NOW()","'+id_usuario+'","'+id_departamento+'")', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
  }
});

router.delete('/:id_reservacion', function(req, res, next) {
  const id_reservacion=req.params.id_reservacion;
    pool.getConnection(function(err, connection) {
      connection.query('Delete from usuario where id="'+id_reservacion+'"', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
});

router.put('/:id_reservacion', function(req, res, next) {
  const id_reservacion=req.params.id_reservacion;
  const{checkin,checkout,numero_personas,fecha,id_usuario,id_departamento}=req.body;
    pool.getConnection(function(err, connection) {
      connection.query('Update usuario set checkin="'+checkin+'", checkout="'+checkout+'", numero_personas="'+numero_personas+'", fecha=NOW(), id_usuario="'+id_usuario+'", id_departamento="'+id_departamento+'" where id="'+id_departamento+'"' , function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
});

module.exports = router;
