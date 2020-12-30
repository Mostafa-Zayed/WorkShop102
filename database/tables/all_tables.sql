CREATE TABLE IF NOT EXISTS `users`(
    `id` int(11) unsigned not null auto_increment primary key,
    `name` varchar(50) not null,
    `email` varchar(255) not null unique,
    `password` varchar(255) not null,
    `image` varchar(255) 
    );

CREATE TABLE IF NOT EXISTS `sliders`(
    `id` int(11) unsigned not null auto_increment primary key,
    `title` varchar(255) not null,
    `slug` varchar(255) not null,
    `image` varchar(255) not null,
    `link` varchar(255) not null
    );

CREATE TABLE IF NOT EXISTS `services` (
    `id` int(11) unsigned not null auto_increment primary key,
    `name` varchar(100) not null unique,
    `icon` varchar(50) not null,
    `description` text not null,
    `is_show` tinyint(1) default 0
    );

CREATE TABLE IF NOT EXISTS `portfolios` (
    `id` int(11) unsigned not null auto_increment primary key,
    `name` varchar(50) not null,
    `description` text not null,
    `client` varchar(100) not null,
    `date` varchar(100) not null,
    `location` varchar(25) not null,
    `author` varchar(50) not null,
    `image` varchar(255) not null,
    `is_show` tinyint(1) not null default 0,
    `service_id` int(11) unsigned,
    constraint fk_services_portfolio foreign key(service_id) references services(id)
    );

CREATE TABLE IF NOT EXISTS `messages`(
    `id` int(11) unsigned not null auto_increment primary key,
    `name` varchar(50) not null,
    `email` varchar(255) not null unique,
    `phone` varchar(20),
    `organization` varchar(100) ,
    `content` text not null,
    `date` timestamp
    );

CREATE TABLE IF NOT EXISTS `contacts` (
    `id` int(11) unsigned not null auto_increment primary key,
    `name` varchar(50) not null,
    `phone` varchar(20) not null,
    `email` varchar(255) not null,
    `days` varchar(255) not null,
    `closed` varchar(50) not null,
    `street` varchar(255) not null,
    `is_show` tinyint(1) not null default 0
    );

CREATE TABLE IF NOT EXISTS `questions` (
    `id` int(11) unsigned not null auto_increment primary key,
    `content` text not null,
    `image` varchar(255) not null,
    `is_show` tinyint(1) not null default 0
    );

CREATE TABLE IF NOT EXISTS `answers` (
    `id` int(11) unsigned not null auto_increment primary key,
    `content` varchar(255) not null,
    `question_id` int(11) unsigned not null,
    constraint fK_question_answer foreign key(question_id) references questions(id)
    );

CREATE TABLE IF NOT EXISTS `abouts` (
    `id` int(11) unsigned not null auto_increment primary key,
    `title` varchar(50) not null,
    `description` text not null,
    `link` varchar(255) not null,
    `image` varchar(255) not null,
    `video_link` varchar(255) not null,
    `is_show` tinyint(1) not null default 0
    )

