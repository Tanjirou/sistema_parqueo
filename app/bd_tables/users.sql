CREATE TABLE USERS(
    id              INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    names           VARCHAR(255) NOT NULL,
    email           VARCHAR(255) NOT NULL,
    verify_email    VARCHAR(255) null,
    password        VARCHAR(255) NOT NULL,
    token           VARCHAR(255) NULL,
    created_at      DATETIME NOT NULL,
    updated_at      DATETIME NOT NULL,
    delete_date     DATETIME NULL,
    status          VARCHAR(1)
);