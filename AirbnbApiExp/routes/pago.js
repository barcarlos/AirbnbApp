var express = require('express');
var router = express.Router();
var pool= require('../services/ApiConnection'); //Api connection 
/* GET users listing. */
router.get('/:id_pago', function(req, res, next) {
  const id_pago=req.params.id_pago;
  pool.getConnection(function(err, connection) {
    connection.query('Select * from pago where id="'+id_pago+'"', function (error, results, fields) {
        connection.release();
        if (error) throw error;
        res.json(results);  //We return the respone with all the information needed
    });
  });
});

router.post('/', function(req, res, next) {
  const{numero_tarjeta, tipo_tarjeta, cantidad, fecha, }=req.body;
  if(correo!="undefined" && nombre!="undefined"){
    pool.getConnection(function(err, connection) {
      connection.query('Insert into pago(correo,nombre,edad,telefono,sexo,direccion,fecha_nacimiento,estado,contrasena) values ("'+correo+'","'+nombre+'","'+edad+'","'+telefono+'","'+sexo+'","'+direccion+'","'+fecha_nacimiento+'","'+estado+'","'+contrasena+'")', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
  }
});

router.delete('/:id_pago', function(req, res, next) {
  const id_pago=req.params.id_pago;
    pool.getConnection(function(err, connection) {
      connection.query('Delete from pago where id="'+id_pago+'"', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
});


module.exports = router;
