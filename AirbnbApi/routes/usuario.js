var express = require('express');
var router = express.Router();
var pool= require('../services/ApiConnection'); //Api connection 
/* GET users listing. */
router.get('/:id_usuario', function(req, res, next) {
  const id_usuario=req.params.id_usuario;
  pool.getConnection(function(err, connection) {
    connection.query('Select * from usuario where id="'+id_usuario+'"', function (error, results, fields) {
        connection.release();
        if (error) throw error;
        res.json(results);  //We return the respone with all the information needed
    });
  });
});

router.post('/', function(req, res, next) {
  const{correo,nombre,edad,telefono,sexo,direccion,fecha_nacimiento,estado,contrasena,tipo}=req.body;
  if(correo!="undefined" && nombre!="undefined"){
    pool.getConnection(function(err, connection) {
      connection.query('Insert into usuario(correo,nombre,edad,telefono,sexo,direccion,fecha_nacimiento,estado,contrasena,tipo) values ("'+correo+'","'+nombre+'","'+edad+'","'+telefono+'","'+sexo+'","'+direccion+'","'+fecha_nacimiento+'","'+estado+'","'+contrasena+'","'+tipo+'")', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
  }
});

router.delete('/:id_usuario', function(req, res, next) {
  const id_usuario=req.params.id_usuario;
    pool.getConnection(function(err, connection) {
      connection.query('Delete from usuario where id="'+id_usuario+'"', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
});

router.put('/:id_usuario', function(req, res, next) {
  const id_usuario=req.params.id_usuario;
  const{correo,nombre, edad,telefono,sexo,direccion,fecha_nacimiento,estado,contrasena}=req.body;
    pool.getConnection(function(err, connection) {
      connection.query('Update usuario set correo="'+correo+'", nombre="'+nombre+'", edad="'+edad+'", telefono="'+telefono+'", sexo="'+sexo+'", direccion="'+direccion+'",fecha_nacimiento="'+fecha_nacimiento+'",estado="'+estado+'",contrasena="'+contrasena+'" where id="'+id_usuario+'"', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
});

module.exports = router;
