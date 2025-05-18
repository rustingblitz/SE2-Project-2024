// faker.js

const mongoose = require('mongoose');
const faker = require('faker');

const mongoURI = 'mongodb+srv://username:password@dbcluster.br4aa.mongodb.net/DB_Mongo?retryWrites=true&w=majority&appName=DBCluster';

const User = mongoose.model('User', new mongoose.Schema({
  username: String,
  password: String
}));

async function seedUsers() {
  try {
    await mongoose.connect(mongoURI, {
      useNewUrlParser: true,
      useUnifiedTopology: true,
    });
    console.log('Connected to MongoDB');

    const users = [];
    for (let i = 0; i < 1000; i++) {
      users.push({
        username: `username${i}`,
        password: '123456' // or use faker.internet.password()
      });
    }

    await User.insertMany(users);
    console.log('Inserted 1000 users');
  } catch (error) {
    console.error('Error seeding users:', error.message);
  } finally {
    mongoose.disconnect();
  }
}

seedUsers();
