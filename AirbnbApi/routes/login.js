var express = require('express');
var router = express.Router();
var pool= require('../services/ApiConnection'); //Api connection 
/* GET users listing. */
router.get('/:correo&:constrasena', function(req, res, next) {
  const correo=req.params.correo;
  const contrasena=req.params.contrasena;
  pool.getConnection(function(err, connection) {
    connection.query('Select * from usuario where correo="'+correo+'" and contrasena="'+contrasena+'"', function (error, results, fields) {
        connection.release();
        if (error) throw error;
        res.json(results);  //We return the respone with all the information needed
    });
  });
});

module.exports = router;
