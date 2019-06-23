var express = require('express');
var router = express.Router();
var pool= require('../services/ApiConnection'); //Api connection 
/* GET users listing. */
router.get('/', function(req, res, next) {
  const id_departamento=req.params.id_departamento;
  pool.getConnection(function(err, connection) {
    connection.query('Select * from departamento', function (error, results, fields) {
        connection.release();
        if (error) throw error;
        res.json(results);  //We return the respone with all the information needed
    });
  });
});
module.exports = router;
