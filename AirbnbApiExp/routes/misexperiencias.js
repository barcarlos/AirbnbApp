var express = require('express');
var router = express.Router();
var pool= require('../services/ApiConnection'); //Api connection 
/* GET users listing. */
router.get('/:id', function(req, res, next) {
  const id=req.params.id;
  pool.getConnection(function(err, connection) {
    connection.query('Select * from experiencia where id_anfitrion= "'+id+'" order by id asc', function (error, results, fields) {
        connection.release();
        if (error) throw error;
        res.json(results);  //We return the respone with all the information needed
    });
  });
});


module.exports = router;
