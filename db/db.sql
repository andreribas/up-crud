create database if not exists games;
create table if not exists game (
    id int auto_increment primary key,
    name varchar(255),
    description text,
    category varchar(50),
    release_year int,
    created_at datetime default now()
);