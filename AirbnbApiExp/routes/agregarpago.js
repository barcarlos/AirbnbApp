var express = require('express');
var router = express.Router();
var pool= require('../services/ApiConnection'); //Api connection 
/* GET users listing. */

router.put('/:id_reservacion', function(req, res, next) {
  const id_reservacion=req.params.id_reservacion;
  const{id_pago}=req.body;
    pool.getConnection(function(err, connection) {
      connection.query('Update reservacion set id_pago="'+id_pago+'" where id="'+id_reservacion+'"', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
});

module.exports = router;
