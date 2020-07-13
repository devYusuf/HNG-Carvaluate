require("./config/database");
const path = require("path");
const express = require("express");
const cookieParser = require("cookie-parser");
const session = require("express-session");
const flash = require("express-flash");
const MongoDBStore = require('connect-mongodb-session')(session);
const helmet = require("helmet");
const compression = require("compression");
const routes = require("./config/routes");

const store = new MongoDBStore({
  uri: process.env.MONGO_URI,
  collection: 'sessions'
});

const app = express();

app.set("view engine", "ejs");
app.set("views", path.join(__dirname, 'views'));

app.use(express.urlencoded({ extended: false }));
app.use(express.json());
app.use(cookieParser('secret'));
app.use(session({
    cookie: {},
    saveUninitialized: true,
    store: store,
    resave: true,
    secret: 'secret'
}));
app.use(flash());
app.use(helmet());
app.use(compression());
app.use("/public", express.static(path.join(__dirname, "public")));
app.use(routes);

module.exports = app;
