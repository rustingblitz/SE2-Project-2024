const express = require('express');
const router = express.Router();
const User = require('../../models/Users');
const authenticateToken = require('../../middleware/authMiddleware');
const { JsonWebTokenError } = require('jsonwebtoken');
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken');

router.get('/', async (req, res) => {
  try {
    const users = await User.find();
    res.json(users);
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

router.post('/signup', async (req, res) => {
  const { name, username, password } = req.body;
  if (!name || !username || !password) {
    return res.status(400).json({ message: 'All fields are required' });
  }
  const errors = [];
  if (!username || username.length < 8) {
    errors.push('username');
  }
  if (!password || password.length < 8) {
    errors.push('password');
  }

  if (errors.length > 0) {
    if (errors.includes('username') && errors.includes('password')) {
      return res.redirect('http://localhost:9001/bothErrors.html');
    } else if (errors.includes('username')) {
      return res.redirect('http://localhost:9001/usernameError.html');
    } else if (errors.includes('password')) {
      return res.redirect('http://localhost:9001/passwordError.html');
    }
  }
  try {
    const hashedPassword = await bcrypt.hash(password, 10);
    const newUser = new User({ name, username, password: hashedPassword });
    console.log('New User:', newUser);
    const savedUser = await newUser.save();
    res.status(201).redirect('http://localhost:9001/loginpage.html')
  } catch (err) {
    res.status(400).json({ message: err.message });
  }
});

router.put('/:id', async (req, res) => {
  try {
    const user = await User.findById(req.params.id);
    if (!user) return res.status(404).json({ message: 'User not found' });

    Object.assign(user, req.body);
    const updatedUser = await user.save();
    res.json(updatedUser);
  } catch (err) {
    res.status(400).json({ message: err.message });
  }
});

router.delete('/:id', async (req, res) => {
  try {
    const user = await User.findByIdAndDelete(req.params.id);
    if (!user) return res.status(404).json({ message: 'User not found' });

    res.json({ message: 'User deleted successfully' });
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

router.post('/login', async (req, res) => {
  const { username, password } = req.body;
  try {
    const user = await User.findOne({ username });
    if (!user) {
      return res.status(201).redirect('http://localhost:9001/invalid.html');
    }
    const MatchPass = await bcrypt.compare(password, user.password);
    if(!MatchPass){
      return res.status(201).redirect('http://localhost:9001/invalid.html');
    }
    const token = jwt.sign(
      { id: user._id, username: user.username},
      process.env.JWT_SECRET,
      { expiresIn: '1h'}
    );
    res.redirect('http://localhost:9001/saleh/restaurant.html');
  } catch (err) {
    console.log(err.message);
  }
});

module.exports = router;
