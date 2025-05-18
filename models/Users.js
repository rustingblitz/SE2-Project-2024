const mongoose = require('mongoose');
const { type } = require('os');

const UserSchema = new mongoose.Schema({
    name: {
        type: String,
        require: true
    },
    username: {
        type: String,
        require: true,
        unique: true,
        minlength: [8, 'Username must be at least 8 characters long']
    },
    password: {
        type: String,
        require: true,
        minlength: [8, 'Password must be at least 8 characters long']
    }
})
module.exports = mongoose.model('User', UserSchema);