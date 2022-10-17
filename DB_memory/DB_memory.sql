-- --------------------------------------------------------------------------------
--                                                                               --
--                                  1ère story                                   --
--                                                                               --
-- --------------------------------------------------------------------------------


DROP TABLE IF EXISTS game;

CREATE TABLE IF NOT EXISTS game (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    game_name varchar(255) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS messages;

CREATE TABLE IF NOT EXISTS messages (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    gameID INT UNSIGNED NOT NULL,
    userID INT UNSIGNED NOT NULL,
    messages varchar(255) NOT NULL,
    messages_time DATETIME NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS score;

CREATE TABLE IF NOT EXISTS score (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    userID INT UNSIGNED NOT NULL,
    gameID INT UNSIGNED NOT NULL,
    difficulty varchar(255) NOT NULL,
    score int(255) NOT NULL,
    game_time DATETIME NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS users;

CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    user_password varchar(64) NOT NULL,
    username varchar(255) NOT NULL,
    member_since DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    last_seen DATETIME DEFAULT NULL, 
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ---------------------------------
-- Edit table : score
-- ---------------------------------

-- add foreign key userID 

ALTER TABLE score
ADD CONSTRAINT FK_SCORE_ID_USER
FOREIGN KEY (userID)
REFERENCES users(id);

-- Add foreing key gameID

ALTER TABLE score 
ADD CONSTRAINT FK_SCORE_ID_GAME
FOREIGN KEY (gameID)
REFERENCES game(id);

-- ---------------------------------
-- Edit table : messages
-- ---------------------------------

-- Add foreing key gameID

ALTER TABLE messages
ADD CONSTRAINT FK_MESSAGES_ID_GAME
FOREIGN KEY (gameID)
REFERENCES game(id);

-- Add foreing key userID

ALTER TABLE messages 
ADD CONSTRAINT FK_MESSAGES_ID_USER 
FOREIGN KEY (userID)
REFERENCES users(id);

-- --------------------------------------------------------------------------------
--                                                                               --
--                                  2ème story                                   --
--                                                                               --
-- --------------------------------------------------------------------------------

-- -----------------------------------------------------------
-- manuellement
-- -----------------------------------------------------------
-- INSERT INTO users (email, user_password, username) 
-- VALUES
-- ('kevin@mail.com', 'kevinPASSWORD123', 'Kevin');
-- -----------------------------------------------------------


INSERT INTO users (email, user_password, username) 
VALUES
(@email, @password, @username);

ALTER TABLE users
ADD CONSTRAINT SET_USER_UNIQUE UNIQUE (email, username);


-- -----------------------------------------------------------
-- manuellement
-- -----------------------------------------------------------
-- INSERT INTO users (email, user_password, username) 
-- VALUES
-- ('kevin@mail.com', 'kevinPASSWORD123', 'Kevin');
-- -----------------------------------------------------------

-- -----------------------------------------------------------
-- @email, @user_password, @username => variable
-- SET : donner une valeur aux variable
-- -----------------------------------------------------------
-- SET @email = 'qwerty@mail.com', @password = 'azertyuiop', @username = 'qwerty'; 
-- 
-- INSERT INTO users (email, user_password, username) 
-- VALUES
-- (@email, @password, @username);
-- -----------------------------------------------------------

-- --------------------------------------------------------------------------------
--                                                                               --
--                                  3ème story                                   --
--                                                                               --
-- --------------------------------------------------------------------------------

--  La requête permettant de modifier le mot de passe de l’utilisateur s’exécute en précisant l’identifiant de celui-ci.
-- 
-- UPDATE : modifier un table existante, SET : mettre une valeur à une variable, WHERE : sur la "ligne" id 

UPDATE users
SET user_password = @password
WHERE id = @userID;

-- La requête permettant de modifier l’adresse email de l’utilisateur s’exécute en précisant l’identifiant de celui-ci et son mot de passe.

UPDATE users
SET email = @new_mail
WHERE id = @userID AND user_password = @current_password;

-- ----------------------------------------------------------------------------- --
--                                                                               --
--                                  4ème story                                   --
--                                                                               --
-- ----------------------------------------------------------------------------- --

SELECT *
FROM users
WHERE email = @current_mail AND user_password = @current_password;

-- ----------------------------------------------------------------------------- --
--                                                                               --
--                                  5ème story                                   --
--                                                                               --
-- ----------------------------------------------------------------------------- --

INSERT INTO game (game_name) VALUES
('The Power Of Memory');

-- ----------------------------------------------------------------------------- --
--                                                                               --
--                                  6ème story                                   --
--                                                                               --
-- ----------------------------------------------------------------------------- --

SELECT game_name
FROM game

-- ----------------------------------------------------------------------------- --
--                                                                               --
--                                  7ème story                                   --
--                                                                               --
-- ----------------------------------------------------------------------------- --

