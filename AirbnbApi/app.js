var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');

var indexRouter = require('./routes/index');
var loginRouter = require('./routes/login');
var usuarioRouter = require('./routes/usuario');
var anfitrionRouter = require('./routes/anfitrion');
var departamentoRouter = require('./routes/departamento');
var estadosRouter = require('./routes/estados');
var amenidadRouter = require('./routes/amenidad');
var amenidad_departamentoRouter = require('./routes/amenidad_departamento');
var estado_nombreRouter = require('./routes/estado_nombre');
var imagenRouter = require('./routes/imagen');

var app = express();

// view engine setup
/*app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'pug');*/

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', indexRouter);
app.use('/login', loginRouter);
app.use('/usuario', usuarioRouter);
app.use('/anfitrion', anfitrionRouter);
app.use('/departamento', departamentoRouter);
app.use('/estados', estadosRouter);
app.use('/amenidad', amenidadRouter);
app.use('/amenidad_departamento', amenidad_departamentoRouter);
app.use('/estado_nombre', estado_nombreRouter);
app.use('/imagen', imagenRouter);
/*
// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});*/

module.exports = app;
