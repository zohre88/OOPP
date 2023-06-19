<?php 
namespace database;

class CreateDB extends Database
{
    private $createTableQueries = [
        "CREATE TABLE `categories` (
            `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(200) NOT NULL ,
            `created_at` datetime NOT NULL,
            `updated_at` datetime NULL,
            PRIMARY KEY(`id`)
        );",

        "CREATE TABLE `users` (
            `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            `username` VARCHAR(200) NOT NULL  ,
            `email` VARCHAR(200) NOT NULL ,
            `password` VARCHAR(200) NOT NULL,
            `permission` ENUM('user', 'admin') NOT NULL COLLATE utf8mb3_general_ci DEFAULT 'user',
            `created_at` datetime NOT NULL,
            `updated_at` datetime NULL,
            PRIMARY KEY(`id`),
            UNIQUE KEY(`email`)
        );",

        "CREATE TABLE `articles` (
            `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            `title` VARCHAR(200) NOT NULL ,
            `summary` TEXT NOT NULL ,
            `body` TEXT NOT NULL ,
            `view` INT(11) NOT NULL DEFAULT '0',
            `user_id` INT(11) UNSIGNED NOT NULL ,
            `category_id` INT(11) UNSIGNED NOT NULL ,
            `image` VARCHAR(200) NOT NULL ,
            `status` ENUM('enable', 'disable') NOT NULL DEFAULT 'disable',
            `created_at` datetime NOT NULL,
            `updated_at` datetime NULL,
            PRIMARY KEY(`id`),
            FOREIGN KEY(`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
            FOREIGN KEY(`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
        );"

    ];

    private $seeder = [
        [
            'table' => 'users',
            'fields'=> ['username', 'password', 'email', 'permission'],
            'values' => ['zohre', '123456', 'a@a.com', 'admin']
        ]
    ];

    public function run(){
        foreach($this->createTableQueries as $query)
        {
            $this->createTable($query);
        }
        foreach($this->seeder as $seeder){
            $this->insert($seeder['table'], $seeder['fields'], $seeder['values']);
        }
    }
}