var express = require('express');
var router = express.Router();
var pool= require('../services/ApiConnection'); //Api connection 
/* GET users listing. */
router.get('/:id_usuario', function(req, res, next) {
  const id_usuario=req.params.id_usuario;
  pool.getConnection(function(err, connection) {
    connection.query('Select * from resevacion where id_usuario="'+id_usuario+'"', function (error, results, fields) {
        connection.release();
        if (error) throw error;
        res.json(results);  //We return the respone with all the information needed
    });
  });
});

module.exports = router;
