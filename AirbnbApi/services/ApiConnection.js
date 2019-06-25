var mysql      = require('mysql');
//Aqui cambien el usuario y la contraeña 
var pool  = mysql.createPool({
  connectionLimit : 10,
  host            : 'localhost',
  user            : 'root',
  password        : 'qwerty1',
  database        : 'airbnb'
});
 module.exports =pool;