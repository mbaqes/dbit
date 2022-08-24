 const express = require('express');
 const app = express();
 const server = require('http').createServer(app);
 const io = require('socket.io')(server, {
     cors: { origin: "*" }
 });
 io.on('connection', (socket) => {
     console.log('connection');
     socket.on('disconnect', (socket) => {
         console.log('disconnect');
     })
 });
 server.listen(8000, () => {
     console.log('server is running');
 })