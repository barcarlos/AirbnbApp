var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');

var indexRouter = require('./routes/index');
var reservacionRouter = require('./routes/reservacion');
var reservacionesRouter = require('./routes/reservaciones');
var experienciaRouter = require('./routes/experiencia');
var pagoRouter = require('./routes/pago');
var agregarpagoRouter = require('./routes/agregarpago');
var experienciasRouter = require('./routes/experiencias');
var misexperienciasRouter = require('./routes/misexperiencias');

var app = express();

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', indexRouter);
app.use('/reservacion', reservacionRouter);
app.use('/reservaciones', reservacionesRouter);
app.use('/experiencia', experienciaRouter);
app.use('/agregarpago', agregarpagoRouter);
app.use('/pago', pagoRouter);
app.use('/experiencias', experienciasRouter);
app.use('/misexperiencias', misexperienciasRouter);

module.exports = app;
