USE artwork;
DROP TABLE IF EXISTS comments;
DROP TABLE IF EXISTS type_of;
DROP TABLE IF EXISTS categories;
DROP TABLE IF EXISTS arts;
DROP TABLE IF EXISTS blogs;
DROP TABLE IF EXISTS courses;
DROP TABLE IF EXISTS admins;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS accounts;

CREATE TABLE accounts (
    id varchar(100),
    username varchar(50) UNIQUE NOT NULL,
    password varchar(50) NOT NULL,
    created_at datetime NOT NULL,
    PRIMARY KEY (id)
    );

CREATE TABLE admins (
    admin_id varchar(100),
    PRIMARY KEY (admin_id),
    FOREIGN KEY (admin_id) REFERENCES accounts(id) ON DELETE CASCADE
);

CREATE TABLE users (
    user_id varchar(100),
    name varchar(50) NOT NULL,
    coin integer(10) NOT NULL,
    email varchar(50),
    phone integer(10) UNIQUE,
    PRIMARY KEY (user_id),
    FOREIGN KEY (user_id) REFERENCES accounts(id) ON DELETE CASCADE

);

CREATE TABLE courses (
    id varchar(100),
    name varchar(50) NOT NULL,
    user_id VARCHAR(100) NOT NULL,
    price int(50),
    duration time,
    schedule varchar(100),
    created_at datetime NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

CREATE TABLE blogs (
    id varchar(100),
    user_id VARCHAR(100) NOT NULL,
    name varchar(50) NOT NULL,
    created_at datetime NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE

);

CREATE TABLE arts (
    id varchar(100),
    user_id VARCHAR(100) NOT NULL,
    name varchar(50) NOT NULL,
    material varchar (50),
    rating integer(10),
    created_at datetime NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

CREATE TABLE categories (
    id varchar(100),
    c_name varchar(50) NOT NULL UNIQUE,
    c_type varchar(50),
    created_at datetime NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE type_of (
    art_id VARCHAR(100),
    category VARCHAR(100),
    PRIMARY KEY (art_id, category),
    FOREIGN KEY (art_id) REFERENCES arts(id) ON DELETE CASCADE,
    FOREIGN KEY (category) REFERENCES categories(id) ON DELETE CASCADE
);

CREATE TABLE comments (
    id varchar(100),
    content TEXT(100),
    type varchar(10),
    created_at datetime NOT NULL,
    course_id VARCHAR(100),
    blog_id VARCHAR(100),
    art_id VARCHAR(100),
    PRIMARY KEY (id),
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE,
    FOREIGN KEY (blog_id) REFERENCES blogs(id) ON DELETE CASCADE,
    FOREIGN KEY (art_id) REFERENCES arts(id) ON DELETE CASCADE
)


