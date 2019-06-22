var express = require('express');
var router = express.Router();
var pool= require('../services/ApiConnection'); //Api connection 
/* GET users listing. */
router.get('/:nombre', function(req, res, next) {
  const nombre=req.params.nombre;
  pool.getConnection(function(err, connection) {
    connection.query('Select * from estado where nombre like "'+nombre+'"', function (error, results, fields) {
        connection.release();
        if (error) throw error;
        res.json(results);  //We return the respone with all the information needed
    });
  });
});
module.exports = router;
