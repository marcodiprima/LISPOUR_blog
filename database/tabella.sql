
drop DATABASE if exists homew2;
create database homew2;

use homew2;

drop table if exists users;
CREATE TABLE users(
    id integer primary key auto_increment,
    username varchar(16) not null unique,
    password varchar(255) not null,
    nome varchar(255) not null,
    cognome varchar(255) not null,
    email varchar(255) not null unique,
    created_at varchar(255) not null,
    updated_at varchar(255) not null
) Engine = InnoDB;

drop table if exists likes;

CREATE TABLE likes (
    user_id integer,
    titolo varchar(20) not null,
    image varchar(256) not null,
    post_id integer AUTO_INCREMENT primary key,
    created_at varchar(256),
    updated_at varchar(256),
    foreign key(user_id) references users(id) on delete cascade on update cascade
) Engine = InnoDB;
