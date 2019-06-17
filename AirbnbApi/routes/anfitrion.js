var express = require('express');
var router = express.Router();
var pool= require('../services/ApiConnection'); //Api connection 
/* GET users listing. */
router.get('/:id_anfitrion', function(req, res, next) {
  const id_anfitrion=req.params.id_anfitrion;
  pool.getConnection(function(err, connection) {
    connection.query('Select * from anfitrion where id="'+id_anfitrion+'"', function (error, results, fields) {
        connection.release();
        if (error) throw error;
        res.json(results);  //We return the respone with all the information needed
    });
  });
});
router.post('/', function(req, res, next) {
  const{correo,nombre, direccion, telefono, idioma}=req.body;
  if(correo!="undefined" && nombre!="undefined" &&direccion!="undefined" && telefono!="undefined"  && idioma!="undefined"){
    pool.getConnection(function(err, connection) {
      connection.query('Insert into anfitrion(correo,nombre,direccion,telefono, idioma) values ("'+correo+'","'+nombre+'","'+direccion+'","'+telefono+'","'+idioma+'")', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
  }else{
    res.status("Sorry, something wrong, theres's data incomplete")
  }
});

router.delete('/:id_anfitrion', function(req, res, next) {
  const id_anfitrion=req.params.id_anfitrion;
    pool.getConnection(function(err, connection) {
      connection.query('Delete from anfitrion where id="'+id_anfitrion+'"', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
});

router.put('/:id_anfitrion', function(req, res, next) {
  const id_anfitrion=req.params.id_anfitrion;
  const{correo,nombre, direccion, telefono, idioma}=req.body;
    pool.getConnection(function(err, connection) {
      connection.query('Update anfitrion set correo="'+correo+'", nombre="'+nombre+'", direccion="'+direccion+'", telefono="'+telefono+'", idioma="'+idioma+'" where id="'+id_anfitrion+'"', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
});

module.exports = router;
