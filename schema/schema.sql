CREATE TABLE gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    slug VARCHAR(190) NOT NULL,
    name VARCHAR(255) NOT NULL,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE image (
    id INT AUTO_INCREMENT PRIMARY KEY,
    file VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    altText TEXT,
    description TEXT,
    slug VARCHAR(191) NOT NULL,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE gallery_image (
    image_id INT NOT NULL,
    gallery_id INT NOT NULL,
    PRIMARY KEY (gallery_id, image_id),
    FOREIGN KEY gallery_key(gallery_id) REFERENCES gallery(id),
    FOREIGN KEY image_key(image_id) REFERENCES image(id)
);
