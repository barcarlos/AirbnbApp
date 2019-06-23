var express = require('express');
var router = express.Router();
var pool= require('../services/ApiConnection'); //Api connection 
/* GET users listing. */
router.get('/:id_departamento', function(req, res, next) {
  const id_departamento=req.params.id_departamento;
  pool.getConnection(function(err, connection) {
    connection.query('Select * from departamento where id="'+id_departamento+'"', function (error, results, fields) {
        connection.release();
        if (error) throw error;
        res.json(results);  //We return the respone with all the information needed
    });
  });
});

router.post('/', function(req, res, next) {
  const{descripcion,nombre,direccion, habitaciones, banos, camas, noches_minimas, precio_noche,checkin,checkout,ubicacion, id_anfitrion,id_estado}=req.body;
  if(direccion!="undefined" && habitaciones!="undefined" && banos!="undefined" && camas!="undefined"  && noches_minimas!="undefined" && precio_noche!="undefined" && checkin!="undefined" && checkout!="undefined" && id_anfitrion!="undefined" && id_estado!="undefined" ){
    pool.getConnection(function(err, connection) {
      connection.query('Insert into departamento(direccion, habitaciones, banos, camas, precio_noche,checkin,checkout,ubicacion,id_anfitrion,id_estado,nombre,descripcion) values ("'+direccion+'","'+habitaciones+'","'+banos+'","'+camas+'","'+precio_noche+'","'+checkin+'","'+checkout+'","'+ubicacion+'", "'+id_anfitrion+'","'+id_estado+'","'+nombre+'","'+descripcion+'")', function (error, results, fields) {
          //connection.release();
          if (error) throw error;
          //res.json(results);  //We return the respone with all the information needed
      });
      connection.query('Select id from departamento where id_anfitrion="'+id_anfitrion+'"', function (error, results, fields) {
        connection.release();
        if (error) throw error;
        res.json(results);  //We return the respone with all the information needed
    });
    });
  }else{
    res.status("Sorry, something wrong, theres's data incomplete")
  }
});

router.delete('/:id_departamento', function(req, res, next) {
  const id_departamento=req.params.id_departamento;
    pool.getConnection(function(err, connection) {
      connection.query('Delete from departamento where id="'+id_departamento+'"', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
});

router.put('/:id_departamento', function(req, res, next) {
  const id_departamento=req.params.id_departamento;
  const{direccion, habitaciones, banos, camas, noches_minimas, precio_noche,checkin,checkout,ubicacion, id_anfitrion,id_estado}=req.body;
    pool.getConnection(function(err, connection) {
      connection.query('Update departamento set direccion="'+direccion+'", habitaciones="'+habitaciones+'", banos="'+banos+'", camas="'+camas+'", noches_minimas="'+noches_minimas+'", precio_noche="'+precio_noche+'", checkin="'+checkin+'", checkout="'+checkout+'", ubicacion="'+ubicacion+'", id_anfitrion="'+id_anfitrion+'", id_estado="'+id_estado+'" where id="'+id_departamento+'"', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
});

module.exports = router;
