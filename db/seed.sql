DELETE FROM categories;
DELETE FROM posts;
DELETE FROM post_category;

INSERT INTO categories (id, name, description) VALUES
(1, 'Category 1', 'description category 1'),
(2, 'Category 2', 'description category 2'),
(3, 'Category 3', 'description category 3');

INSERT INTO posts (id, title, description, text, views) VALUES
(1, 'Post number 1', 'Name 1', 'Post text...', 10),
(2, 'Post number 2', 'Name 2', 'Post text...', 5),
(3, 'Post number 3', 'Name 3', 'Post text...', 3),
(4, 'Post number 4', 'Name 4', 'Post text...', 1),
(5, 'Post number 5', 'Name 5', 'Post text...', 3),
(6, 'Post number 6', 'Name 6', 'Post text...', 6),
(7, 'Post number 7', 'Name 7', 'Post text...', 13),
(8, 'Post number 8', 'Name 8', 'Post text...', 2),
(9, 'Post number 9', 'Name 9', 'Post text...', 3);

INSERT INTO post_category (post_id, category_id) VALUES
(1, 1),
(2, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 3),
(2, 3),
(4, 3);
