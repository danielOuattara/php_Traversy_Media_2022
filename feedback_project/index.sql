CREATE USER 'daniel' @'localhost' IDENTIFIED VIA mysql_native_password USING '***';

GRANT ALL PRIVILEGES ON *.* TO 'daniel' @'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON `php\_dev\_traversy`.* TO 'daniel' @'localhost';

INSERT INTO
    `feedback` (`id`, `name`, `email`, `body`, `date`)
VALUES
    (
        NULL,
        'John Doe',
        'j.doe@email.com',
        'I like to learn coding with Brad',
        current_timestamp()
    );

INSERT INTO
    `feedback` (`id`, `name`, `email`, `body`, `date`)
VALUES
    (
        NULL,
        'Jana Doe',
        'jana@email.com',
        'I learnt a lot with Brad. Good teacher',
        current_timestamp()
    ),
    (
        NULL,
        'Bob Marley',
        'marley@email.com',
        'Gandja is good, Coding too !',
        current_timestamp()
    );