var mysql      = require('mysql');
//Aqui cambien el usuario y la contraeña 
var pool  = mysql.createPool({
  connectionLimit : 10,
  host            : 'localhost',
  user            : 'root',
  password        : '151295',
  database        : 'airbnb2'
});
 module.exports =pool;