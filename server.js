const express = require('express');
const mongoose = require('mongoose');
const logger = require('./middleware/logger');
const bodyparser = require('body-parser');
const Users = require('./models/Users');
require('dotenv').config();

const app = express();
const PORT = 9001;

app.use(express.json());
app.use(logger);
app.use(express.urlencoded({ extended: true }));

app.use(express.static('public'));
app.use(express.static('Restaurant'));

app.use('/api/members', require('./routes/api/members'));


const mongoURI = 'mongodb+srv://username:passworf@dbcluster.br4aa.mongodb.net/DB_Mongo?retryWrites=true&w=majority&appName=DBCluster';

mongoose.connect(mongoURI, {
  useNewUrlParser: true,
  useUnifiedTopology: true
})
  .then(() => console.log('Connected to MongoDB Atlas'))
  .catch((err) => console.error('Error connecting to MongoDB:', err.message));


app.listen(PORT, () => console.log(`Server running on http://localhost:${PORT}`));
