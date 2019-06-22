var express = require('express');
var router = express.Router();
var pool= require('../services/ApiConnection'); //Api connection 
/* GET users listing. */
router.put('/:id', function(req, res, next) {
  const{imagen}=req.body;
  const id=req.params.id;
  console.log(imagen);
    pool.getConnection(function(err, connection) {
      connection.query('Update departamento set imagen="'+imagen+'" where id="'+id+'"', function (error, results, fields) {
          connection.release();
          if (error) throw error;
          res.json(results);  //We return the respone with all the information needed
      });
    });
});

module.exports = router;
